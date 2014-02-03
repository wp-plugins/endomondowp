<?php
/**
 * @wordpress-plugin
 * Plugin Name: Odyno GoogleGroups
 * Plugin URI:  http://www.staniscia.net/odynogooglegroups/
 * Description: The <a href="http://www.staniscia.net/odynogooglegroups/" target="_new">Odyno GoogleGroups</a> embed the Google Groups on WordPress! You can see all discussion on your article or WordPress page. All you must do is to add a shortcode on your page editor! The main feautures are:<br> 1) Google Group forum on WordPress page/post <br>2)Widget with last messages of group.
 * Version: 0.0.7-SNAPSHOT
 * Author: Alessandro Staniscia
 * Author URI: http://www.staniscia.net
 * Text Domain: odynogooglegroups
 * License: GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


define('ODY_GOOGLE_GROUPS_NAME', 'Odyno GoogleGroups');
define('ODY_GOOGLE_GROUPS_VERSION', '0.0.7-SNAPSHOT');
define('ODY_GOOGLE_GROUPS_DIR', plugin_dir_path(__FILE__));
define('ODY_GOOGLE_GROUPS_URL', plugins_url()."/odynogooglegroups");
define('ODY_GOOGLE_GROUPS_FILE', ABSPATH . PLUGINDIR . '/odynogooglegroups/odynogooglegroups.php');
define('ODY_GOOGLE_GROUPS_NOS', '____NULL___');

include_once ODY_GOOGLE_GROUPS_DIR.'/install/class-ogg-i18n-handler.php';

echo  "<!-- TEST My translation: " . __('TestLanguage', 'odynogooglegroups') ." -->";

include_once ODY_GOOGLE_GROUPS_DIR.'/install/odyno-google-groups-life-cycle.php';



include_once ODY_GOOGLE_GROUPS_DIR.'/odyno-google-groups-lib.php';
include_once ODY_GOOGLE_GROUPS_DIR.'/odyno-google-groups-shortcode.php';
include_once ODY_GOOGLE_GROUPS_DIR.'/odyno-google-groups-widget.php';
include_once ODY_GOOGLE_GROUPS_DIR.'/admin/odyno-google-groups-mgt.php';



?>
