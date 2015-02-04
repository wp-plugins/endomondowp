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
 * @param int $id = null the HTML ID
 * @param int $challenge_id=null
 * @param int $event_id=null
 * @param int $team_id=null
 * @param string $type = EWP_LAST_WORKOUT
 * @param string $width = EWP_DEFAUTL_WIDTH,
 * @param string $height = EWP_DEFAUTL_HEIGHT,
 *
 * @return string The html Code
 *
 */
function do_endomondowp($endomondoId, $challenge_id = null, $event_id = null, $team_id = null, $type = EWP_LAST_WORKOUT, $id = null, $width = EWP_DEFAUTL_WIDTH, $height = EWP_DEFAUTL_HEIGHT)
{

    if ($id == null) {
        $id = uniqid("", true);
    }

    do_action("pre_ewp_show", $endomondoId, $challenge_id, $event_id, $team_id, $id, $width, $height);
    echo ewp_get_page($endomondoId, $challenge_id, $event_id, $team_id, $id, $type, $width, $height);
    do_action("post_ogg_show", $endomondoId, $challenge_id, $event_id, $team_id, $id, $width, $height);
}


/**
 * Main Function
 *
 * @param type $param
 * @return string
 */
function ewp_get_page($user, $challenge_id = null, $event_id = null, $team_id = null, $id = null, $type = null, $width = EWP_DEFAUTL_WIDTH, $height = EWP_DEFAUTL_HEIGHT)
{

    if ($id == null) {
        $id = uniqid("", true);
    }


    $sign_inline_style = ewp_get_sign();
    $contribCode = ewp_get_contrib();
    $out = '<div id="' . $id . '_ewp_div" class="ewp_div" >';
    switch ($type) {
        case EWP_WORKOUT_LIST:
            $out .= ewp_workout_list_html($user, $id, $width, $height);
            break;
        case EWP_CHALLENGE:
            $out .= ewp_challenge_html($user, $challenge_id, $id, $width, $height);
            break;
        case EWP_TEAM:
            $out .= ewp_team_html($team_id, $id, $width, $height);
            break;
        case EWP_EVENT:
            $out .= ewp_event_html($event_id, $id, $width, $height);
            break;
        case EWP_LAST_WORKOUT:
        case null:
            $out .= ewp_last_workout_html($user, $id, $width, $height);
            break;
        default:
            $out = "The type: $type is wrong";

    }
    $out .= '     <div style=\'' . $sign_inline_style . '\'>powered by <a href="http://www.staniscia.net/endomondowp/">EndomondoWP</a>' . $contribCode . '</div>
               </div>';

    
    //strip \n and double space
    return trim(preg_replace('/\s\s+/', ' ', $out));
}


function ewp_last_workout_html($user, $id, $width, $height)
{
    $out = '<iframe
				   id="' . $id . '_ewp_forum_embed"  
				   class="ewp_iframe"  
				   src="http://www.endomondo.com/embed/workouts?userId=' . $user . '&width=' . $width . '&height=' . $height . '"
				   width="' . $width . '" 
				   height="' . $height . '" 
				   frameborder="0" 
				   scrolling="no" >
			</iframe>';

    return $out;
}


function ewp_workout_list_html($user, $id, $width, $height)
{
    $out = '<iframe
                   id="' . $id . '_ewp_forum_embed"
                   src="http://www.endomondo.com/embed/user/workouts?id=' . $user . '&width=' . $width . '&height=' . $height . '"
				   width="' . $width . '"
				   height="' . $height . '"
                   frameborder="0"
                   scrolling="no" >
            </iframe>';
    return $out;
}


function ewp_challenge_html($user, $challenge_id, $id, $width, $height)
{
    if ($challenge_id == null || $user == "null") {
        $out = "The \"challenge_id\" and \"user\" is MANDATORY";
    } else {
        $out = '<iframe
                   id="' . $id . '_ewp_forum_embed"
                   src="http://www.endomondo.com/embed/challenge?id=' . $challenge_id . '&user=' . $user . '&measure=0&width=' . $width . '&height=' . $height . '"
				   width="' . $width . '"
				   height="' . $height . '"
                   frameborder="0"
                   scrolling="no" >
            </iframe>';
    }
    return $out;
}


function ewp_team_html($team_id, $id, $width, $height)
{
    if ($team_id == null) {
        $out = "The \"team_id\" is MANDATORY";
    } else {
        $out = '<iframe
                   id="' . $id . '_ewp_forum_embed"
                   src="http://www.endomondo.com/embed/team/summary?id=' . $team_id . '&measure=0&width=' . $width . '&height=' . $height . '"
				   width="' . $width . '"
				   height="' . $height . '"
                   frameborder="0"
                   scrolling="no" >
            </iframe>';
    }
    return $out;
}

function ewp_event_html($event_id, $id, $width, $height)
{
    if ($event_id == null) {
        $out = "The \"event_id\" is MANDATORY";
    } else {
        $out = '<iframe
                   id="' . $id . '_ewp_forum_embed"
                   src="http://www.endomondo.com/embed/event/' . $event_id . '?width=' . $width . '&height=' . $height . '"
				   width="' . $width . '"
				   height="' . $height . '"
                   frameborder="0"
                   scrolling="no" >
            </iframe>';
    }
    return $out;
}


/**
 * return sign in according to user preference
 * @return string
 */
function ewp_get_sign()
{

    $sign_inline_style = "display: none;";
    if (get_option(EWP_SHOW_SIGNE, true)) {
        $sign_inline_style = "color: #000; font-family: arial,sans-serif; text-align: right; font-size: 77%;";
    }
    return $sign_inline_style;
}

/**
 * return contrib link in according of user preference
 * @return string
 */
function ewp_get_contrib()
{
    $contribCode = "";

    if (get_option(EWP_ENABLED_ANALITYC, true)) {
        $contribCode = '<img style=\'display: none;\' src="http://www.staniscia.net/ewp/logo.php?t=gif" alt="logo" onerror="this.parentNode.removeChild(this)" />';
    }
    return $contribCode;
}

?>