/**
 * Created with JetBrains PhpStorm.
 * User: staniscia
 * Date: 10/04/14
 * Time: 15.05
 */
jQuery.noConflict();
(function($) {

    $("#ewp_windows_content").dialog({
        autoOpen: false,
        width: 500,
        close: function(event, ui) {
            resetView();
        },
        buttons: {
            Ok: function() {
                if (applyChoose())
                    $(this).dialog("close");
            }

        }
    });

    $("#ewp_in_type").ready(function() {
        resetView();
    });

    $("#ewp_in_type").change(function() {
        updateUI();
    });

    $("#ewp_editor_button").on("click", function() {
        $("#ewp_windows_content").dialog('open');
    });

    
    $("#ewp_in_eui").change(function(e){
        updateShortCode();
    });
    $("#ewp_in_ci").change(function(e){
        updateShortCode();
    });
    $(" #ewp_in_ei ").change(function(e){
        updateShortCode();
    });
    $("#ewp_in_ti ").change(function(e){
        updateShortCode();
    });
    $("#ewp_in_with ").change(function(e){
        updateShortCode();
    });
    $("#ewp_in_height").change(function(e){
        updateShortCode();
    });


    function resetView() {
        $("#ewp_in_type").val('');
        $("#div_ewp_uei").hide();
        $("#div_ewp_ei").hide();
        $("#div_ewp_ci").hide();
        $("#div_ewp_ti").hide();
        $("#div_ewp_size").hide();
        $("#ewp_btm_apply").hide();
        //$("#ewp_img_preview").hide();
        $("#ewp_img_preview").attr('src', WPURLS.ewpurl + '/images/logo.png');
        $("#ewp_preview_shortcode_box").val("No Code");
    };

    function makeShortCode() {
        var selectObj = document.getElementById("ewp_in_type");
        var eui = $("#ewp_in_eui").val();
        var ei = $("#ewp_in_ei").val();
        var ci = $("#ewp_in_ci").val();
        var ti = $("#ewp_in_ti").val();
        var vwidht = $("#ewp_in_with").val();
        var vheight = $("#ewp_in_height").val();

        var out = "[endomondowp type=";
        switch (selectObj.selectedIndex) {
            case 1:
                if ( eui === null ) return null;
                out += "\"last-workout\" user=\"" + eui +"\"" ;
                break;
            case 2:
                if ( eui === null ) return null;
                out += "\"workout-list\" user=\"" + eui +"\"";
                break;
            case 3:
                if ( eui === null || ci === null ) return null;
                out += "\"challenge\" user=\"" + eui + "\" challenge_id=\"" + ci +"\"";
                break;
            case 4:
                if ( ti === null ) return null;
                out += "\"team\" team_id=\"" + ti +"\"";
                break;
            case 5:
                if ( ei === null ) return null;
                out += "\"event\" event_id=\"" + ei +"\"";
                break;
           
        }
        
        if ( !!vwidht ){
            out += " width=\"" + vwidht +"\"";
        }
        
        if ( !!vheight ){
            out += " height=\"" + vheight +"\"";
        }
        
        return out += " ]";
    };

    function applyChoose() {
        var code = makeShortCode();
        if (code === null) {
            return false;
        }
        tinyMCE.execCommand('mceInsertContent', false, code);
        resetView();
        return true;
    };

    function updateUI() {
        var selectObj = document.getElementById("ewp_in_type");
        var eui = $("#div_ewp_uei");
        var ei = $("#div_ewp_ei");
        var ci = $("#div_ewp_ci");
        var ti = $("#div_ewp_ti");
        var size = $("#div_ewp_size");
        var btm = $("#ewp_btm_apply");
        var img = $("#ewp_img_preview");

        switch (selectObj.selectedIndex) {
            case 1:
                btm.show();
                size.show();
                eui.show();
                ei.hide();
                ci.hide();
                ti.hide();
                img.show();
                img.attr('src', WPURLS.ewpurl + '/images/last-workout_p.png');
                break;
            case 2:
                btm.show();
                size.show();
                eui.show();
                ei.hide();
                ci.hide();
                ti.hide();
                img.show();
                img.attr('src', WPURLS.ewpurl + '/images/workout-list_p.png');
                break;
            case 3:
                btm.show();
                size.show();
                eui.show();
                ei.hide();
                ci.show();
                ti.hide();
                img.show();
                img.attr('src', WPURLS.ewpurl + '/images/challenge_p.png');
                break;
            case 4:
                btm.show();
                size.show();
                eui.hide();
                ei.hide();
                ci.hide();
                ti.show();
                img.show();
                img.attr('src', WPURLS.ewpurl + '/images/team_p.png');
                break;
            case 5:
                btm.show();
                size.show();
                eui.hide();
                ei.show();
                ci.hide();
                ti.hide();
                img.show();
                img.attr('src', WPURLS.ewpurl + '/images/event_p.png');
                break;
            default:
                resetView();
        }
        updateShortCode();
        return true;
    }
    ;
    
    function updateShortCode(){
        $("#ewp_preview_shortcode_box").html("<pre>" + makeShortCode() + "</pre>");
    }


})(jQuery);
