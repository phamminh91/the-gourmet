

// CHECK
function upperCase($k)
{
    var x=document.getElementById($k);
    x.value=x.value.toUpperCase();
}


function validate_chars($k, $y, $n) {
    var special = false;
    var x=document.getElementById($k);
    var special_chars = "!@#$%^&*()+=[]\\\';,/{}|\":<>?~";
    for (var i = 0; i < x.value.length; i++) {
        if ((special_chars.indexOf(x.value.charAt(i)) != -1) || (x.value.charAt(i) == " ")) {
            special = true;
            break;
        }
    }
    document.getElementById($y).style.visibility = 'hidden';
    document.getElementById($n).style.visibility = 'hidden';
    if (special || x.value.length < 6) {
        document.getElementById($n).style.visibility = 'visible';
    }
    else {
        document.getElementById($y).style.visibility = 'visible';
    }
}
function validate_name($k, $y, $n) {
    var special = false;
    var x=document.getElementById($k);
    var special_chars = "!@#$%^&*()+=[]\\\';,/{}|\":<>?~";
    for (var i = 0; i < x.value.length; i++) {
        if (special_chars.indexOf(x.value.charAt(i)) != -1) {
            special = true;
            break;
        }
    }
    document.getElementById($y).style.visibility = 'hidden';
    document.getElementById($n).style.visibility = 'hidden';
    if (special) {
        document.getElementById($n).style.visibility = 'visible';
    }
    else {
        document.getElementById($y).style.visibility = 'visible';
    }
}
function validate_email($k, $y, $n) {
    var special = true;
    var x=document.getElementById($k);
    var atpos=x.value.indexOf("@");
    var dotpos=x.value.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.value.length)
    {
        special = false;
    }
    document.getElementById($y).style.visibility = 'hidden';
    document.getElementById($n).style.visibility = 'hidden';
    if (special) {
        document.getElementById($y).style.visibility = 'visible';
    }
    else {
        document.getElementById($n).style.visibility = 'visible';
    }
}
