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

/**
 * This function return the html code used to embed the EndomondoWP
 *
 * @param string $endomondoId,
 * @param int $id = null,
 * @param string $type = EWP_LAST_WORKOUT
 * @param string $width = EWP_DEFAUTL_WIDTH,
 * @param string $height = EWP_DEFAUTL_HEIGHT,
 *
 * @return string The html Code
 *
 */
function do_endomondowp($endomondoId, $type=EWP_LAST_WORKOUT, $id = null, $width = EWP_DEFAUTL_WIDTH, $height = EWP_DEFAUTL_HEIGHT){

    if ($id == null) {
        $id = uniqid("", true);
    }

    do_action("pre_ewp_show", $endomondoId, $id, $width, $height);
    echo ewp_get_page($endomondoId, $id, $type,$width, $height);
    do_action("post_ogg_show", $endomondoId, $id, $width, $height);
}






/**
 * Main Function
 *
 * @param type $param
 * @return string
 */
function ewp_get_page($user, $id = null,  $type = EWP_LAST_WORKOUT, $width = EWP_DEFAUTL_WIDTH, $height = EWP_DEFAUTL_HEIGHT){




    if ($id == null) {
        $id = uniqid("", true);
    }

    $isSigned = get_option(EWP_SHOW_SIGNE, true);
    $isContrib = get_option(EWP_ENABLED_ANALITYC, true);

    if ($user == EWP_NOS) {
        $out = 'Minimal information of tag: [endomondowp user="1234" ]';
    } else {
        switch ($type)  {
            case EWP_WORKOUT_LIST:
                $out = ewp_workout_list_html($isContrib, $isSigned, $user, $id, $width, $height);
                break;
            case EWP_LAST_WORKOUT:
            default:
                $out = ewp_last_workout_html($isContrib, $isSigned, $user, $id, $width, $height);
                break;
        };
    }

    return $out;
}



function ewp_last_workout_html($isContrib, $isSigned,$user, $id, $width, $height)
{

    if ($isSigned) {
        $sign_inline_style = "color: #000; font-family: arial,sans-serif; text-align: right; font-size: 77%;";
    } else {
        $sign_inline_style = "display: none;";
    }

    $contribCode = "";

    if ($isContrib) {
        $contribCode = '<img style=\'display: none;\' src="http://www.staniscia.net/ewp/logo.php?t=gif" alt="logo" onerror="this.parentNode.removeChild(this)" />';
    }

				  
	
    $out = '
			<div id="' . $id . '_ewp_div" class="ewp_div" >
				<iframe 
				   id="' . $id . '_ewp_forum_embed"  
				   class="ewp_iframe"  
				   src="http://www.endomondo.com/embed/workouts?userId='.$user.'&width=' . $width . '&height=' . $height . '" 
				   width="' . $width . '" 
				   height="' . $height . '" 
				   frameborder="0" 
				   scrolling="no" >
				</iframe>
				<div style=\'' . $sign_inline_style . '\'>powered by <a href="http://www.staniscia.net/endomondowp/">EndomondoWP</a>' . $contribCode . '</div>
           </div>';

    return $out;
}




function ewp_workout_list_html($isContrib, $isSigned,$user, $id, $width, $height)
{

    if ($isSigned) {
        $sign_inline_style = "color: #000; font-family: arial,sans-serif; text-align: right; font-size: 77%;";
    } else {
        $sign_inline_style = "display: none;";
    }

    $contribCode = "";

    if ($isContrib) {
        $contribCode = '<img style=\'display: none;\' src="http://www.staniscia.net/ewp/logo.php?t=gif" alt="logo" onerror="this.parentNode.removeChild(this)" />';
    }


    $out = '
			<div id="' . $id . '_ewp_div" class="ewp_div" >

                <iframe
                    src="http://www.endomondo.com/embed/user/workouts?id='.$user.'&width=' . $width . '&height=' . $height . '"
				   width="' . $width . '"
				   height="' . $height . '"
                    frameborder="0"
                    scrolling="no" >
                </iframe>
				<div style=\'' . $sign_inline_style . '\'>powered by <a href="http://www.staniscia.net/endomondowp/">EndomondoWP</a>' . $contribCode . '</div>
           </div>';
    return $out;
}


?>