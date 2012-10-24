<?php

/*  Copyright 2012  Alessandro Staniscia  (email : alessandro@staniscia.net)

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

add_action('admin_init', 'ody_gg_plugin_admin_init');
add_action('admin_menu', 'ody_gg_plugin_admin_menu');

function ody_gg_plugin_admin_init() {
  wp_register_style('odyno-google-group-style', ODY_GOOGLE_GROUPS_URL . "/css/odyno-google-group-style.css");
}

function ody_gg_plugin_admin_menu() {
  // Add new admin menu and save returned page hook
  $hook_suffix = add_management_page('Odyno GoogleGroup', 'Odyno GoogleGroup', 'manage_options', 'ody_gg_plugin_load_tools_page-id', 'ody_gg_plugin_load_tools_page');
  //ADD CSS
  add_action( 'admin_print_styles-' . $hook_suffix, 'ody_gg_plugin_load_stylesheet' );
}

/**
 * Enqueue plugin style-file
 */
function ody_gg_plugin_load_stylesheet() {

  wp_enqueue_style('odyno-google-group-style');
}



function ody_gg_plugin_load_tools_page() {
  if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
  }
  include(ODY_GOOGLE_GROUPS_DIR . '/admin/odgogrp-html-promote-bar.php');
  
}

?>