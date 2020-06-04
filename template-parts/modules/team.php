<section  id="section-a926be1" class="fw-main-row  section_padding_top_0 section_padding_bottom_0 columns_padding_0 overflow-hidden">
	<h3 class="hidden"> Team Slider</h3>
	<div class="container">
		<div class="row">
			<div  id="column-2724c78" class="col-xs-12 fw-column" >
				<div class="fw-divider-space " style="margin-top: 25px;"></div>
				<div class="team-slider-shortcode">
					<?php
						$img = get_sub_field('image'); ?>

						<div class="team-slider-item <?php echo get_sub_field('isactive') ? 'active' : '' ?>">
				            <div class="team-slider-image animated fadeInRight from-right">
					            <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
				            </div>
							<div class="team-slider-name">
								<h3 class="slide-title">
									<span><?php echo get_sub_field('name') ?></span>
								</h3>
								<h2 class="role"><?php echo get_sub_field('role') ?></h2>
							</div><!-- eof .team-slider-name -->
						</div><!-- eof .team-slider-item -->
				</div>
				<div class="fw-divider-space " style="margin-top: -3px;"></div>

			</div>
		</div>
	</div>
</section>