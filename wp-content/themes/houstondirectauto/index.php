<?php
/**
 * The main template file
 *
 */

get_header(); ?>





<div class="home-wrap">

	<section class="main-section" id="main-section">
		<div class="wrapper">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();

					get_template_part( 'content' );

				endwhile;
			else :

				get_template_part( '404');

			endif;
			?>
		</div>
	</section>
  </div>


<?php get_footer();
