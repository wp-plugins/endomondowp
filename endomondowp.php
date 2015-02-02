<?php
/**
 * @wordpress-plugin
 * Plugin Name: EndomondoWP
 * Plugin URI: http://www.staniscia.net/endomondowp/
 * Description: The <a href="http://www.staniscia.net/endomondowp/" target="_blank">Endomondo WP</a> embed the <a href="http://www.endomondo.com" target="_blank">Endomondo Data</a> on WordPress! You can see all your workouts on  WordPress article or  page. All you must do is to add a shortcode on your page editor!
 * Version: 0.0.3
 * Author: Alessandro Staniscia
 * Author URI: http://www.staniscia.net
 * License: GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

define('EWP_NAME', 'EndomondoWP');
define('EWP_SYS_NAME', 'endomondowp');
define('EWP_VERSION', '0.0.3');
define('EWP_DIR', plugin_dir_path(__FILE__));


define('EWP_LAST_WORKOUT',"last-workout");
define('EWP_WORKOUT_LIST',"workout-list");
define('EWP_CHALLENGE',"challenge");
define('EWP_TEAM',"team");
define('EWP_EVENT',"event");


define('EWP_DEFAUTL_WIDTH', "600" );
define('EWP_DEFAUTL_HEIGHT' ,"750");

include_once EWP_DIR.'/install/ewp-life-cycle.php';
include_once EWP_DIR.'/ewp-lib.php';
include_once EWP_DIR.'/ewp-shortcode.php';
include_once EWP_DIR.'/admin/ewp-mgt.php';
include_once EWP_DIR.'/ewp-media-buttom.php';

?>
