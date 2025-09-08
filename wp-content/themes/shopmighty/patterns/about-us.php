<?php

/**
 * Title: About Us Section
 * Slug: shopmighty/about-us
 * Categories: shopmighty
 */
$shopmighty_url = trailingslashit(get_template_directory_uri());
$shopmighty_images = array(
    $shopmighty_url . 'assets/images/about_image.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["shopmighty"],"patternName":"shopmighty/about-us","name":"About Us Section"},"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"48px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"},"spacing":{"margin":{"top":"10px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="margin-top:10px;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.3"><?php esc_html_e('Empowering Style, Inspiring Confidence', 'shopmighty') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.', 'shopmighty') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"}}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px"><?php esc_html_e('Explore More', 'shopmighty') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":10662,"sizeSlug":"full","linkDestination":"none","align":"right","style":{"border":{"radius":"0px"},"color":{"duotone":"unset"}}} -->
            <figure class="wp-block-image alignright size-full has-custom-border"><img src="<?php echo esc_url($shopmighty_images[0]) ?>" alt="" class="wp-image-10662" style="border-radius:0px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->