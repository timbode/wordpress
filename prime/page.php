<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>
<div id="text">
<!-- page content -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
<div id="tag_cloud">
<?php wp_tag_cloud(''); ?>
</div>
</div>
<?php get_footer(); ?>
