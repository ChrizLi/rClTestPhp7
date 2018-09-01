/* was ich will
    landingPage forward mit allen parametern
    incl. info was angezeigt werden soll(info der landingPage)
    z.b.
    LandingPage.html ruft auf
    Index.html?sPage=LandingPage.html
    
    oder
    
    LandingPage.html?sOption=xyz ruft auf
    Index.html?sOption=xyz&sPage=LandingPage.html
    
    oder
    
    LandingPage.html?sPage=3rdPage.html ruft auf
    Index.html?sPage=LandingPage.html
    Der sPage Parameter wird bei LandingPages verworfen
*/

function fnMain()
{
    fnGetFqUrlFromSystem();
    fnGetUrlParameter();
}

function fnGetFqUrlFromSystem()
{
    return window.document.href
}

function fnFnGetUrlParameter(sUrl)
{}

function fnDelUrlParameter(sUrl, sParameter)
{
    // delete a given parameter including it's value
    nPosStart = sUrl.substring(sParameter,sUrl.substring("?"))
    if (nPosStart <> 0) 
    {   // sParameter was found, so find last char of the value
        nPosEnd   = sUrl.substring("&")
        if (nPosEnd == 0) 
        { // Parameter is last in line
            nPosEnd = sUrl.length;
        }
        sUrl = sUrl.slice(0, nPosStart) + sUrl.slice(nPosEnd);
        return sUrl;
    }
}

function fnAddUrlParameter(sUrl,sParameter,sValue)
{
    // search if a parameter was alread given
    // this will decide if ? or & will be added
  
    var sPos = sUrl.substring("?");
    if sPos <> 0 {
        sUrl = sUrl + "&" + sParameter + "=" + encodeURI(sValue);
    }
    else {
        sUrl = sUrl + "?" + sParameter + "=" + encodeURI(sValue);
    }
    return sUrl;
}