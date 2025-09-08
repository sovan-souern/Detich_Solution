<?php

/**
 * Title: Featured Categories
 * Slug: shopmighty/featured-categories
 * Categories: shopmighty
 */
$shopmighty_url = trailingslashit(get_template_directory_uri());
$shopmighty_images = array(
    $shopmighty_url . 'assets/images/cat_1.jpg',
    $shopmighty_url . 'assets/images/cat_2.jpg',
    $shopmighty_url . 'assets/images/cat_3.jpg',
    $shopmighty_url . 'assets/images/cat_4.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"84px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:84px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Shop by Categories', 'shopmighty') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-primary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
            <div class="wp-block-button is-style-button-hover-primary-color"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Explore all Categories</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"24px","left":"24px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[0]) ?>","id":10921,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":540,"isDark":false,"className":"is-style-shopmighty-cover-overlay-style","style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light is-style-shopmighty-cover-overlay-style" style="border-radius:10px;min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10921" alt="" src="<?php echo esc_url($shopmighty_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"6px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Women\'s Wear ', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"24px"}}} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[1]) ?>","id":10922,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":258,"isDark":false,"className":"is-style-shopmighty-cover-overlay-style","style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light is-style-shopmighty-cover-overlay-style" style="border-radius:10px;min-height:258px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10922" alt="" src="<?php echo esc_url($shopmighty_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"6px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Watch', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[2]) ?>","id":10507,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":258,"isDark":false,"className":"is-style-shopmighty-cover-overlay-style","style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light is-style-shopmighty-cover-overlay-style" style="border-radius:10px;min-height:258px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10507" alt="" src="<?php echo esc_url($shopmighty_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"6px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Bag', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[3]) ?>","id":10923,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":540,"isDark":false,"className":"is-style-shopmighty-cover-overlay-style","style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light is-style-shopmighty-cover-overlay-style" style="border-radius:10px;min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10923" alt="" src="<?php echo esc_url($shopmighty_images[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"6px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:6px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php esc_html_e('Men\'s Wear', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->