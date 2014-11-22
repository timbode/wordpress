<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>
<div id="text">
<!-- single post -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="single_content">
<div class="date">
<?php the_time('F'); ?>
<p class="date-month"><?php the_time('j'); ?></p>
</div>
<h1><?php the_title(); ?></h1>
<p class="post_info">
<img src="<?php bloginfo('url'); ?>/wp-content/themes/prime/img/lightbulb.png" class="post_icon_1" alt="Category" /><?php the_category(', '); ?>
<img src="<?php bloginfo('url'); ?>/wp-content/themes/prime/img/flag_green.png" class="post_icon" alt="Category" /><?php $tag = get_the_tags(); if (! $tag) {echo "No tags";} else {the_tags('Tags: ', ', ', '');} ?>
</p>
<?php the_content(); ?>
</div>
<div class="clearfix"></div>
<div class="bookmarks">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/themes/prime/img/feed.png" class="post_icon" title="RSS Feed for this article" alt="RSS Feed" /></a>
</div>
<?php comments_template(); ?>
<?php endwhile; ?><p id="next-posts"><?php previous_post_link() ?> | <?php next_post_link() ?></p>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?></div>
<div id="tag_cloud">
<?php wp_tag_cloud(''); ?>
</div>
</div>
<?php get_footer(); ?>
