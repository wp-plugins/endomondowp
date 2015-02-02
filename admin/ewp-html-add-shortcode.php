<?php
/* Copyright 2012 Alessandro Staniscia (email : alessandro@staniscia.net)

  This program is free software; you can redisdivibute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is disdivibuted in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
?>


<div id="ewp_input_box" style="float: left;">
    <form class="pure-form pure-form-aligned" >
        <fieldset>
            <div class="pure-control-group">
                <label for="ewp_in_type">Select type of view:</label>
                <select id="ewp_in_type" >
                    <option value="none" selected="selected"> - </option>
                    <option value="last-workout">Last Workout</option>
                    <option value="workout-list">Workouts list</option>
                    <option value="challenge">Challenge</option>
                    <option value="team">Team</option>
                    <option value="event">Event</option>
                </select>
            </div>




            <div id="div_ewp_uei" class="pure-control-group">
                <label for="ewp_in_eui">User id</label>
                <input id="ewp_in_eui" maxlength="255" value="" type="text" required placeholder="The endomondo user id">
            </div>

            <div id="div_ewp_ei" class="pure-control-group">
                <label for="ewp_in_ei">Event id</label>
                <input id="ewp_in_ei" maxlength="255" value="" type="text" required placeholder="The event idetification">
            </div>
            <div id="div_ewp_ci" class="pure-control-group">
                <label for="ewp_in_ci">Challenge id</label>
                <input id="ewp_in_ci" maxlength="255" value="" type="text" required placeholder="The challenge idetification">
            </div>
            <div id="div_ewp_ti" class="pure-control-group">
                <label for="ewp_in_ti">Team id</label>
                <input id="ewp_in_ti" maxlength="255" value="" type="text" required placeholder="The team idetification">
            </div>

            <div id="div_ewp_size" class="pure-control-group">
                <label for="ewp_in_with">Width</label>
                <input id="ewp_in_with" name="ewp_in_with" maxlength="255" placeholder="<?php echo EWP_DEFAUTL_WIDTH; ?> in px" type="text">
                <br>
                <label for="ewp_in_height">Height</label>
                <input id="ewp_in_height" name="ewp_in_height" maxlength="255" placeholder="<?php echo EWP_DEFAUTL_HEIGHT; ?> in px" type="text">
            </div>
            <div class="pure-control-group">
                <input type="button" class="button right" value="Close" id="ewp_btm_close" />
                <input type="button" class="button button-primary right" value="Apply" id="ewp_btm_apply"  />
            </div>
        </fieldset>

    </form>
</div>
<div id="ewp_preview_box" style="float: right;">
    <img id="ewp_img_preview" src="<?php echo EWP_URL; ?>/images/<?php echo EWP_LAST_WORKOUT; ?>_p.png" border="0" />
</div>

<div id="ewp_preview_shortcode_box"  style="float: bottom;">
  select a view
</div>