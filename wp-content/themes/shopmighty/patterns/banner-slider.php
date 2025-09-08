<?php

/**
 * Title: Banner Slider
 * Slug: shopmighty/banner-slider
 * Categories: shopmighty
 */
$shopmighty_url = trailingslashit(get_template_directory_uri());
$shopmighty_images = array(
    $shopmighty_url . 'assets/images/slider_1.jpg',
    $shopmighty_url . 'assets/images/slider_2.jpg',
    $shopmighty_url . 'assets/images/slider_3.jpg',
);
?>
<!-- wp:group {"className":"shopmighty-slider","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group shopmighty-slider" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"shopmighty-slider-holder swiper-wrapper","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group shopmighty-slider-holder swiper-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[0]) ?>","id":10909,"dimRatio":0,"customOverlayColor":"#eddcdb","isUserOverlayColor":false,"focalPoint":{"x":0.5,"y":0},"minHeight":680,"isDark":false,"className":"swiper-slide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover is-light swiper-slide" style="margin-top:0;margin-bottom:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#eddcdb"></span><img class="wp-block-cover__image-background wp-image-10909" alt="" src="<?php echo esc_url($shopmighty_images[0]) ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.2"}},"fontSize":"giga"} -->
                    <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:400;line-height:1.2"><?php esc_html_e('Redefine Everyday Style!', 'shopmighty') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} -->
                    <p class="has-foreground-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Effortlessly chic looks for every mood and occasion.', 'shopmighty') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"}},"border":{"radius":"12px"}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:12px;padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px"><?php esc_html_e('Shop Collections', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[1]) ?>","id":10910,"dimRatio":0,"customOverlayColor":"#f1e6ea","isUserOverlayColor":false,"focalPoint":{"x":0.5,"y":0},"minHeight":680,"isDark":false,"className":"swiper-slide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover is-light swiper-slide" style="margin-top:0;margin-bottom:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#f1e6ea"></span><img class="wp-block-cover__image-background wp-image-10910" alt="" src="<?php echo esc_url($shopmighty_images[1]) ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.2"}},"fontSize":"giga"} -->
                    <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:400;line-height:1.2"><?php esc_html_e('Shop the Hottest Styles!', 'shopmighty') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} -->
                    <p class="has-foreground-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Effortlessly chic looks for every mood and occasion.', 'shopmighty') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"}},"border":{"radius":"12px"}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:12px;padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px"><?php esc_html_e('Shop Collections', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[2]) ?>","id":10911,"dimRatio":0,"customOverlayColor":"#f7e8e7","isUserOverlayColor":false,"minHeight":680,"isDark":false,"className":"swiper-slide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover is-light swiper-slide" style="margin-top:0;margin-bottom:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#f7e8e7"></span><img class="wp-block-cover__image-background wp-image-10911" alt="" src="<?php echo esc_url($shopmighty_images[2]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.2"}},"fontSize":"giga"} -->
                    <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:400;line-height:1.2"><?php esc_html_e('Wear Your Confidence', 'shopmighty') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"medium"} -->
                    <p class="has-foreground-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Effortlessly chic looks for every mood and occasion.', 'shopmighty') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"}},"border":{"radius":"12px"}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:12px;padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px"><?php esc_html_e('Shop Collections', 'shopmighty') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"shopmighty-slider-controls","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group shopmighty-slider-controls" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:html -->
        <div class="shopmighty-button-prev swiper-button-prev"></div>
        <div class="shopmighty-button-next swiper-button-next"></div>
        <div class="shopmighty-pagination"></div>
        <!-- /wp:html -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->