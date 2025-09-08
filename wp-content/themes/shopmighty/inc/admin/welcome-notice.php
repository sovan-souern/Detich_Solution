<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('shopmighty_is_plugin_installed')) {
    function shopmighty_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('shopmighty_is_plugin_activated')) {
    function shopmighty_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('shopmighty_welcome_notice')) :
    function shopmighty_welcome_notice()
    {
        if (get_option('shopmighty_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $shopmighty_version = $theme->get('Version');


?>
            <div class="shopmighty-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="shopmighty-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Shopmighty', 'shopmighty'); ?></span></h5>
                        <h2><?php echo __('Launch Your Online Store Effortlessly with Shopmighty! 🚀 ', 'shopmighty'); ?></h2>
                        </h3>
                        <div class="notice-text">
                            <p><?php echo __('Please install and activate all recommended plugins to access 40+ advanced blocks, pre-built starter demos, and the one-click demo importer. Launch your online store in minutes with just a few clicks! - Cozy Addons, Cozy Essential Addons, Advanced Import, QuiqOwl-Ajax Search for WooCommerce!', 'shopmighty') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'shopmighty'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-shopmighty" class="button admin-button info-button"><?php echo __('Explore Shopmighty', 'shopmighty'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/theme_screen_img.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'shopmighty_welcome_notice');
function shopmighty_dismissble_notice()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'shopmighty_admin_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
        return;
    }

    $result = update_option('shopmighty_dismissed_custom_notice', 1);

    if ($result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Failed to update option'));
    }
}
add_action('wp_ajax_shopmighty_dismissble_notice', 'shopmighty_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_shopmighty_install_and_activate_plugins', 'shopmighty_install_and_activate_plugins');
add_action('wp_ajax_nopriv_shopmighty_install_and_activate_plugins', 'shopmighty_install_and_activate_plugins');
add_action('wp_ajax_shopmighty_rplugin_activation', 'shopmighty_rplugin_activation');
add_action('wp_ajax_nopriv_shopmighty_rplugin_activation', 'shopmighty_rplugin_activation');

// Function to install and activate the plugins



function shopmighty_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function shopmighty_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function shopmighty_install_and_activate_plugins()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    check_ajax_referer('shopmighty_welcome_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Blocks', 'shopmighty'),
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'shopmighty'),
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'shopmighty'),
        ),
        array(
            'slug' => 'quiqowl',
            'file' => 'quiqowl.php',
            'name' => __('QuiqOwl Ajax Search for WooCommerce', 'shopmighty'),
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            shopmighty_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_shopmighty_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                shopmighty_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            shopmighty_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        shopmighty_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            shopmighty_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                shopmighty_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            shopmighty_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            shopmighty_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function is_shopmighty_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function shopmighty_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function shopmighty_dashboard_menu()
{
    add_theme_page(esc_html__('About Shopmighty', 'shopmighty'), esc_html__('About Shopmighty', 'shopmighty'), 'edit_theme_options', 'about-shopmighty', 'shopmighty_theme_info_display');
}
add_action('admin_menu', 'shopmighty_dashboard_menu');
function shopmighty_theme_info_display()
{ ?>
    <div class="dashboard-about-shopmighty">
        <div class="shopmighty-dashboard">
            <ul id="shopmighty-dashboard-tabs-nav">
                <li><a href="#shopmighty-welcome"><?php echo __('Get Started', 'shopmighty') ?></a></li>
                <li><a href="#shopmighty-setup"><?php echo __('Setup Instruction', 'shopmighty') ?></a></li>
                <li><a href="#shopmighty-comparision"><?php echo __('FREE VS PRO', 'shopmighty') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="shopmighty-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Shopmighty', 'shopmighty') ?></h1>
                    <p><?php echo __('Shopmighty is a minimal, clean, and versatile WooCommerce theme designed to launch your online store effortlessly. Despite being a Full Site Editing (FSE) theme, it allows you to customize every corner of your website without limitations, making it easy to achieve your brand’s perfect fit and design layout—whether it’s the header, footer, blog, shop catalog, or the entire site. It is suitable for various online stores, including fashion and clothing, beauty and skincare, electronics and smart gadgets, home decor and furniture, hardware and tools, grocery and food, fitness and sports gear, jewelry and accessories, pet supplies, books and stationery, automotive parts, baby and kid’s products, and any other eCommerce niche. Shopmighty offers ready-to-use pre-built sections, templates, and starter site demos with a one-click demo import option, enabling you to set up your store effortlessly. Discover all features and live demos at https://cozythemes.com/shopmighty-woocommerce-theme/.', 'shopmighty') ?></p>
                    <h3><?php echo __('Required Plugins', 'shopmighty'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'shopmighty') ?></p>
                    <ul class="shopmighty-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'shopmighty'); ?>
                                <?php
                                if (shopmighty_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'shopmighty');
                                } elseif (shopmighty_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'shopmighty');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'shopmighty') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'shopmighty'); ?>
                                <?php
                                if (shopmighty_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'shopmighty');
                                } elseif (shopmighty_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'shopmighty');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'shopmighty') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'shopmighty'); ?>
                                <?php
                                if (shopmighty_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'shopmighty');
                                } elseif (shopmighty_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'shopmighty');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'shopmighty') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('4. QuiqOwl - Ajax Search for WooCommerce', 'shopmighty'); ?>
                                <?php
                                if (shopmighty_is_plugin_activated('quiqowl/quiqowl.php')) {
                                    echo __(': Plugin has been already activated!', 'shopmighty');
                                } elseif (shopmighty_is_plugin_installed('quiqowl/quiqowl.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'shopmighty');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=quiqowl&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'shopmighty') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'shopmighty'); ?></a>
                </div>
                <div id="shopmighty-setup" class="tab-content">
                    <h3 class="shopmighty-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'shopmighty') ?></h3>
                    <div class="shopmighty-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'shopmighty') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'shopmighty') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'shopmighty') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'shopmighty') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'shopmighty') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'shopmighty') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'shopmighty') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'shopmighty') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'shopmighty') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'shopmighty') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'shopmighty') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="shopmighty-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('Shopmighty Features (Free)', 'shopmighty') ?></h3>
                            <ul>
                                <li>
                                    <h4><?php echo __('Shopmighty offers 20+ pre-built sections to help you launch your store effortlessly.', 'shopmighty') ?></h4>
                                    <ul>
                                        <li><?php echo __('Banner Slider Section', 'shopmighty') ?></li>
                                        <li><?php echo __('About Us Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Featured Product Categories Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Featured Product Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Call To Action Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Favorites Collections Showcase', 'shopmighty') ?></li>
                                        <li><?php echo __('Highlight Feature Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Testimonial Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Testimonial Grid Section', 'shopmighty') ?></li>
                                        <li><?php echo __('Photo Gallery Section', 'shopmighty') ?></li>
                                        <li><?php echo __('FAQ Section ', 'shopmighty') ?></li>
                                        <li><?php echo __('Latest Post Display Section ', 'shopmighty') ?></li>
                                        <li><?php echo __('Post Grid Section ', 'shopmighty') ?></li>
                                        <li><?php echo __('Post List Section ', 'shopmighty') ?></li>
                                        <li><?php echo __('Brands Logo Showcase', 'shopmighty') ?></li>
                                        <li><?php echo __('Team Showcase', 'shopmighty') ?></li>
                                        <li><?php echo __('Profile Links Card', 'shopmighty') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'shopmighty') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Archive Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Blank Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Front Page Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Index Page Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Search Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Page Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Right sidebar page  Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Single Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Single Product Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'shopmighty') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'shopmighty') ?></li>

                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout', 'shopmighty') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout ', 'shopmighty') ?></strong></li>
                                <li><strong> - <?php echo __('12+ Beautiful Fonts Option', 'shopmighty') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'shopmighty') ?></strong></li>
                                <li> <strong>- <?php echo __('One Click Demo Import Features', 'shopmighty') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 25+ Advanced Blocks for FSE and Gutenberg Editor', 'shopmighty') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'shopmighty') ?></h3>
                            <p><?php echo __('Shopmighty seamlessly integrates with Cozy Blocks, offering 10 advanced WooCommerce blocks and 40+ total blocks to enhance your store. Build a high-performance, conversion-focused shop effortlessly with powerful features and ready-to-use patterns for a stunning, professional look.', 'shopmighty') ?></p>
                            <h4><?php echo __('50+ Advanced Blocks', 'shopmighty') ?></h4>
                            <ul>
                                <li><?php echo __('10 WooCommerce Blocks', 'shopmighty') ?></li>
                                <li><?php echo __('Product Slider Blocks', 'shopmighty') ?></li>
                                <li><?php echo __('Product Grid/Carousel Block', 'shopmighty') ?></li>
                                <li><?php echo __('Product Categories Block', 'shopmighty') ?></li>
                                <li><?php echo __('Product Quickview Block', 'shopmighty') ?></li>
                                <li><?php echo __('Product Wishlist Blocks', 'shopmighty') ?></li>
                                <li><?php echo __('Related Product Blocks', 'shopmighty') ?></li>
                                <li><?php echo __('Featured Products Tab Block', 'shopmighty') ?></li>
                                <li><?php echo __('Categories Products Tab Block', 'shopmighty') ?></li>
                                <li><?php echo __('All Product Reviews Block', 'shopmighty') ?></li>
                                <li><?php echo __('Featured Product Block', 'shopmighty') ?></li>
                                <li><?php echo __('Timer Countdown Block', 'shopmighty') ?></li>
                                <li><?php echo __('After Before Image Block', 'shopmighty') ?></li>
                                <li><?php echo __('Slider Block', 'shopmighty') ?></li>
                                <li><?php echo __('Counter Block', 'shopmighty') ?></li>
                                <li><?php echo __('Prgress Bar Block', 'shopmighty') ?></li>
                                <li><?php echo __('Advanced Gallery with Lightbox, filterable and multiple layout', 'shopmighty') ?></li>
                                <li><?php echo __('Portfolio Block with Custom Post Type with lightbox, category filterable and multiple layout', 'shopmighty') ?></li>
                                <li><?php echo __('Team Block with grid and carousel', 'shopmighty') ?></li>
                                <li><?php echo __('Testimonial Block with grid and carousel', 'shopmighty') ?></li>
                                <li><?php echo __('15 Post and Magazine Block', 'shopmighty') ?></li>
                                <li><?php echo __('Social Shares Block', 'shopmighty') ?></li>
                                <li><?php echo __('Social Icons Block', 'shopmighty') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'shopmighty') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'shopmighty') ?>
                                    <?php echo __('and access', 'shopmighty') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 40+ advanced block.', 'shopmighty') ?></a>
                                </li>

                            </ul>
                            <br />
                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'shopmighty') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
