<?php

/**
 * Title: Logos Showcase
 * Slug: shopmighty/logo-showcase
 * Categories: shopmighty
 */
$shopmighty_url = trailingslashit(get_template_directory_uri());
$shopmighty_images = array(
    $shopmighty_url . 'assets/images/logo_1.png',
    $shopmighty_url . 'assets/images/logo_2.png',
    $shopmighty_url . 'assets/images/logo_3.png',
    $shopmighty_url . 'assets/images/logo_4.png',
    $shopmighty_url . 'assets/images/logo_5.png',
    $shopmighty_url . 'assets/images/logo_6.png'
);
?>
<!-- wp:group {"metadata":{"categories":["shopmighty"],"patternName":"shopmighty/logo-showcase","name":"Logos Showcase"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|background-alt","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-dark-shade-background-color has-background" style="border-bottom-color:var(--wp--preset--color--background-alt);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"large"} -->
        <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.5"><?php esc_html_e('Brands I\'ve Collaborated With', 'shopmighty') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"padding":{"bottom":"64px"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"980px"}} -->
    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:40px;margin-bottom:0;padding-bottom:64px"><!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","className":"shopmighty-brands is-style-default","style":{"spacing":{"margin":{"top":"40px"}}}} -->
        <figure class="wp-block-gallery has-nested-images columns-6 shopmighty-brands is-style-default" style="margin-top:40px"><!-- wp:image {"id":10875,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[0]) ?>" alt="" class="wp-image-10875" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":10878,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[1]) ?>" alt="" class="wp-image-10878" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":10876,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[2]) ?>" alt="" class="wp-image-10876" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":10874,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[3]) ?>" alt="" class="wp-image-10874" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":10877,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[4]) ?>" alt="" class="wp-image-10877" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":10879,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($shopmighty_images[5]) ?>" alt="" class="wp-image-10879" /></figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->