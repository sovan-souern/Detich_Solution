<?php
/**
 * Site information display template section
 *
 * @package Charity Aid
 */

?>

<div class="site-info">
	<?php
    $charity_aid_footer_text = get_theme_mod('charity_aid_footer_text', '');

	if (!empty($charity_aid_footer_text)) {
        $charity_aid_text = esc_html($charity_aid_footer_text);
    } else {
		$theme = wp_get_theme();
		$charity_aid_text = sprintf(
			/* translators: 1: Theme author with link, 2: Copyright year, 3: Theme name with link */
			esc_html__('Theme design by %1$s | Copyright @ %2$s %3$s', 'charity-aid'),
			'<a href="' . esc_url($theme->get('AuthorURI')) . '" target="_blank">' . esc_html($theme->get('Author')) . '</a>',
			esc_html(date('Y')),
			'<a href="' . esc_url($theme->get('ThemeURI')) . '" target="_blank">' . esc_html($theme->get('Name')) . '</a>'
		);
    }
	?>
	<p><?php echo $charity_aid_text; ?></p>
</div>