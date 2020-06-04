<?php
/**
* Template to display single page
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @since   1.0.0
* @package themezero
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header(); ?>

<div class="fw-page-builder-content">
	<?php
	// check if the flexible content field has rows of data
	if( have_rows('modules') ):

	     // loop through the rows of data
	    while ( have_rows('modules') ) : the_row();
	        get_template_part('template-parts/modules/' . get_row_layout());
	    endwhile;

	else :


	endif;

	?>

</div>


<?php get_footer(); ?>
