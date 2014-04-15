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
                            <span><?php echo EWP_NAME; ?> <small style="float: right">v<?php echo EWP_VERSION; ?></small><br/></span>
                        </h3>
                        <div class="inside">
                            <div style="float: right; margin: -15px 0 10px 0"><a href="http://www.staniscia.net/endomondowp" target="_blank"><img src="<?php echo EWP_URL; ?>/images/logo.png" border="0" alt="logo" /></a></div>
                            <a class="sm_button sm_autor" href="http://www.staniscia.net/endomondowp" target="_blank"><?php _e('Plugin Homepage', 'ast-ewp-lang') ?></a>
                            <a class="sm_button sm_autor"  href="http://www.staniscia.net/workouts/" target="_blank"><?php _e('Live demo', 'ast-ewp-lang') ?></a>

                            <a class="sm_button sm_code"  href="http://wordpress.org/support/plugin/<?php echo EWP_SYS_NAME; ?>" target="_blank"><?php _e('Suggest a Feature', 'ast-ewp-lang') ?></a>
                            <a class="sm_button sm_bug"   href="http://wordpress.org/support/plugin/<?php echo EWP_SYS_NAME; ?>" target="_blank"><?php _e('Report a Bug', 'ast-ewp-lang') ?></a>
                            <a class="sm_button sm_star"  href="http://wordpress.org/plugins/<?php echo EWP_SYS_NAME; ?>/" target="_blank"><?php _e('Rate the plugin on WordPress.org', 'ast-ewp-lang') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <p>
                <a href="http://www.endomondo.com/" target="_new">Endomondo</a> is a sports community based on free real-time GPS tracking of running, cycling, etc.
                Bring your mobile on the track and get a complete training log. You can show your workout on Wordpress with this plugin!!
                You can embed Endomondo data on your page with a simple shortcode, just set the "user" with your Endomondo User ID<br>
                <center><img src="<?php echo EWP_URL; ?>/images/example-shortcode.png" border="0" alt="logo" /></center>
            </p>


            <div class="clear"></div>
        </div>
    </div>

    <div id="icon-options-general" class="icon32"></div><h3>Views</h3>
    <p>
        You can choose your prefered view:
    </p>


    <table class="widefat">
        <thead>
        <tr>
            <th>Type</th>
            <th>All options</th>
            <th>Example</th>
            <th>Preview</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th colspan="4"><b>* is mandatory</b></th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td><br><?php echo EWP_LAST_WORKOUT; ?></td>
            <td>
               <p><b>user*</b><br/>your id</p>
                <p><b>type*</b><br/><?php echo EWP_LAST_WORKOUT; ?></p>
                <p><b>width</b><br/>the width of view (default is <?php echo EWP_DEFAUTL_WIDTH; ?>)</p>
                <p><b>height</b><br/>the height of view (default is <?php echo EWP_DEFAUTL_HEIGHT; ?>)</p>
            </td>
            <td><br> [endomondowp user="1234567" type="last-workout"] </td>
            <td><img src="<?php echo EWP_URL; ?>/images/<?php echo EWP_LAST_WORKOUT; ?>_p.png" border="0" alt="logo" /></td>
        </tr>

        <tr>
            <td><br><?php echo EWP_WORKOUT_LIST; ?></td>
            <td>
                <p><b>user*</b><br/>your id</p>
                <p><b>type*</b><br/><?php echo EWP_WORKOUT_LIST; ?></p>
                <p><b>width</b><br/>the width of view (default is <?php echo EWP_DEFAUTL_WIDTH; ?>)</p>
                <p><b>height</b><br/>the height of view (default is <?php echo EWP_DEFAUTL_HEIGHT; ?>)</p>
            </td>
            <td><br>[endomondowp user="1234567" type="workout-list"]</td>
            <td><img src="<?php echo EWP_URL; ?>/images/<?php echo EWP_WORKOUT_LIST; ?>_p.png" border="0" alt="logo" /></td>
        </tr>



        <tr>
            <td><br><?php echo EWP_EVENT; ?></td>

            <td>
                <p><b>event_id*</b><br/>id of event</p>
                <p><b>type*</b><br/><?php echo EWP_EVENT; ?></p>
                <p><b>width</b><br/>the width of view (default is <?php echo EWP_DEFAUTL_WIDTH; ?>)</p>
                <p><b>height</b><br/>the height of view (default is <?php echo EWP_DEFAUTL_HEIGHT; ?>)</p>
            </td>

            <td><br>[endomondowp event_id="nRd-g3NqdaY" type="event" ]</td>
            <td><img src="<?php echo EWP_URL; ?>/images/<?php echo EWP_EVENT; ?>_p.png" border="0" alt="logo" /></td>
        </tr>

        <tr>
            <td><br><?php echo EWP_CHALLENGE; ?></td>
            <td>
                <p><b>challenge_id*</b><br/>id of challenge</p>
                <p><b>type*</b><br/><?php echo EWP_CHALLENGE; ?></p>
                <p><b>user</b><br/>your id</p>
                <p><b>width</b><br/>the width of view (default is <?php echo EWP_DEFAUTL_WIDTH; ?>)</p>
                <p><b>height</b><br/>the height of view (default is <?php echo EWP_DEFAUTL_HEIGHT; ?>)</p>
            </td>
            <td><br>[endomondowp user="1234567" challenge_id="13573295" type="challenge" ] </td>
            <td><img src="<?php echo EWP_URL; ?>/images/<?php echo EWP_CHALLENGE; ?>_p.png" border="0" alt="logo" /></td>
        </tr>


        <tr>
            <td><br><?php echo EWP_TEAM; ?></td>
            <td>
                <p><b>team_id*</b><br/>id of team</p>
                <p><b>type*</b><br/><?php echo EWP_TEAM; ?></p>
                <p><b>width</b><br/>the width of view (default is <?php echo EWP_DEFAUTL_WIDTH; ?>)</p>
                <p><b>height</b><br/>the height of view (default is <?php echo EWP_DEFAUTL_HEIGHT; ?>)</p>
            </td>
            <td><br>[endomondowp team_id="13376372" type="team"]</td>
            <td><img src="<?php echo EWP_URL; ?>/images/<?php echo EWP_TEAM; ?>_p.png" border="0" alt="logo" /></td>
        </tr>
        </tbody>
    </table>





    <h3>For designers...</h3>
    <div >
        <p>If you want customize the style of view, you can add css and use the following hook</p>
        <table class="widefat"    >
            <tr><td><b>The short code</b></td><td>&#9658;</td><td><b>HTML</b></td></tr>
            <tr>
                <td>
                    <code>[endomondowp id="my_id" user="XXX"]</code>
                </td>
                <td>&#9658;</td>
                <td>
                    <code>
                        &lt;div id=&quot;my_id_ewp_div&quot; class=&quot;ewp_div&quot; &gt;<br>
                        &#8195;&#8195;&#8195;  &lt;iframe id=&quot;my_id_ewp_forum_embed&quot; class=&quot;ewp_iframe&quot; ... &gt;<br>
                        &#8195;&#8195;&#8195;  &lt;/iframe&gt;<br>
                        &lt;/div&gt;<br>
                    </code>
                </td>
            </tr>
        </table>
        <div class="clear"></div>
    </div>

    <h3>For developer...</h3>
    <div>
        <p>You can use the EndomondoWP on your plugin! Otherwise you can use it on your current theme.
            In according to Codex, you can modify the current theme with  <a href="http://codex.wordpress.org/Child_Themes" target="new">Child Themes « WordPress Codex</a>,
            with a new <a href="http://codex.wordpress.org/Page_Templates" target="new">Page Templates « WordPress Codex </a> or simply modify directly the php file of theme.
            In any of this case you can add a invocation of function <code>do_endomondowp(...)</code> and you will have same action of shortcode.
            Also the parameters of function are the same of shortcode and are shown below</p>
            <pre style="border: 1px dotted gray">
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
                ...
                }
            </pre>
        <p>Example:</p><pre style="border: 1px dotted gray">
            <?php echo htmlentities('
                        [...]
                        <div class="entry">
                            <?php do_endomondowp("12345"); ?>
                            <?php the_content(__(\'More...\', \'picolight\')); ?>
                            <?php wp_link_pages(); ?>
                        </div>
                        [...]
                   ');
            ?>
        </pre>

        <p>Otherwise on your plugin or on your <a href="http://codex.wordpress.org/Functions_File_Explained" target="new">function.php</a> you can add one hook to one of 4 action ( see <a href="http://codex.wordpress.org/Glossary#Action" target="new">Actions</a> ) and you can run your custom code.
            The allowed action are show below and all action have the same parameter of do_endomondowp() function: </p>
        <ol>
            <li><code>pre_ewp_show</code> action. It's called before do_endomondowp(...) function</li>
            <li><code>post_ewp_show</code> action. It's called after do_endomondowp(...)  function</li>
            <li><code>pre_ewp_shortcode</code> action. It's called before invocation of all shortcode [endomondowp ...]</li>
            <li><code>post_ewp_shortcode</code> action. It's called after invocation of all shortcode [endomondowp ...]</li>
        </ol>

        <p>Example:</p><pre style="border: 1px dotted gray;">
            [...]
            add_action('pre_ewp_show','printMeFullArgs',10,9);
            add_action('post_ewp_show','printMe',10,2);

            function printMeFullArgs( $name, $id, $width, $height){
                echo "Action: pre_ewp_show  Argument: $name, $id, $width, $height";
            }

            function printMe( $name, $id){
                echo "Action: post_ewp_show  Argument:  $name, $id";
            }
            [...]
        </pre>

    </div>

    <form method="post" action="options.php">
        <?php
        settings_fields(EWP_SETTINGS);
        do_settings_sections(EWP_SETTINGS_PAGE);
        submit_button('Save options');
        ?>
    </form>

</div>



