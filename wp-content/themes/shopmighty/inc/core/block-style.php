<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package shopmighty
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function shopmighty_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'shopmighty-boxshadow',
                'label' => __('Box Shadow', 'shopmighty')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'shopmighty-boxshadow',
                'label' => __('Box Shadow', 'shopmighty')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'shopmighty-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'shopmighty')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'shopmighty-boxshadow-large',
                'label' => __('Box Shadow Large', 'shopmighty')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-boxshadow',
                'label' => __('Box Shadow', 'shopmighty')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'shopmighty')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-boxshadow-large',
                'label' => __('Box Shadow Larger', 'shopmighty')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-gradient-border',
                'label' => __('Gradient Border Primary', 'shopmighty')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-gradient-border',
                'label' => __('Gradient Border Style', 'shopmighty')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-product-holder',
                'label' => __('Product Group', 'shopmighty')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-product-group',
                'label' => __('Product Image Group', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-boxshadow',
                'label' => __('Box Shadow', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-boxshadow-larger',
                'label' => __('Box Shadow Large', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-image-pulse',
                'label' => __('Iamge Pulse Effect', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-image-hover-pulse',
                'label' => __('Pulse Effect on Hover', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-image-hover-rotate',
                'label' => __('Rotate On Hover', 'shopmighty')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'shopmighty-image-hover-zoom',
                'label' => __('Zoom On Hover', 'shopmighty')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'shopmighty-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'shopmighty')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'shopmighty-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'shopmighty')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'shopmighty-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'shopmighty')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-with-arrow-icon',
                'label' => __('Arrow Icon', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-with-uparrow-icon',
                'label' => __('Upward Arrow Icon', 'shopmighty')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-with-gradient-border',
                'label' => __('Gradient Border', 'shopmighty')
            )
        );
        register_block_style(
            'core/buttons',
            array(
                'name'  => 'button-transofom-on-hover',
                'label' => __('Translate On Hover', 'shopmighty')
            )
        );
        register_block_style(
            'core/buttons',
            array(
                'name'  => 'button-zoom-on-hover',
                'label' => __('Zoom On Hover', 'shopmighty')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'shopmighty')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'shopmighty')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'shopmighty')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'shopmighty')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('Hide bullet', 'shopmighty')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle',
                'label' => __('Check Circle Primary', 'shopmighty')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle-white',
                'label' => __('Check Circle white', 'shopmighty')
            )
        );


        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'shopmighty')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'shopmighty')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'shopmighty-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'shopmighty')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'shopmighty-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'shopmighty')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'shopmighty-cover-unset-overflow',
                'label' => __('Unset Overflow', 'shopmighty')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'shopmighty-cover-overlay-style',
                'label' => __('Overlay Style', 'shopmighty')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'shopmighty-cover-hover-style',
                'label' => __('Hover Style', 'shopmighty')
            )
        );
    }
    add_action('init', 'shopmighty_register_block_styles');
}
