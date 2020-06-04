<section  id="section-5366184" class="fw-main-row  section_padding_top_50 section_padding_bottom_150 columns_padding_15">
	<h3 class="hidden"> Services</h3>
			<div class="container">
		<div class="row">
			<div  id="column-1aec286" class="col-xs-12 fw-column" >
	<div class="fw-divider-space  hidden-sm hidden-xs" style="margin-top: 18px;"></div>
<div class="special-heading text-center">
	<h2 class="section_header margin_0  ">
	<span class=" bold text-transform-none">
		<?php echo get_sub_field( 'heading' ); ?></span>
	</h2>
</div>
	<div class="fw-divider-space " style="margin-top: 5px;"></div>
<div class="special-heading text-center">
	<h4 class="section_header margin_0  ">
	<span class=" extra-light text-transform-none">
		<?php echo get_sub_field( 'subheading' ); ?></span>
	</h4>
</div>
	<div class="fw-divider-space " style="margin-top: 75px;"></div>
<div
	class="owl-carousel shortcode-service owl-loaded owl-drag owl-theme"
    data-autoplay="false"
    data-autoplaytimeout="3000"
	data-loop="true"
	data-nav="0"
	data-margin="60"
	data-responsive-xs="1"
	data-responsive-sm="2"
	data-responsive-md="3"
	data-responsive-lg="3"
	>
    <?php while (have_rows('services')) { the_row(); $icon = get_sub_field( 'icon_image' ); ?>
        <div class="owl-carousel-item shortcode">
                <div class="service_item vertical-item content-padding big-padding with_background text-center overflow-hidden">
                    <div class="service_icon">
                    <a class="permalink" href="http://webdesign-finder.com/hi5clive/service/explore/">
                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">            
                    </a>
                </div>
                <div class="item-content">
                <h5 class="entry-title">
                    <a href="http://webdesign-finder.com/hi5clive/service/explore/">
                        <?php echo get_sub_field( 'title' ); ?>            
                    </a>
                </h5>
                <div class="excerpt">
                    <?php while (have_rows('excerpts')) { the_row(); ?>
                        <p><?php echo get_sub_field( 'text' ); ?><br /></p>
                    <?php } ?>
                </div>
                <a href="http://webdesign-finder.com/hi5clive/service/explore/" class="theme_button inverse color2 read-more">More</a>
            </div><!-- eof .item-content -->
        </div><!-- eof .teaser -->  
        </div>    
     <?php } ?>
    </div>
	<div class="fw-divider-space  hidden-md hidden-sm hidden-xs" style="margin-top: 35px;"></div>

</div>
		</div>
	</div>
</section>