<?php 
/**
 * Default Category Section
 */
return array(
	'title'      => esc_html__( 'Category Section', 'ecommerce-gift-cart' ),
	'categories' => array( 'ecommerce-gift-cart', 'Category Section' ),
	'content'    => '<!-- wp:group {"className":"category-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-purple"}}},"color":{"background":"#ededef"}},"textColor":"vivid-purple","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group category-box has-vivid-purple-color has-text-color has-background has-link-color" style="background-color:#ededef"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wow fadeInUp","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--extra-secondary)"}}},"color":{"text":"var(--wp--preset--color--extra-secondary)"}},"fontSize":"small","fontFamily":"ecommerce-gift-cart-roboto"} -->
<h3 class="wp-block-heading has-text-align-center wow fadeInUp has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family has-small-font-size" style="color:var(--wp--preset--color--extra-secondary);font-style:normal;font-weight:500;text-transform:uppercase">Shop By Category</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","className":"wow fadeInUp","style":{"typography":{"fontSize":"35px","lineHeight":"1.5","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#2a0502"}}},"color":{"text":"#2a0502"}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<h2 class="wp-block-heading has-text-align-center wow fadeInUp has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;font-size:35px;font-style:normal;font-weight:500;line-height:1.5">Choose Your Gift</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","className":"product-col wow fadeInUp"} -->
<div class="wp-block-columns are-vertically-aligned-center product-col wow fadeInUp"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_theme_file_uri( '/assets/images/cat1.png' ) ) . '" alt="" class="wp-image-13" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px"},"color":{"text":"#2a0502"},"elements":{"link":{"color":{"text":"#2a0502"}}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;font-size:18px"><a href="#">Party Gifts</a></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_theme_file_uri( '/assets/images/cat2.png' ) ) . '" alt="" class="wp-image-16" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px"},"color":{"text":"#2a0502"},"elements":{"link":{"color":{"text":"#2a0502"}}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;font-size:18px"><a href="#">Gadgets</a></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":17,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_theme_file_uri( '/assets/images/cat3.png' ) ) . '" alt="" class="wp-image-17" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px"},"color":{"text":"#2a0502"},"elements":{"link":{"color":{"text":"#2a0502"}}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;font-size:18px"><a href="#">Funny Gifts</a></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":18,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_theme_file_uri( '/assets/images/cat4.png' ) ) . '" alt="" class="wp-image-18" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"18px"},"color":{"text":"#2a0502"},"elements":{"link":{"color":{"text":"#2a0502"}}}},"fontFamily":"ecommerce-gift-cart-roboto"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-ecommerce-gift-cart-roboto-font-family" style="color:#2a0502;font-size:18px"><a href="#">Accesories</a></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);