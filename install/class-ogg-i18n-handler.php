<?php
/**
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

User: staniscia
Date: 03/02/14
Time: 11.33

 */

namespace net\stanisca\ogg;

class OGG_I18N_Handler
{
    function __construct()
    {

        add_action('plugins_loaded', array(&$this, 'i18n'));

       // add_filter('the_content', array(&$this, 'test_translation'));

    }

    function i18n()
    {

        load_plugin_textdomain( 'odynogooglegroups', FALSE,  dirname( plugin_basename( ODY_GOOGLE_GROUPS_FILE ) ) . '/languages/' );

    }

}

new OGG_I18N_Handler();


