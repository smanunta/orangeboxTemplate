<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

			<!--off canvas content goes here--->
			<div class="off-canvas position-left reveal-for-medium reveal-for-large side-nav-2" id="offCanvasMenu" data-off-canvas data-position="left">
				<header id="masthead" class="site-header" role="banner">

					<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
						<div class="animatedTitle1">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						  <h6 id="opener">
						  <span class="closer"><i class="fa fa-cube" aria-hidden="true"></i></span><span class="closer">OrangeBox</span>
						  </h6>
						</a>
						</div>


					<!--	<div class="row expanded">
						  <div class="medium-12 medium-centered columns">
						    <ul class="vertical accordion-menu menu" data-accordion-menu>
						      <li>
						        <a href="#">Item 1</a>
						        <ul class="menu vertical sublevel-1">
						          <li>
						            <a href="#">Sub-item 1</a>
						            <ul class="menu vertical sublevel-2">
						              <li><a class="subitem" href="#">Thing 1</a></li>
						              <li><a class="subitem" href="#">Thing 2</a></li>
						              <li><a class="subitem" href="#">Thing 3</a></li>
						            </ul>
						          </li>
						          <li>
						            <a href="#">Sub-item 2</a>
						            <ul class="menu vertical sublevel-2">
						              <li>
						                <a href="#">Super-sub-item 1</a>
						                <ul class="menu vertical sublevel-3">
						                  <li><a class="subitem" href="#">Thing 1</a></li>
						                  <li><a class="subitem" href="#">Thing 2</a></li>
						                </ul>
						              </li>
						              <li><a class="subitem" href="#">Thing 2</a></li>
						            </ul>
						          </li>
						          <li><a class="subitem" href="#">Thing 1</a></li>
						          <li><a class="subitem" href="#">Thing 2</a></li>
						        </ul>
						      </li>
						    </ul>
						  </div>
					</div>-->

					<?php foundationpress_left_off_canvas(); ?>

					</nav>
				</header>
			</div>
			<!--off canvas content goes here--->

			<!--main page content goes here-->
			<div class="off-canvas-content" data-off-canvas-content>


		<section class="container">
			<?php do_action( 'foundationpress_after_header' );
