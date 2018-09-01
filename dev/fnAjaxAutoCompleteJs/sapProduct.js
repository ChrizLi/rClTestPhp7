//
function fnMain()
{
    document.getElementById("sProductSearch").addEventListener("keyup", function(){fnHintShow2(this);});
}

function fnHintShow2(el) {
    var s = el.value;
    var sInfo;
    if (s.length < 3)
    {
        sInfo="tooSmall";
    }
    else
    {
        //var sInput=document.getElementById("sProductSearch").innerHTML;
        var sFileFq  = "sapProductAjax.cfm";
            sFileFq += "?sSearch=" + s;
            sInfo    = sFileFq;
        fnAjaxGet(sFileFq, fnDivOut);
    }
    document.getElementById("sFileCalled").innerHTML=sInfo;
}

function fnHintShow(s) {
    var sInfo;
    if(s.length < 3)
    {
        sInfo="tooSmall";
    }
    else
    {
        //var sInput=document.getElementById("sProductSearch").innerHTML;
        var sFileFq="sapProductAjax.cfm";
            sFileFq+="?sSearch="+s;
            sInfo=sFileFq;
        fnAjaxGet(sFileFq, fnDivOut);
    }
    document.getElementById("sFileCalled").innerHTML=sInfo;
}

function fnDivOut(oXml) {
    var sOut = oXml.responseText;
    document.getElementById("sD1").innerHTML=sOut;
}

function fnAjaxGet(sFileFq, fn) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if(this.readyState==4 && this.status==200)
        {
            //fnDivOut(this.responseText);
            fn(this);
        }
    };
    xhttp.open("get", sFileFq, true);
    xhttp.send();
}