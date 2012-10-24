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
?>

<div class="wrap">

  <div id="icon-tools" class="icon32"><br> </div> <h2>Information</h2>

  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">

      <div id="postbox-container-1" class="postbox-container">
        <div id="side-sortables" class="meta-box-sortables">
          <div class="postbox">
            <div class="handlediv" title="Click to toggle"><br/><br/></div>
            <h3 class="hndle">
              <span><?php echo ODY_GOOGLE_GROUPS_NAME; ?> <small style="float: right">v<?php echo ODY_GOOGLE_GROUPS_VERSION; ?></small><br/></span>
            </h3>
            <div class="inside">
              <div style="float: right; margin: -15px 0 10px 0"><a href="http://www.staniscia.net/odynogooglegroups" target="_blank"><img src="<?php echo ODY_GOOGLE_GROUPS_URL; ?>/images/logo.png" border="0" alt="logo" /></a></div>
                <a class="sm_button sm_autor" href="http://www.staniscia.net/odynogooglegroups" target="_blank"><?php _e('Plugin Homepage', 'ast-ogg-lang') ?></a>
                <a class="sm_button sm_code"  href="http://wordpress.org/support/plugin/odynogooglegroups/" target="_blank"><?php _e('Suggest a Feature', 'ast-ogg-lang') ?></a>
                <a class="sm_button sm_bug"   href="http://wordpress.org/support/plugin/odynogooglegroups/" target="_blank"><?php _e('Report a Bug', 'ast-ogg-lang') ?></a>
                <a class="sm_button sm_star"  href="http://wordpress.org/extend/plugins/odynogooglegroups/" target="_blank"><?php _e('Rate the plugin on WordPress.org', 'ast-ogg-lang') ?></a>
            </div>
          </div>
        </div>
      </div>


      <p>
        You can add the group forum on your page with this shortcode
      </p>
      <code>[google_groups name="name-of-groups"]</code>
      <p>
        If you want to control the view, you can add these attributes on shortcode
      </p>
      <ol>
        <li><code>showsearch</code>: whether to show an embedded search box on destination forum pages. (default is false)</li>
        <li><code>showpopout</code>: whether to show the "popout" button which lets the view be expanded to a full page, on destination forum pages (default is true)</li>
        <li><code>hideforumtitle</code>: if you want to show the forum title and description, false if you don't want to show the title or description (default is true)</li>
        <li><code>hidesubject</code>:  if you want to hide the subject of the last post in My Forums view, false if you want to leave the subject visible (default is true)</li>
        <li><code>showtabs</code>: whether to show tabs for changing views (e.g., to the Members view), on destination forum pages (default is false)</li>
        <li><code>width</code>: the width of page (default is 100%)</li>
        <li><code>height</code>: the height of page (default is 800px)</li>
      </ol>
      <div class="clear"></div>
    </div>
  </div>
</div>



