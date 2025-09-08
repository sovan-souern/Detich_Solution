<?php 
/**
 * Default Header
 */
return array(
	'title'      => esc_html__( 'Default Header', 'ecommerce-gift-cart' ),
	'categories' => array( 'ecommerce-gift-cart', 'header' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"className":"logo-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontFamily":"ecommerce-gift-cart-roboto"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"shipping-box"} -->
<div class="wp-block-column is-vertically-aligned-center shipping-box" style="flex-basis:25%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":104,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/delivery-van.png' ) ) .'" alt="" class="wp-image-104"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph {"style":{"color":{"text":"#929191"},"elements":{"link":{"color":{"text":"#929191"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<p class="has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#929191;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400">Free Shipping</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#2a0502"},"elements":{"link":{"color":{"text":"#2a0502"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<p class="has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;margin-top:0;margin-bottom:0;font-size:18px;font-style:normal;font-weight:500">On all Order Over $99</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"shipping-box"} -->
<div class="wp-block-column is-vertically-aligned-center shipping-box" style="flex-basis:25%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":109,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/online-support.png' ) ) .'" alt="" class="wp-image-109"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph {"style":{"color":{"text":"#929191"},"elements":{"link":{"color":{"text":"#929191"}}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<p class="has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#929191">support@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#2a0502"},"elements":{"link":{"color":{"text":"#2a0502"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<p class="has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;margin-top:0;margin-bottom:0;font-size:18px;font-style:normal;font-weight:500">123 - 456 - 7890</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:woocommerce/mini-cart {"hasHiddenPrice":false,"productCountVisibility":"always","className":"header-cart","fontFamily":"ecommerce-gift-cart-roboto","style":{"typography":{"fontWeight":"500","fontStyle":"normal"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#2a2400"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group main-header has-background" style="background-color:#2a2400;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:navigation {"textColor":"foreground","overlayTextColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"1px","textTransform":"uppercase","fontSize":"15px"}},"fontFamily":"ecommerce-gift-cart-roboto","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Template","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Gallery","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:search {"label":"Search","showLabel":false,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"header-search-box","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"extra-primary","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"border":{"radius":"30px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-extra-primary-background-color has-text-color has-background has-link-color has-ecommerce-gift-cart-roboto-font-family wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50);font-style:normal;font-weight:500">Offer Zone</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);