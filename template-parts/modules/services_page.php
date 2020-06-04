<section class="page_content section_padding_top_130 section_padding_bottom_130 columns_padding_30">
    <h3 class="hidden">Page content</h3>
	<div class="container">
		<div class="row">
            <div id="content" class="services-grid col-md-12">
                <div class="row columns_margin_bottom_50 columns_padding_30">

                    <?php while(have_rows('services')): the_row(); $icon = get_sub_field( 'icon_image' ); ?>
                    <div class="service_item_wrap topmargin_10 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item vertical-item content-padding big-padding with_background text-center overflow-hidden">
                            <div class="service_icon">
                                <a class="permalink" href="http://webdesign-finder.com/hi5clive/service/search-engine-optimisation/">
                                    <img src="<?php echo $icon['url'] ?>" alt="">            
                                </a>
                            </div>
                            <div class="item-content">
                                <h5 class="entry-title">
                                    <a href="http://webdesign-finder.com/hi5clive/service/search-engine-optimisation/">
                                        <?php echo get_sub_field( 'title' ); ?>
                                    </a>
                                </h5>
                                <div class="excerpt">
                                    <p>
                                        <?php while(have_rows('excerpts')): the_row(); ?>
                                            <?php echo get_sub_field( 'text' ); ?>
                                        <?php endwhile; ?>
                                    </p>
                                </div>
                                <a href="http://webdesign-finder.com/hi5clive/service/search-engine-optimisation/" class="theme_button inverse color2 read-more">More</a>
                            </div><!-- eof .item-content -->
                        </div><!-- eof .teaser -->                    
                    </div>

                    <?php endwhile; ?>

                            
                </div><!-- eof services -->
            </div><!--eof #content -->

    <!-- eof main aside sidebar -->
		</div><!-- eof .row-->
	</div><!-- eof .container -->
</section>