<?php

/**
 * Title: Featured Products
 * Slug: shopmighty/featured-products
 * Categories: shopmighty
 */
if (class_exists('WooCommerce')) {
?>
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"48px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
        <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Featured Products', 'shopmighty') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'shopmighty') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":4,"query":{"perPage":8,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"grid","columnCount":4}} -->
            <!-- wp:group {"className":"is-style-shopmighty-product-holder","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-shopmighty-product-holder" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"height":"348px","style":{"border":{"radius":"20px"},"spacing":{"margin":{"bottom":"0px"}}}} /-->

                    <!-- wp:woocommerce/product-button {"width":100,"isDescendentOfQueryLoop":true,"align":"full","backgroundColor":"light-color","textColor":"heading-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"12px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:16px"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px"}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->

        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"60px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:60px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"12px"}}} -->
            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:12px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('Explore Store', 'shopmighty') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
<?php } else {
    $shopmighty_url = trailingslashit(get_template_directory_uri());
    $shopmighty_images = array(
        $shopmighty_url . 'assets/images/dummy-products/product_1.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_2.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_3.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_4.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_5.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_6.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_7.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_8.jpg',
        $shopmighty_url . 'assets/images/dummy-products/product_rating.png',
    );

?>
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"48px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
        <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Featured Products', 'shopmighty') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('This is a dummy product for layout demo purposes. It will be disabled, and actual products will show once WooCommerce is installed and activated on your site.', 'shopmighty') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[0]) ?>","id":10925,"dimRatio":0,"customOverlayColor":"#d1c9c5","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d1c9c5"></span><img class="wp-block-cover__image-background wp-image-10925" alt="" src="<?php echo esc_url($shopmighty_images[0]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Summer Set', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$125.99', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[1]) ?>","id":10926,"dimRatio":0,"customOverlayColor":"#e0ddda","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e0ddda"></span><img class="wp-block-cover__image-background wp-image-10926" alt="" src="<?php echo esc_url($shopmighty_images[1]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Summer Dress', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$25.99', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[2]) ?>","id":10927,"dimRatio":0,"customOverlayColor":"#bbbcbd","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bbbcbd"></span><img class="wp-block-cover__image-background wp-image-10927" alt="" src="<?php echo esc_url($shopmighty_images[2]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Hoodie', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$65', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[3]) ?>","id":10928,"dimRatio":0,"customOverlayColor":"#d8d5d5","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d8d5d5"></span><img class="wp-block-cover__image-background wp-image-10928" alt="" src="<?php echo esc_url($shopmighty_images[3]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Combo Set', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$120', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"28px"}}}} -->
        <div class="wp-block-columns" style="margin-top:28px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[4]) ?>","id":10929,"dimRatio":0,"customOverlayColor":"#bebbba","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bebbba"></span><img class="wp-block-cover__image-background wp-image-10929" alt="" src="<?php echo esc_url($shopmighty_images[4]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Top', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$15.99', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[5]) ?>","id":10930,"dimRatio":0,"customOverlayColor":"#e7e2de","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e7e2de"></span><img class="wp-block-cover__image-background wp-image-10930" alt="" src="<?php echo esc_url($shopmighty_images[5]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Fashionable Top', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$35.99', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[6]) ?>","id":10932,"dimRatio":0,"customOverlayColor":"#ded8de","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ded8de"></span><img class="wp-block-cover__image-background wp-image-10932" alt="" src="<?php echo esc_url($shopmighty_images[6]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Super Set', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$225.99', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"shopmighty-dummy-product","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group shopmighty-dummy-product" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-shopmighty-product-group","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-shopmighty-product-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($shopmighty_images[7]) ?>","id":10931,"dimRatio":0,"customOverlayColor":"#d2ccce","isUserOverlayColor":false,"minHeight":348,"contentPosition":"bottom center","isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:20px;min-height:348px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d2ccce"></span><img class="wp-block-cover__image-background wp-image-10931" alt="" src="<?php echo esc_url($shopmighty_images[7]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:buttons {"className":"shopmighty-dummy-cart-button","layout":{"type":"flex","justifyContent":"space-between"}} -->
                                <div class="wp-block-buttons shopmighty-dummy-cart-button"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","width":100,"className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                    <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-primary-bgcolor has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px"><?php esc_html_e('Add to Cart', 'shopmighty') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"16px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:image {"id":10992,"width":"auto","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($shopmighty_images[8]) ?>" alt="" class="wp-image-10992" style="width:auto;height:14px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Jacket', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h3 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('$85.99', 'shopmighty') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"60px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:60px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"12px"}}} -->
            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:12px;padding-top:18px;padding-right:24px;padding-bottom:18px;padding-left:24px"><?php esc_html_e('Explore Store', 'shopmighty') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
<?php }
