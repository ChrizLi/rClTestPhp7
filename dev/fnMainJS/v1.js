// no onLoad in body tag needed as we attach fnMain() by js
window.onload = fnMain();

function fnMain()
{   //load further js files
    fnScriptLoad("my_lovely_script.js", myPrettyCode);
}

function fnScriptLoad(sUrl, fnCallback)
{   //  adding the script tag to the (first) head-tag
    var elHead      = document.getElementsByTagName('head')[0];
    var elScript    = document.createElement('script');
    elScript.src    = sUrl;

    //  Then bind the event to the callback function.
    //  There are several events for cross browser compatibility.
    elScript.onreadystatechange = fnCallback;
    elScript.onload             = fnCallback;

    //  Fire the loading
    elHead.appendChild(elScript);
}

var myPrettyCode = function() {
    // Here, do whatever you want
};

