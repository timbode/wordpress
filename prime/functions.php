<?php

// Widget Settings
if ( function_exists('register_sidebar') )
        {
        register_sidebar(array(
        'name' => 'sidebar_left',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        ));

        register_sidebar(array(
        'name' => 'sidebar_second',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        ));
}

//extracting post image
function post_image() {
        global $id, $wpdb;

        //reading from database
        $image_data = $wpdb->get_results("SELECT guid, post_content, post_mime_type, post_title
        FROM $wpdb->posts
        WHERE post_type = 'attachment' && post_parent = $id && post_mime_type LIKE '%image%'
        ORDER BY ID ASC");

$first_image_data = array ($image_data[0]);

        //array output
        foreach($first_image_data as $output) {


                        //if there is no description use title (filename) instead
                        if (empty($output->post_content) == TRUE)
                                  {$output->post_content = $output->post_title;}

                        //images
                        if (substr($output->post_mime_type, 0, 5) == 'image')
                                 {echo "<img src=\"$output->guid\" alt=\"$output->post_title\" title=\"$output->post_content\" /> \n";}

                        else
                                 {echo "<img src=\"".get_bloginfo ('url')."/wp-content/themes/prime/img/wp_default.png\" alt=\"default image\" title=\"No image added\" class=\"post_img\" /> \n";}

                                             }
}

?>
<?php

function widget_devolux_random() {
?>
<!-- random posts -->
<div id="sidebar_random">
<h4>Random posts</h4>
<!-- custom WP query -->
<?php if (have_posts()) : ?>
<?php $rand_posts = new WP_Query('showposts=3&orderby=rand'); ?>
<?php while($rand_posts->have_posts()) : $rand_posts->the_post(); ?>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php post_image(); ?></a>
<?php endwhile; ?>
<?php endif; ?>
</div>	

<?php
}

if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Random Posts'), 'widget_devolux_random');
?>
