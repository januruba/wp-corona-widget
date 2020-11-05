<?php
/**
 * Plugin Name: Corona Widget
 * Plugin URI:
 * Description: Jednoduchý WP widget s denní statistikou výskytu korony v ČR.
 * Version: 0.0.1
 * Author: Jan Uruba
 * Author URI: https://uruba.eu
 * Licence: MIT
 *
 * Text Domain: corona-widget
 *
 * */

defined( 'ABSPATH' ) || exit;

require('src/corona-widget.php');

function init_corona_widget() {
    add_action('widgets_init', create_function('', 'return register_widget("corona_widget");'));
}