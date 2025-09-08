<?php

/**
 * Title: Photo Gallery
 * Slug: shopmighty/photo-gallery
 * Categories: shopmighty
 */
$shopmighty_url = trailingslashit(get_template_directory_uri());
$shopmighty_images = array(
    $shopmighty_url . 'assets/images/ig1.jpg',
    $shopmighty_url . 'assets/images/ig2.jpg',
    $shopmighty_url . 'assets/images/ig3.jpg',
    $shopmighty_url . 'assets/images/ig4.jpg',
    $shopmighty_url . 'assets/images/ig5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"7px","left":"7px","top":"var:preset|spacing|50","bottom":"7px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:7px;padding-bottom:7px;padding-left:7px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color","fontSize":"xx-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Find Us on Instagram', 'shopmighty') ?> <a href="#"><?php esc_html_e('@shopmighty', 'shopmighty') ?></a></h2>
    <!-- /wp:heading -->

    <!-- wp:gallery {"columns":5,"linkTo":"none","className":"is-style-enable-grayscale-mode-on-image","style":{"spacing":{"blockGap":{"left":"7px"},"margin":{"top":"32px"}}}} -->
    <figure class="wp-block-gallery has-nested-images columns-5 is-cropped is-style-enable-grayscale-mode-on-image" style="margin-top:32px"><!-- wp:image {"id":10664,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[0]) ?>" alt="" class="wp-image-10664" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":10661,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[1]) ?>" alt="" class="wp-image-10661" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":10668,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($shopmighty_images[2]) ?>" alt="" class="wp-image-10668" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":10662,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[3]) ?>" alt="" class="wp-image-10662" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":10663,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[4]) ?>" alt="" class="wp-image-10663" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->