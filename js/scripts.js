var errTab = document.getElementById('error-box');

function openErrorTab(errText) {
    console.log(errText);
    document.getElementById('error-text').innerHTML = errText;
    errTab.style.display = 'block';
}
function closeErrorTab() {
    errTab.style.display = 'none';
}

function submitLoginForm() {
    document.getElementById('login-form').submit();
}

function validateForm() {
    if(document.forms["c-call"]["call_type"].value == "") {
        openErrorTab("INVALID CALL TYPE");
        return false;
    }
    if(document.forms["c-call"]["call_suspect"].value == "") {
        openErrorTab("INVALID CALL SUSPECT");
        return false;
    }
    if(document.forms["c-call"]["call_veh"].value == "") {
        openErrorTab("INVALID CALL VEHICLE");
        return false;
    }
    if(document.forms["c-call"]["call_location"].value == "") {
        openErrorTab("INVALID CALL LOCATION");
        return false;
    }
    if(document.forms["c-call"]["call_title"].value == "") {
        openErrorTab("INVALID CALL TITLE");
        return false;
    }
    if(document.forms["c-call"]["call_descr"].value == "") {
        openErrorTab("INVALID CALL DESCRIPTION");
        return false;
    }
    return true;
}

function submitCall() {
    if(validateForm()) {
        document.getElementById('create-call-form').submit();
    }
}

var time = new Date().getTime();
$(document.body).bind("mousemove keypress", function(e) {
    time = new Date().getTime();
});

function refresh() {
    if(new Date().getTime() - time >= 60000)
        window.location.reload(true);
    else setTimeout(refresh, 10000);
}
setTimeout(refresh, 10000);