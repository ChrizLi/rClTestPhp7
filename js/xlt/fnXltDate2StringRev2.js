function fnXltDate2StringRev2(dt,sType)
{
    var sRev="",
        nPos=0;
        
    if (dt=="")||(dt==undefined)
    {dt =new date()}
    
    while sType.length>0
    {
        nPos++;
        switch (sType.slice(nPos,1)
        {
            case "Y":
                sRev+=getFullYear(dt);
                break;
            case "M"
                sRev+=("0"+getMonth(dt)).slice(0,2);
                break;
            case "D"
                sRev+=("0"+getDate(dt)).slice(0,2);
                break;
            case "h"
                sRev+=
                break;
            case "m"
                sRev+=
                break;
            case "s"
                sRev+=
                break;
            case "t"
                sRev+=
                break;
            case "_","-","."
                sRev+=
        }
    }
    
    return sRev;
}
