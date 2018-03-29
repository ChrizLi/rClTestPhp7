//
// 20151121v1.0, ListlChr, init
//
// what this code does
// define if Develop or Production
//
// known error/missing code:
//

function fnIsCodeStageProduction()
{
    // if servername in (EuBigWb)
    var s    = location.hostname;
    var nPos = s.search("EuBigWb1");
    if  nPos === 0 {nPos = s.search("EuBigWb2");}
    var bOut = (nPos === 0) ? 0:1;
    
    return bOut;
}

function fnIsCodeStageDevelop()
{
    // if servername in (EuBigWb)
    var s    = location.hostname;
    var nPos = s.search("EuBigWb1");
    var bOut = (nPos === 0) ? 0:1;
    
    return bOut;
}

function fnGetCodeStage()
{
    var sOut;
    var s = location.hostname;
    if  s === "EuBigWb1" { sOut = "Production" }
    if  s === "EuBigWb2" { sOut = "Production" }
    if  s === "EuBigWb3" { sOut = "Development" }
    return sOut;
}
