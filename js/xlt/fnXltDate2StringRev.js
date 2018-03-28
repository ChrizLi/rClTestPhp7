function fnXltDate2StringRev(dt,sType)
{
    if      (dt=="")        {dt=getdate()}
    else if (dt==undefined)){dt=getdate()}
    
    var sRev="";
    
    if sType=="datetime"||sType=="date"
    {
    
        sRev=getYear(dt)+("0"+getMonth()).slice(0,2)+("0"+getDate()).slice(0,2);
    }
    
    if sType=="datetime"||sType=="time"
    {
        sRev+=("0" +getHours(dt)).slice(0,2)+
              ("0" +getMinutes(dt)).slice(0,2)+
              ("0" +getSeconds(dt)).slice(0,2)+
              ("00"+getMilliseconds(dt).slice(0,2)
    }

    return sRev;
}
