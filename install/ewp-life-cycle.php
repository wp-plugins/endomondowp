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
define('EWP_URL', plugins_url()."/endomondowp");
define('EWP_FILE', ABSPATH . PLUGINDIR . '/endomondowp/endomondowp.php');
define('EWP_NOS', '____NULL___');

define('EWP_SHOW_SIGNE', 'ewp_show_signe');
define('EWP_ENABLED_ANALITYC', 'ewp_enabled_analityc');


register_activation_hook(EWP_FILE, 'ewp_install');
register_deactivation_hook(EWP_FILE, 'ewp_unintall');



function ewp_install( ) {
    update_option(EWP_SHOW_SIGNE, true);
    update_option(EWP_ENABLED_ANALITYC, true);
}



function ewp_unintall( ) {
    delete_option(EWP_SHOW_SIGNE);
    delete_option(EWP_ANALYTICS);
}




?>
