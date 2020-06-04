<?php
/**
* Footer Template
*
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @since   1.0.0
* @package themezero
*/


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}  ?>


<footer id="footer" class="page_footer footer_1 section_padding_top_100 section_padding_bottom_100 columns_padding_25"   style="background-image: url(//webdesign-finder.com/hi5clive/wp-content/uploads/2018/08/footer_bg.jpg)">
				<div class="container">

						<div class="row">
								<div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 to_animate" data-animation="fadeInUp">
					<div class="widget-odd widget-first widget-1 footer-special-first widget widget-theme-wrapper  text-center">
						<div id="mwt_banner-2" class="widget widget_banner">	
							<?php if( is_active_sidebar('footer-email') ) : ?>
                          <div class="widget-area widget-menu">
                              <?php dynamic_sidebar('footer-email')  ?>
                          </div>
                  <?php endif; ?>
</div></div><div class="widget-even widget-last widget-2 footer-special-last widget widget-theme-wrapper  text-center"><div id="nav_menu-3" class="widget widget_nav_menu"><div class="menu-footer-menu-container">
	<?php if( is_active_sidebar('footer-sm') ) : ?>
                          <div class="widget-area widget-menu">
                              <?php dynamic_sidebar('footer-sm')  ?>
                          </div>
                  <?php endif; ?>
</div></div></div>                </div>
						</div>

				</div>
		</footer><!-- .page_footer -->
<section class="page_copyright section_padding_15">
		<h3 class="hidden">Page Copyright</h3>
		<div class="container container-fluid">
				<div class="row">
						<div class="col-sm-12">
							<?php if( is_active_sidebar('footer-menu') ) : ?>
                          <div class="widget-area footer-menu">
                              <?php dynamic_sidebar('footer-menu')  ?>
                          </div>
                  <?php endif; ?>
						</div>
				</div>
				<div class="row">
						<div class="col-sm-8">
							<?php if( is_active_sidebar('copyright') ) : ?>
                          <div class="widget-area copyright">
                              <?php dynamic_sidebar('copyright')  ?>
                          </div>
                  			<?php endif; ?>
							<?php if( is_active_sidebar('terms_privacy') ) : ?>
                          <div class="widget-area terms_privacy">
                              <?php dynamic_sidebar('terms_privacy')  ?>
                          </div>
                  			<?php endif; ?>
						</div>
						<div class="col-sm-4">
							<?php if( is_active_sidebar('credit') ) : ?>
                          <div class="widget-area credit">
                              <?php dynamic_sidebar('credit')  ?>
                          </div>
                  			<?php endif; ?>
						</div>
				</div>
		</div>
</section><!-- .copyrights -->	</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->

<?php

wp_footer(); ?>

</body>
</html>
