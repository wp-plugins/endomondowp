<?php

/**
 *

//add a button to the content editor, next to the media button
//this button will show a popup that contains inline content
add_action('media_buttons_context', 'add_ewp_custom_button');

//add some content to the bottom of the page
//This will be shown in the inline modal
add_action('admin_footer', 'add_ewp_shortcode_popup_content');



add_action( 'admin_enqueue_scripts', 'add_ewp_custom_media_botton_js' );


//action to add a custom button to the content editor
function add_ewp_custom_media_botton_js()
{
    wp_enqueue_script( 'ewp-media-botton', plugins_url(). '/endomondowp/js/ewp-media-botton.js', array(), '1.0.0', true );
}


//action to add a custom button to the content editor
function add_ewp_custom_button($context)
{

//path to my icon
    $img =EWP_URL."/images/logo_small.png";



//our popup's title
    $title = 'Add Endomondo data';

//append the icon
    $context .= '
      <a  id="ewp-add-shortcode" class="button thickbox" title="'.$title.'" href="#TB_inline?inlineId=ewp_popup_container"><img src="'.$img.'" /></a>';

    return $context;
}

function add_ewp_shortcode_popup_content(){
    echo '<div id="ewp_popup_container" style="display:none;">';
    include (EWP_DIR . '/admin/ewp-html-add-shortcode.php ');
    echo '</div>';
}

 *
 *
 */