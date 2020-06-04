<section  id="section-d0a72da" class="fw-main-row  section_padding_top_0 section_padding_bottom_0 columns_padding_0 fullwidth-section horizontal-paddings-0">
	<h3 class="hidden"> Portfolio Carousel</h3>
		<div class="container-fluid">
			<div class="row">
				<div  id="column-da4e9aa" class="col-xs-12 fw-column" >
					<div class="portfolio-carousel-wrap">
        				<div class="additional_image">
        					<img src="<?php echo get_sub_field('portfolio_image')?>" alt="//webdesign-finder.com/hi5clive/wp-content/uploads/2018/10/portfolio_img_2-1.png">
        				</div>
	    				<div id="widget_portfolio_carousel_5e71697026277"
							class="portfolio-shortcode owl-carousel owl-loaded owl-drag owl-theme"
							data-nav="0"
							data-owl-carousel-slider="#widget_portfolio_carousel_slider_5e71697026277"
							data-loop="true"
							data-autoplay="false"
							data-autoplaytimeout="3000"
							data-margin="0"
							data-responsive-xs="1"
							data-responsive-sm="2"
							data-responsive-md="3"
							data-responsive-lg="4"
							data-filters=".carousel_filters-5e71697026277"
						>
							<div id="owl-demo" class="owl-carousel">
							<?php while (have_rows('portfolio_carousel')) { the_row();?>
								<div class="item">
									<a class="fancybox" rel="group" href="<?php echo get_sub_field('image')?>">
										<img width="600" height="600" src="<?php echo get_sub_field('image')?>" class="attachment-hi5clive-square size-hi5clive-square wp-post-image" alt="" srcset="<?php echo get_sub_field('image')?> 600w, <?php echo get_sub_field('image')?> 150w" sizes="(max-width: 600px) 100vw, 600px" />
									</a>
									<!-- <a class="fancybox" rel="group" href="<?php echo get_sub_field('image')?>"> -->
									<div class="carousel-caption">
										<p class="caption"><?php echo get_sub_field('caption')?></p>
									</div>
							<!-- </a> -->
							</a>
							</div>	
						 <?php }?>
					</div>

					
				</div>
		</div>
	</div>
</section>
<!-- <section class="cd-horizontal-timeline">
	<div class="events-content">
		<ul>
			<?php 
			$count=0;
			$count5=0;
			while (have_rows('portfolio_carousel')) { the_row();?>
			<li class="<?php echo $count < 1?"selected":""?>" data-date="01/01/<?php echo 2000+$count+$count5?>">
			
				<p>	
					<?php echo get_sub_field('caption')?>
				
				<img src="<?php echo get_sub_field('image')?>">
				</p>
			</li>
			 <?php $count++; $count5=$count5+5; } ?>
		</ul>
	</div> 
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events" style="width:100%!important">
				<ol>
					<?php 
			$count=0;
			$count5=0;
			while (have_rows('portfolio_carousel')) { the_row();?>
					<li><a href="#0" data-date="01/01/<?php echo 2000+$count+$count5?>" class="<?php echo $count < 1?"selected":""?>"></a></li>
			<?php $count++;$count5=$count5+5; } ?>
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> 
		</div> 
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> 
	</div> 
</section> -->