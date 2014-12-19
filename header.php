<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php get_bloginfo('name') ?><?php if ( is_404() ) : ?> &rsaquo; <?php _e('Page not found', 'veryplaintxt') ?><?php elseif ( is_home() ) : ?> &rsaquo; <?php get_bloginfo('description') ?><?php elseif ( is_category() ) : ?> &rsaquo; <?php echo single_cat_title(); ?><?php elseif ( is_date() ) : ?> &rsaquo; <?php _e('Blog archives', 'veryplaintxt') ?><?php elseif ( is_search() ) : ?> &rsaquo; <?php _e('Search results', 'veryplaintxt') ?><?php else : ?> &rsaquo; <?php the_title() ?><?php endif ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php bloginfo('stylesheet_url'); ?>" title="veryplaintxt" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/print.css" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php bloginfo('name') ?> RSS feed" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php bloginfo('name') ?> comments RSS feed" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<?php wp_head() // Do not remove; helps plugins work ?>

</head>

<body class="<?php veryplaintxt_body_class() ?>">

<div id="wrapper">

	<div id="header">
		<h1 id="blog-title">
            <h1 id="blog-title"><a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>
		<div id="blog-description"><?php bloginfo('description') ?></div>
	</div><!-- #header -->
	
	<div class="access"><span class="content-access"><a href="#content" title="<?php _e('Skip to content', 'veryplaintxt'); ?>"><?php _e('Skip to content', 'veryplaintxt'); ?></a></span></div>

<?php veryplaintxt_globalnav() // Adds list of pages just below header ?>