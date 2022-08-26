<?php

/**
 * @package           WP-share
 *
 * @wordpress-plugin
 * Plugin Name:       WP Share
 * Plugin URI:        
 * Description:       Floating share buttons 
 * Version:           1.0.0
 * Author:            Vasil Georgiev
 * Author URI:        
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 */

# Abort if called directly.
if (!defined('WPINC')) die;

# Enqueue scripts and styles 
function wp_share_load_scripts() {
    wp_enqueue_style( 'fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
    wp_enqueue_style( 'wp-share',   plugins_url() . '/wp-share/css/wp.share.css');
    wp_enqueue_script('wp-share',   plugins_url() . '/wp-share/js/wp.share.js', null, null, true);
}

add_action('wp_enqueue_scripts', 'wp_share_load_scripts');


# Shortcode
function wp_share(){
    ob_start();
?>
<div id="wp-share-block">
    <div id="wp-share-mobile">
        <div id="wp-share-mobile-icon">
            <i class="fa-solid fa-share"></i>
        </div>
    </div>
    <div id="wp-share-btns">
        <div class="wp-share-btn">
            <a href="https://www.facebook.com/sharer/sharer.php?u=gabrovogifts.bg">
                <i
                    class="fa-brands fa-facebook"
                    style="color: #0a75da"
                ></i
            ></a>
        </div>
        <div class="wp-share-btn">
            <a href="https://m.me/gabrovogifts">
                <i
                    class="fa-brands fa-facebook-messenger"
                    style="color: blueviolet"
                ></i>
            </a>
        </div>
        <div class="wp-share-btn">
            <a href="viber://chat?number=359888681766">
                <i
                    class="fa-brands fa-viber"
                    style="color: #825cf2"
                ></i>
            </a>
        </div>
        <div class="wp-share-btn" style="color: #0f9523">
            <a href="https://api.whatsapp.com/send?phone=359888681766">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>
</div>

<?php
    return ob_get_clean();
}
add_shortcode( 'wp-share', 'wp_share' );