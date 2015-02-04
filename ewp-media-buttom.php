<?php

//Add button on media buttons context
add_action('media_buttons_context', 'add_ewp_button');

//action to add a custom button to the content editor
function add_ewp_button($context)
{
    $img =EWP_URL."/images/logo_small.png";
    $title = 'Add workout';
    $context .="<li class='button' id='ewp_editor_button'><img src='{$img}'/>{$title}</li>";
    return $context;
}

//Add inline content of the botton
add_action('admin_footer', 'add_ewp_inline_popup_content');
function add_ewp_inline_popup_content(){
    echo '<div id="ewp_windows_content" title="EndomondoWP" style="display: none;" >';
    include (EWP_DIR . 'admin/ewp-html-add-shortcode.php');
    echo '</div>';
}


add_action( 'admin_enqueue_scripts', 'add_ewp_custom_style' );
function add_ewp_custom_style(){
    wp_enqueue_style( 'pure', 'http://yui.yahooapis.com/pure/0.5.0/pure-min.css' );
    wp_enqueue_style( 'ewp_admin_css', plugins_url('/css/ewp-editor-style.css',___EWP_FILE___) , false, '1.0.0' );
   
}

add_action( 'admin_enqueue_scripts', 'add_ewp_custom_js' );
function add_ewp_custom_js(){
    wp_enqueue_script( 'ewp-media-botton', EWP_URL.'/js/ewp-media-botton.js', array('jquery-ui-dialog','jquery-core'), '1.0.0', true );
    wp_localize_script('ewp-media-botton', 'WPURLS', array( 'ewpurl' => EWP_URL)); 
} 