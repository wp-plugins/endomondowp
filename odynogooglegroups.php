<?php
/*
  Plugin Name: OdynoGoogleGroups
  Plugin URI: http://www.staniscia.net/odynogooglegroups
  Description: Embed a Google Groups forum into a webpage or widget.
  Version: 0.0.1
  Author: Alessandro Staniscia
  Author URI: http://www.staniscia.net
  License: GNU General Public License v2
 */

/*  
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

define('ODY_GOOGLE_GROUPS_VERSION', '0.0.1');
define('ODY_GOOGLE_GROUPS_DIR', plugin_dir_path(__FILE__));
define('ODY_GOOGLE_GROUPS_URL', plugin_dir_url(__FILE__));
define('ODY_GOOGLE_GROUPS_FILE', ABSPATH . PLUGINDIR . '/odynogooglegroups/odynogooglegroups.php');

include_once ODY_GOOGLE_GROUPS_DIR.'/odyno-google-groups-shortcode.php';
include_once ODY_GOOGLE_GROUPS_DIR.'/odyno-google-groups-widget.php';
?>
