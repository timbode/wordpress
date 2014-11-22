<div id="sidebar">
<p id="font-resize">
<a id="default" href="#">A </a><a id="larger" href="#">A+ </a><a id="largest" href="#">A++</a>
</p>

<?php // if there are subpages of the current page,they will be listed here
           if($post->post_parent)
           $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&sort_column=menu_order"); else
           $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&sort_column=menu_order");
           if ($children) { ?>

<!-- subpages -->
<div class="widget"><h4>Subpages</h4>
<ul>
<?php echo $children; ?>
</ul></div>
<?php } ?>

<!-- widget -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_left') ) : ?>
<h4>Categories</h4>
<ul>
<?php wp_list_categories('title_li=0&categorize=0'); ?>
</ul>
<h4>Archives</h4>
<ul>
<?php wp_get_archives('type=monthly&limit=10'); ?>
</ul>
<?php endif; // endif widget ?>
<!-- widget -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_second') ) : ?>
<div id="meta" class="widget">
<h4>Blogroll</h4>
<ul>
<?php wp_list_bookmarks('title_li=0&categorize=0'); ?>
</ul>
<h4>Meta</h4>	
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<?php wp_meta(); ?>
</ul>
</div>
<?php endif; // endif widget ?>     
</div>
