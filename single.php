<?php
/**
 * The template for displaying all single posts
 *
 * @package Codexin
 * @subpackage Template
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col s12 m8 l8 xl8">
						
						<?php

						while ( have_posts() ) :
							the_post();
							
							get_template_part( 'template-parts/posts/content', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>		
					</div>

					<div class="col s12 m4 l4 xl4">
						<?php
						get_sidebar();
						?>
					</div>
				</div>
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
