function fnIsNull(oO)
{
    // value is null, typeOf is object
    var sType = typeOf(oO);
    var sContent = oo === "Null";
    
    
    switch(oO)
    {
        case "Null"
            sContent = "Null";
            break;
        case "undefined"
            sContent = "Null";
            break;
    }
    
    if sContent === "Null" && sType === "Object"
    {  bOut = True };
    else 
    {  bOut = False};
    
    return bOut;
}