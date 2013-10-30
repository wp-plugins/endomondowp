<?php
/*
  Plugin Name: EndomondoWP
  Plugin URI: http://www.staniscia.net/endomondowp/
  Description: The <a href="http://www.staniscia.net/odynogooglegroups/" target="_new">EndomondoWP</a> embed the Endomondo on WordPress! You can see all workout on your article or WordPress page. All you must do is to add a shortcode on your page editor!
  Version: 0.0.1
  Author: Alessandro Staniscia
  Author URI: http://www.staniscia.net
  License: GNU General Public License v2

    Copyright 2012  Alessandro Staniscia  (email : alessandro@staniscia.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define('EWP_NAME', 'EndomondoWP');
define('EWP_SYS_NAME', 'endomondowp');
define('EWP_VERSION', '0.0.1');
define('EWP_DIR', plugin_dir_path(__FILE__));

define('EWP_LAST_WORKOUT',"last-workout");
define('EWP_WORKOUT_LIST',"workout-list");
define('EWP_DEFAUTL_WIDTH', "680" );
define('EWP_DEFAUTL_HEIGHT' ,"600");

include_once EWP_DIR.'/install/ewp-life-cycle.php';
include_once EWP_DIR.'/ewp-lib.php';
include_once EWP_DIR.'/ewp-shortcode.php';
include_once EWP_DIR.'/admin/ewp-mgt.php';

?>
