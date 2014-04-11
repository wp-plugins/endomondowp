/**
 * Created with JetBrains PhpStorm.
 * User: staniscia
 * Date: 10/04/14
 * Time: 15.05
 */




document.getElementById("ewp_in_type").onchange = function () {
    var eui = document.getElementById("tr_ewp_uei");
    var ei = document.getElementById("tr_ewp_ei");
    var ci = document.getElementById("tr_ewp_ci");
    var ti = document.getElementById("tr_ewp_ti");
    var size = document.getElementById("ewp_size");
    var btm = document.getElementById("ewp_btm");

    switch (this.selectedIndex) {
    case 1:
    case 2:
    btm.style.display = "block";
    size.style.display = "block";
    eui.style.display = "block";
    ei.style.display = "none";
    ci.style.display = "none";
    ti.style.display = "none";
    break;
    case 3:
    btm.style.display = "block";
    size.style.display = "block";
    eui.style.display = "block";
    ei.style.display = "none";
    ci.style.display = "block";
    ti.style.display = "none";
    break;
    case 4:
    btm.style.display = "block";
    size.style.display = "block";
    eui.style.display = "none";
    ei.style.display = "none";
    ci.style.display = "none";
    ti.style.display = "block";
    break;
    case 5:
    btm.style.display = "block";
    size.style.display = "block";
    eui.style.display = "none";
    ei.style.display = "block";
    ci.style.display = "none";
    ti.style.display = "none";
    break;
    default:
    btm.style.display = "none";
    size.style.display = "none";
    eui.style.display = "none";
    ei.style.display = "none";
    ci.style.display = "none";
    ti.style.display = "none";
    }


}


function ewp_write_shortcut() {
    var selectObj= document.getElementById("ewp_in_type");
    var eui = document.getElementById("ewp_in_eui").value;
    var ei = document.getElementById("ewp_in_ei").value;
    var ci = document.getElementById("ewp_in_ci").value;
    var ti = document.getElementById("ewp_in_ti").value;
    var vwidht = document.getElementById("ewp_in_with").value;
    var vheight = document.getElementById("ewp_in_height").value;

    var out="[endomondowp type=";
    switch (selectObj.selectedIndex) {
    case 1:
    out+="last-workout user="+eui+" width="+vwidht+" height="+vheight+" ]";
    break;
    case 2:
    out+="workout-list user="+eui+" width="+vwidht+" height="+vheight+" ]";
    break;
    case 3:
    out+="challenge user="+eui+" challenge_id="+ci+" width="+vwidht+" height="+vheight+" ]";
    break;
    case 4:
    out+="team team_id="+ti+" width="+vwidht+" height="+vheight+" ]";
    break;
    case 5:
    out+="event event_id="+ei+" width="+vwidht+" height="+vheight+" ]";
    break;
    default:
    out+=" ]";
    }
window.tinyMCE.execCommand('mceInsertContent', false, out);
tb_remove();
}

