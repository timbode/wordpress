<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>
<div id="text">
<h2>Not found!</h2>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<!-- search template -->
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
</div>
</div>
<div id="tag_cloud">
<?php wp_tag_cloud(''); ?>
</div>
<?php get_footer(); ?>
