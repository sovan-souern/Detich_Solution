<?php

/**
 * Title: Header Default
 * Slug: shopmighty/header-default
 * Categories: shopmighty, header
 */
$shopmighty_url = trailingslashit(get_template_directory_uri());
$shopmighty_images = array(
    $shopmighty_url . 'assets/images/map_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"10px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"},"top":{"width":"0px","style":"none"}}},"backgroundColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-heading-color-background-color has-background" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":11031,"width":"12px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-bottom:5px"><img src="<?php echo esc_url($shopmighty_images[0]) ?>" alt="" class="wp-image-11031" style="width:12px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small"} -->
                <p class="has-text-align-center has-background-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('14th Street, Caltech, New Jersey', 'shopmighty') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small"} -->
            <p class="has-text-align-center has-background-color has-text-color has-link-color has-small-font-size"> <?php esc_html_e('🔥 Flash Sale! Get 25% OFF – Limited Time Only!', 'shopmighty') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only shopmighty-social-icon","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only shopmighty-social-icon"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"shopmighty-header","style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|40","bottom":"20px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group shopmighty-header" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"textColor":"heading-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","className":"shopmighty-navigation","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"28px"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center"}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Products","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"shopmighty-header-search","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"backgroundColor":"transparent","textColor":"heading-color","fontSize":"small"} /-->

                <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} /-->

                <!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","iconColor":{"slug":"heading-color","color":"#0F0106","name":"Heading Color","class":"has-heading-color-icon-color"},"productCountColor":{"slug":"primary","color":"#EA1E63","name":"Primary","class":"has-primary-product-count-color"}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->