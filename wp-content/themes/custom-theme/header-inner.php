<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<ul class="navigation">
	<?php 
		$v = 0;
		$menuargs = array(
			"theme_location" => "primary",
			"menu_class" => "s-menu",
			"menu_id" => "MAIN-MENU",
		);
		$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
	?> 
	<?php foreach( $items as $item ){ ?>
    	<li class="nav-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
    <?php } ?>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<div class="site-wrap">
<section class="menu-desktop"> 
	<div class="col-md-12" style="background-color:white;padding-bottom:30px;padding-top:20px;border-bottom: 2px solid #06663a;">
		<div class="fs-inner">
			<div class="col-xs-1 col-md-3 left header-logo no-space">
				<a href="<?php echo get_option('home'); ?>">
					<?php the_custom_logo(); ?>
				</a>
			</div>
			<div class="col-xs-10 col-md-9 right header-logo" style="margin-top: 50px;height: 50px;">
					<nav id="menu" role="navigation">
						<?php 
							$v = 0;
							$menuargs = array(
								"theme_location" => "primary",
								"menu_class" => "s-menu",
								"menu_id" => "MAIN-MENU",
							);
							$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
						?> 
						<ul class="menu-header" style="">
							<?php foreach( $items as $item ){ ?>	
								<li><a href="<?php echo $item->url; ?>" class="right"><?php echo $item->title; ?></a></li>
							<?php } ?>	
						</ul>
					</nav>	
			</div>
		</div>
	</div>
</section>
<section class="menu-mobile"> 
	<div class="col-md-12" style="border-bottom: 2px solid #06663a;background-color: white;height: 75px;">
		<div class="col-xs-1 left header-logo">
			<nav id="menu" role="navigation">
				<ul class="menu-header-mobile">
					<li><label for="nav-trigger"><i class="fa fa-bars" style="color:#06663a" aria-hidden="true"></i></label></li>
				</ul>
			</nav>			
		</div>
		<div class="col-xs-8 left header-logo" style="padding-top: 10px;margin-left: 10px;">
			<a href="<?php echo get_option('home'); ?>">
				<?php the_custom_logo(); ?>
			</a>
		</div>
	</div>
</section>

