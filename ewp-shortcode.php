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

add_shortcode('endomondowp', 'ewp_page_shortcode');

/**
 * Main Function of shortcode
 * 
 * @param type $param
 * @return string
 */
function ewp_page_shortcode($param) {
    
    extract(shortcode_atts(array(
                'user' => EWP_NOS,
                'challenge_id' => null,
                'event_id' => null,
                'team_id' => null,
				'id' => uniqid("", true),
                'type' => null,
                'width' => EWP_DEFAUTL_WIDTH,
                'height' => EWP_DEFAUTL_HEIGHT
                    ), $param));

    do_action("pre_ewp_shortcode", $user, $challenge_id, $event_id, $team_id, $id, $type, $width, $height);
			
	$out=ewp_get_page($user, $challenge_id,$event_id,$team_id, $id, $type, $width, $height);
			
    do_action("post_ewp_shortcode", $user, $challenge_id,$event_id,$team_id, $id, $type, $width, $height);

    return $out;
}

?>