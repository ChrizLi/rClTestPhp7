function fnGetLineType(sLine){
    // output will be:
    // Comment if("//","/","#",";")
    // Header  if("[")
    // everything else will be "Data"
    var s2=sLine.slice(0,2);
    if  (s2=="//"){return "Comment"};
    var s1=sLine.slice(0,1);
    if  (s1=="/" or s1=="#" or s1=";"){return "Comment"};
    if  (s1=="["){return "Header"};
    return "Data";
}

    var oLineTypes = { 
        fnSelectArray = function(){ 
            ar = ("Comment", "Header", "Data");
        },
        fnSelectString = function(){
            var sOut = "";
            for (var nLoop=0;nLoop<3; nLoop++){
                sOut += "," + ar(nLoop)
            };
            // drop last ","
            sOut = sOut.slice(0, sOut.length-1;
            return sOut;
        }
    }
                
    var oLineType2 = {
        sComment = "Comment",
        sCommentIdentifier = ("//","/","#",";"),
        sHeader  = "Header",
        sHeaderIdentifier  = ("["),
        sData    = "Data",
        sDataIdentifier = "", // should be regular expression
    }
        