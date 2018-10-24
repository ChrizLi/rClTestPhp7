//

function fnMain()
{
    fnEventListenerAddToAddButton();
}

function fnEventListenerAddToAddButton()
{
    document.getElementById("sAdd").addEventListener("click", fnRowAdd);
}

function fnRowAdd()
{
    var eRow    = "";
    var eContent= "";
    var eDel    = "";
    //var arHr    = document.getElementsByTagName("form")[0].getElementsByTagName("hr");
    //var eHr     = arHr[length-1];
    //var eRow    = document.createElement("input")
    //    eRow.setAttribute("id","s3_1");
    /*
    eRow    = document.createElement("h1")
    eContent= document.createTextNode("xxx");
    eRow.appendChild(eContent);
    document.getElementsByTagName("form")[0].appendChild(eRow);
    */
    
    // ins first input
    eRow    = document.createElement("input");
    eRow.setAttribute("id",     "sX_Y");
    eRow.setAttribute("name",   "sX_Y");
    eRow.setAttribute("type",   "text");
    eRow.setAttribute("value",  "123");
    document.getElementsByTagName("form")[0].appendChild(eRow);
    
    // ins 2nd input
    eRow    = document.createElement("input");
    eRow.setAttribute("id",     "sY_X");
    eRow.setAttribute("name",   "sY_X");
    eRow.setAttribute("type",   "text");
    eRow.setAttribute("value",  "456");
    document.getElementsByTagName("form")[0].appendChild(eRow);
    
    // del old AddButton
    eDel = document.getElementById("sAdd");
    document.getElementsByTagName("form")[0].removeChild(eDel);
    
    // ins new AddButton
    eRow    = document.createElement("input");
    eRow.setAttribute("id",     "sAdd");
    eRow.setAttribute("name",   "sY_X");
    eRow.setAttribute("type",   "button");
    eRow.setAttribute("value",  "+");
    document.getElementsByTagName("form")[0].appendChild(eRow);
    fnEventListenerAddToAddButton();
    
    eRow    = document.createElement("hr");
    document.getElementsByTagName("form")[0].appendChild(eRow);
}

function fnRowAddOld1()
{
    //arHr = document.getElementsByTagName("form");
    var arHr = document.getElementsByTagName("form")[0].getElementsByTagName("hr");
    for( var n=0;n<arHr.length;n++)
    {
        alert("x"+n);
    }
    //alert("end");
    //alert(arHr.length);
}