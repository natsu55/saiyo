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
						<li>企業保証のエキスパート | 大同生命 採用サイト</li>
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
					<img src="img/icons/menu.png" alt="menu" width="40">
				</button>
				<!-- Logo -->
				<a class="navbar-brand" href="/">
					<img class="logo-change" src="img/logo.png" alt="logo">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'nav navbar-nav navbar-right' ) ); ?>
			</div><!-- #site-navigation -->

			<!-- Menu Items -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/KnowCompany.php">会社を知る</a>
					</li>
					<li>
						<a href="/KnowPeople.php">人を知る</a>
					</li>
					<li>
						<a href="/FAQ.php">FAQ</a>
					</li>
					<li>
						<a href="#">採用情報</a>
					</li>

				</ul>
				<div class="right-entry">
					<div class="entry-text">
						<ul>
							<li class="font-14">
								<span>今すぐ応募する</span>
							</li>
							<li class="font-14">ENTRY</li>
						</ul>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>

