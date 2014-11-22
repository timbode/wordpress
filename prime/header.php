<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php if ( is_home() ) { ?><?php bloginfo('description'); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php echo $s; ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_tag() ) { ?><?php single_tag_title();?> - <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_404() ) { ?>Sorry, not found! - <?php bloginfo('name'); ?><?php } ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--[if IE 6]>
<style type="text/css">
div#sidebar_random img {width: 180px;}
div.post_right img {width: 250px;}
</style>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cookies.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fontResizer.js"></script>
<!-- wp_head -->
<?php wp_head(); ?>
</head>

<body>
<div id="page">
<div id="header">
<!-- blog title and tag line -->
<div id="description">
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<p><?php bloginfo('description'); ?></p>
</div>
</div>
<!-- page navigation -->
<div id="nav">
<ul>
<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order'); ?>                   
</ul>  
</div>
<!-- ending header template -->
