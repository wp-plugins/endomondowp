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
define('EWP_SETTINGS_PAGE', 'EndomondoWPPreference');
define('EWP_SETTINGS', 'ewp_settings');



/**
 * DEFINE THE PAGE OPTIONS
 */
add_action('admin_menu', 'ewp_plugin_admin_menu');

function ewp_plugin_admin_menu() {

    // Add new admin menu and save     returned page hook

    $hook_suffix = add_options_page(
            'EndomondoWP Preference', // page Title
            'EndomondoWP', // menu Link
            'manage_options', //Capability
            EWP_SETTINGS_PAGE, //ID
            'ewp_plugin_load_tools_page' // funzione
    );

    //ADD CSS
    add_action('admin_print_styles-' . $hook_suffix, 'ewp_plugin_load_stylesheet');
}

function ewp_plugin_load_tools_page() {
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include(EWP_DIR . '/admin/ewp-html-promote-bar.php');
}

/**
 * ADD STYLESCHEET
 */
add_action('admin_init', 'ewp_plugin_css_init');

function ewp_plugin_css_init() {
    wp_register_style('endomondowp-style', EWP_URL . "/css/ewp-style.css");
}

function ewp_plugin_load_stylesheet() {
    wp_enqueue_style('endomondowp-style');
}


/**
 *  Settings link in plugin management screen
 */
add_filter('plugin_action_links', 'ewp_plugin_admin_menu_setting_link', 2, 2);
function ewp_plugin_admin_menu_setting_link($actions, $file) {
    if(false !== strpos($file, 'endomondowp')){
        $actions['settings'] = '<a href="options-general.php?page='.EWP_SETTINGS_PAGE.'">Settings</a>';
    }
    return $actions;
}




/**
 * ADD OPTIONS FIELDS
 */
add_action('admin_init', 'ewp_plugin_settings_fields');

function ewp_plugin_settings_fields() {

    //Build new Section
    add_settings_section(
        EWP_SETTINGS . "_ADV",                    //String for use in the 'id' attribute of tags.
        "Advertise",                              //Title of the section
        'ewp_advertise_sections_descriptions',  //Function that fills the section with the desired content. The function should echo its output.
        EWP_SETTINGS_PAGE                         //The type of settings page on which to show the section
    );

    add_settings_field(
        EWP_SHOW_SIGNE,                        //String for use in the 'id' attribute of tags.
        'Show a little and invisible sign of this plugin ( Thanks! )',           // Title of the field.
        'ewp_setting_show_signe_html',          //Function that fills the field with the desired inputs as part of the larger form. Name and id of the input should match the $id given to this function. The function should echo its output.
        EWP_SETTINGS_PAGE,          //The type of settings page on which to show the field
        EWP_SETTINGS . "_ADV"                  //The section of the settings page in which to show the box (default or a section you added with add_settings_section, look at the page in the source to see what the existing ones are.
    );

    add_settings_field(
        EWP_ENABLED_ANALITYC,
        'Enable the tracking of this WordPress installation with anonymous data.',
        'ewp_setting_enable_analitycs_html',
        EWP_SETTINGS_PAGE,
        EWP_SETTINGS . "_ADV"
    );

    register_setting(EWP_SETTINGS, EWP_SHOW_SIGNE);
    register_setting(EWP_SETTINGS, EWP_ENABLED_ANALITYC);

}

/**
 * Description of option section
 */
function ewp_advertise_sections_descriptions() {
    echo '';
}

/**
 * Function that fills the field with the desired inputs as part of the larger form.
 * Name and id of the input should match the $id given to this function.
 * The function should echo its output.
 */
function ewp_setting_show_signe_html() {
   echo ' <input name="'.EWP_SHOW_SIGNE.'" type="checkbox" value="1"  class="code" ' . checked( 1, get_option(EWP_SHOW_SIGNE), false ) . ' />';
}

function ewp_setting_enable_analitycs_html() {
    echo ' <input name="'.EWP_ENABLED_ANALITYC.'" type="checkbox" value="1"  class="code" ' . checked( 1, get_option(EWP_ENABLED_ANALITYC), false ) . ' />';
}

?>