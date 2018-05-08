fnFontSizeAdd(sCurrent, nAdd)
{
    var nSizeAbs;
    
    switch(sCurrent)
    {
        case "small":
            nSizeAbs=1;
            break;
        case "medium":
            nSizeAbs=2
            break;
        case "large":
            nSizeAbs=3;
            break;
        case "x-large":
            nSizeAbs=4;
            break;
        default:
            nSizeAbs=1;
    }
    
    //fix if values too big/small
    if(nSizeAbs+nAdd<1)
    {
        nSizeAbs=1;
    };
    else if(nSizeAbs+nAdd>4)
    {
        nSizeAbs=4;
    }
    else 
    {
        nSizeAbs+=nAdd;
    }
    
    //convert 1-4 to small,medium,large,x-large
    switch(nSizeAbs)
    {
        case 1:
            sCurrent="small";
            break;
        case 2:
            sCurrent="medium";
            break;
        case 3:
            sCurrent="large";
            break;
        case 4:
            sCurrent="x-large";
            break;
    };
    
    return @sCurrent;
}
