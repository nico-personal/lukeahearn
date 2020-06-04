<?php
/**
 * Theme Header
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	

</head>

<body <?php body_class(); ?>>


	<!-- page preloader -->
	<!-- <div class="preloader">
		<div class="preloader_image to_animate" data-animation="pulse" ></div>
	</div> -->

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
	<div class="widget widget_search">

<form role="search" method="get" class="search-form form-inline" action="http://webdesign-finder.com/hi5clive/">
	<div class="form-group">
		<label>
			<input type="search" class="search-field form-control"
			       placeholder="Search"
			       value="" name="s"
			       title="Search for:"/>
		</label>
	</div>
	<button type="submit" class="search-submit theme_button">
		<span class="screen-reader-text">Search</span>
	</button>
</form>
	</div>
</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
					</div>
	</div><!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas" class="wide">
	<div id="box_wrapper">
		<!-- template sections -->
		<header id="header" class="page_header header_1 toggler_right affix-top ds">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 display_table">

				<div class="header_left_logo display_table_cell">
					<a href="http://webdesign-finder.com/hi5clive/" rel="home" class="logo logo_image_only">
						<img src="//webdesign-finder.com/hi5clive/wp-content/uploads/2018/10/logo-2.png" alt="">
					</a>
				</div><!-- eof .header_left_logo -->
				<div class="header_mainmenu display_table_cell text-right">


					<nav class="mainmenu_wrapper primary-navigation">
						<ul id="menu-main-menu-default" class="sf-menu nav-menu nav">
						<!-- <?php 

									wp_nav_menu( array(
										'menu'           => 'Primary Menu', // Do not fall back to first non-empty menu.
										'depth'	         => 3,
										'theme_location' => 'top',
										'menu_class' 	 => 'nav navbar-nav main-menu',
										'container'       => 'div',
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => 'navbarSupportedContent',
										'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
										'walker'          => new WP_Bootstrap_Navwalker(),
									)); 

								?> -->
<!-- 
							<li id="menu-item-4658" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4630 current_page_item menu-item-4658">
								<a href="http://webdesign-finder.com/hi5clive/" >Home</a>
							</li>

							<li id="menu-item-4648" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4648">
								<a href="http://webdesign-finder.com/hi5clive/about/" >About</a>
							</li>

							<li id="menu-item-4666" class="menu-item menu-item-type-taxonomy menu-item-object-fw-services-category menu-item-4666">
								<a href="http://webdesign-finder.com/hi5clive/services/our-services/" >Services</a>
							</li>

							<li id="menu-item-4652" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4652">
								<a href="http://webdesign-finder.com/hi5clive/contacts/" >Contacts</a>
							</li> -->

						</ul>
					</nav>

					<span class="toggle_menu"><span></span></span>
				</div><!--	eof .col-sm-* -->
			</div>
		</div><!--	eof .row-->
	</div> <!--	eof .container-->
</header><!-- eof .page_header -->

<?php

      //   wp_nav_menu( array(
		  //   'menu'           => 'Primary Menu', // Do not fall back to first non-empty menu.
		  //   'depth'	         => 3,
		  //   'theme_location' => 'top',
		  //   'menu_class' 	 => 'nav navbar-nav main-menu',
		  //   'container'       => 'div',
			// 'container_class' => 'collapse navbar-collapse',
			// 'container_id'    => 'navbarSupportedContent',
			// 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			// 'walker'          => new WP_Bootstrap_Navwalker(),
		//));

?>
