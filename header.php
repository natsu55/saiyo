<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package luggage
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="loader"></div>
	</div>
	<!-- Scroll to Top -->
	<a id="scroll-up">
		<i class="fa fa-angle-up"></i>
	</a>

	<!-- Top Bar  -->
	<div class="konnect-info">
		<div class="container">
			<div class="row">
				<!-- Top bar Left -->
				<div class="col-md-12 col-sm-12 hidden-xs">
					<ul>
						<li><?php echo get_bloginfo('description'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- Main Navigation + LOGO Area -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container container-fluid">
			<div class="navbar-header">
				<!-- Responsive Menu -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<img src="<?php echo(get_template_directory_uri())?>/img/icons/menu.png" alt="menu" width="40">
				</button>
				<!-- Logo -->
				<a class="navbar-brand" href="/">
					<img class="logo-change" src="<?php header_image() ?>" alt="logo">
				</a>
			</div>

			<!-- Menu Items -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<?php 
						$nav_items = wp_get_nav_menu_items('Menu');
						
						foreach ($nav_items AS $nav_item){
							echo '<li><a href="'.$nav_item->url.'" title="'.$nav_item->title.'">'.$nav_item->title.'</a></li>';
						}
					?>

				</ul>
				<div class="right-entry">
					<div class="entry-text">
						<ul>
							<li class="font-14 entry-nav">
								<?php
									$entry_nav = wp_get_nav_menu_items('Entry')[0];
									echo '<a href="'.$entry_nav->url.'" title="'.$entry_nav->title.'">'.$entry_nav->title.'</a>';
								?>
							</li>
						</ul>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>

