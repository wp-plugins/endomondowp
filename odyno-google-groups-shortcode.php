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


function odyno_google_groups_page_shortcode($param) {
  extract(shortcode_atts(array(
              'id' => '',
              'name' => 'DEFAULT',
              'width' => '100%',
              'height' => '800px',
              'showsearch' => 'false',
              'showtabs' => 'false',
              'showpopout' => 'true',
              'hideforumtitle' => 'true',
              'hidesubject' => 'true'
                  ), $param));


  if ($name == 'DEFAULT') {
    return 'Minimal information of tag: [google_groups name="name-of-group" ]';
  }

  $out = '<iframe id="forum_embed'.$id.'" src="javascript:void(0)"  scrolling="no"  frameborder="0"
          width="'.$width.'" height="'.$height.'"></iframe>
          <script type="text/javascript">
             document.getElementById("forum_embed'.$id.'").src =
                   "https://groups.google.com/forum/embed/?place=forum/' . $name;
  $out .= "&showsearch=" . $showsearch;
  $out .= "&showtabs=" . $showtabs;
  $out .= "&showpopout=" . $showpopout;
  $out .= "&hideforumtitle=" . $hideforumtitle;
  $out .= "&hidesubject=" . $hidesubject;
  $out .= "&showsearch=" . $showsearch;
  $out .= "&contenturl=" . urlencode(get_permalink());
  $out .= '"</script>';

// &parenturl= encodeURIComponent(window.location.href);

  return $out;
}

add_shortcode('google_groups', 'odyno_google_groups_page_shortcode');
?>