<?php
/**
 * The layout for showing every page
 *
 * @package Charity Aid
 */

get_header();
?>

<div id="content" class="site-content">
	<div class="container">
		<section class="wrap-detail-page">
			<div class="row">
				<div class="col-lg-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">
							<?php 
							charity_aid_page_title_display();

								if( has_post_thumbnail() ){ ?>
							    <figure class="feature-image single-feature-image">
							        <?php charity_aid_image_size( 'charity-aid-1370-550' ); ?>
							    </figure>
							<?php }	?>
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
						</main>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="secondary" class="sidebar left-sidebar">
						<?php get_sidebar('sidebar-1'); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer();
