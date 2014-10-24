<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="header"> <!-- begin header -->

	<div id="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/emma_logo_216px.png" alt="Emma B. Andrews Diary Project Logo" ></a>
	</div>

	<div id="top_right">
		<span>A Record of Nile Travel 1889 - 1912 </span>
		<a href="https://www.facebook.com/EmmaBAndrewsDiary?fref=ts"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook_small.gif" alt="Facebook" title="Facebook" /></a>
		<a href="http://twitter.com/sarahketchley"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter_small.gif" alt="Twitter"  title="Twitter" /></a>
		<a href="http://emmabandrews.tumblr.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/tumblr_logo_white_blue_16.png" alt="Tumblr" title="Tumblr" /></a>
	</div>

</div> <!-- end header -->

	<div id="panel"> <!-- begin panel -->

		<hr /><img src="<?php bloginfo('stylesheet_directory'); ?>/img/eba_banner3.jpg" alt="" /><hr />

	</div> <!-- end panel -->
