<section  id="section-c66129d" style="background:url(<?php echo get_sub_field('background')?>)" class="fw-main-row  section_padding_top_200 section_padding_bottom_200 columns_padding_15 parallax fullwidth-section background_cover parallax-hide-md">
	<h3 class="hidden"> Bio</h3>
			<div class="container-fluid">
		<div class="row">
			<div  id="column-47157dc" class="col-xs-12 text-right fw-column" >
	
	<div class="fw-divider-space " style="margin-top: 23px;"></div>

<div class="special-heading text-center">
	<h2 class="section_header margin_0  ">
	<span class=" extra-light text-transform-none">
		<?php echo get_sub_field('heading') ?>	
	</span>
	</h2>
</div>
	<div class="fw-divider-space " style="margin-top: 50px;"></div>


	<div class="milestone-carousel owl-carousel">

		<?php 
		$count=0;
		while (have_rows('bio_texts')) { the_row();?>
			<div class="milestone" data-hash="<?php echo get_sub_field('year') ?>">
				<ul>
				<li> <?php echo get_sub_field('text')?> </li>
				</ul>
			</div>
		<?php $count++; } ?>
	</div>

<div>
	
	<div class="years-carousel owl-carousel">
		
	<?php while (have_rows('bio_texts')) { the_row();?>
		<div class="years"><p><?php echo get_sub_field('year') ?></p><p class="year_description"><?php echo get_sub_field('short_description_of_this_year')?get_sub_field('short_description_of_this_year') :' ' ?></p><button><a href="#<?php echo get_sub_field('year') ?>"> </a></button></div>  
	<?php } ?>	
	</div>
	
  </div>


	<div class="fw-divider-space " style="margin-top: 32px;"></div>

</div>
		</div>
	</div>
</section>