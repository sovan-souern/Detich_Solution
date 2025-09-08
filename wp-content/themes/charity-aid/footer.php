<?php
/**
 * The format used to show the footer
 *
 * @package Charity Aid
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-footer-inner">

			<?php if (get_theme_mod('charity_aid_footer_widgets_section_on_off_setting', true)) { ?>
				<div class="top-footer">
					<div class="wrap-footer-sidebar">
						<div class="container">
							<div class="footer-widget-wrap">
								<div class="row">
									<?php 
										get_template_part( 'template-parts/footer/footer-widget', 'one' );
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<?php
				get_template_part( 'template-parts/footer/footer', 'one' );
			?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>