<?php get_header(); ?>
<div id="content">
<?php get_sidebar(); ?>
<div id="text">
<?php include (TEMPLATEPATH . "/wp-loop.php"); ?>
</div>
<div id="tag_cloud">
<?php wp_tag_cloud(''); ?>
</div>
</div>
<?php get_footer(); ?>
