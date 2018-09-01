// Cross-browser implementation of element.addEventListener()
function fnAddListen(evnt, elem, func)
{
    // Use: fnListen("event name", elem, func);
    if (elem.addEventListener)  // W3C DOM
        elem.addEventListener(evnt,func,false);
    else if (elem.attachEvent)
    { // IE DOM
         var r = elem.attachEvent("on"+evnt, func);
         return r;
    }
    else window.alert('fnAddListen not possible');
}

function fnRemoveListen(evnt, elem, func)
{
    elem.removeEventListener(evnt, func, useCapture)
}

function fnGetFilename()
{
    var sPath = window.location.pathname;
    var sPage = sPath.split("/").pop();
    //console.log( sPage );
    return sPage;
}
