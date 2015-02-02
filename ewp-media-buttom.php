<?php

//Add button on media buttons context
add_action('media_buttons_context', 'add_ewp_button');

//action to add a custom button to the content editor
function add_ewp_button($context)
{
    add_thickbox();
    $img =EWP_URL."/images/logo_small.png";
    $title = 'Add workout';
    $context .= "<a class='button thickbox' title='{$title}' href='#TB_inline?width=800&height=800&inlineId=ewp_inline_popup_content'><img src='{$img}' />{$title}</a>";
    return $context;
}

//Add inline content of the botton
add_action('admin_footer', 'add_ewp_inline_popup_content');
function add_ewp_inline_popup_content(){
    echo '<div id="ewp_inline_popup_content" style="display:none;"><p>';
    include (EWP_DIR . 'admin/ewp-html-add-shortcode.php');
    echo '</p></div>';
}



add_action( 'admin_enqueue_scripts', 'add_ewp_custom_media_botton_js' );
function add_ewp_custom_media_botton_js(){
    wp_enqueue_style( 'pure', 'http://yui.yahooapis.com/pure/0.5.0/pure-min.css' );
    wp_enqueue_script( 'ewp-media-botton', EWP_URL.'/js/ewp-media-botton.js', array(), '1.0.0', true );
    wp_localize_script('ewp-media-botton', 'WPURLS', array( 'ewpurl' => EWP_URL)); 
}






 