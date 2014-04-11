<h3>Select type of view:
<select id="ewp_in_type" >
        <option value="none" selected="selected"> - </option>
        <option value="last-workout">last-workout</option>
        <option value="workout-list">workout-list</option>
        <option value="challenge">challenge</option>
        <option value="team">team</option>
        <option value="event">event</option>
    </select>
</h3>


<table class="form-table" style="width: 100%">
    <tbody>
    <tr valign="top">
    </tr>
    <tr id="tr_ewp_uei" valign="top" style="display: none">
        <th scope="row">
            Endomondo User ID:
        </th>
        <td>
            <input id="ewp_in_eui" maxlength="255" value="" type="text" style="border: 1px solid red">
        </td>
    </tr>
    <tr valign="top" id="tr_ewp_ei" style="display: none">
        <th scope="row">
            Event ID:
        </th>
        <td>
            <input id="ewp_in_ei"   maxlength="255" value="" type="text" style="border: 1px solid red">
        </td>
    </tr>
    <tr valign="top" id="tr_ewp_ci" style="display: none">
        <th scope="row">
            Challenge ID:
        </th>
        <td>
            <input id="ewp_in_ci"  maxlength="255" value="" type="text" style="border: 1px solid red">
        </td>
    </tr>
    <tr valign="top" id="tr_ewp_ti" style="display: none">
        <th scope="row">
            Team ID
        </th>
        <td>
            <input id="ewp_in_ti"  maxlength="255" value="" type="text" style="border: 1px solid red">
        </td>
    </tr>
    <tr valign="top" id="ewp_size" style="display: none">
        <th scope="row">
            With x Height
        </th>
        <td>
            <input id="ewp_in_with" name="ewp_in_with" maxlength="255" value="<?php echo EWP_DEFAUTL_WIDTH; ?>"
                   type="text"> px <input id="ewp_in_height" name="ewp_in_height" maxlength="255"
                                          value="<?php echo EWP_DEFAUTL_HEIGHT; ?>" type="text">px
        </td>
    </tr>

    </tbody>
</table>
<br>
        <input type="button" class="button"
               value="close" style="text-align: right" onclick="tb_remove();"/>
<br>
        <input id="ewp_btm" style="display:none;" type="button" class="button button-primary" value="Salva"
               onclick="ewp_write_shortcut();"/>

