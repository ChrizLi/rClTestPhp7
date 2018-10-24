//v1.js

function fnMain()
{
    //alert("Oops");
    //document.body.addEventListener("click", fnOnClick());
    ////document.getElementById("sTbl").addEventListener("click", fnOnClick);
    //document.getElementById("sTbl").innerHTML="x";
    document.getElementById("sTbl").addEventListener("click", fnOnClick);
}

function fnOnClick(event)
{
    //alert(event.target.tagName);
    //alert(this.id);
    if (event)
        alert(event.target.id);
}