class CXltFile
{
    $sSlash         = "/";
    $sBackSlash     = "\";
    $sDelimiter     = $sSlash;
    $sDelimiterRev  = $sBackSlash;

    static public __construct()
    {
    }
    
    static public fnDelimiterGet()
    {
        return $sDelimiter;
    }
    
    static public fnDelimiterRevGet()
    {
        return $sDelimiterRev;
    }
    
    static public fnNormalize($s, $bSuffixAdd=false)
    {
        $sOut = replace($s, $sDelimiter);
        
        // add suffix
        if (bSuffixAdd and right($sOut,1) != $sDelimiter)
        {
            $sOut += $sDelimiter;
        }
        
        // drop suffix
        if (not bSuffixAdd and right($sOut,1) = $sDelimiter)
        {
            $sOut = left($sOut, len($sOut)-1);
        }
        return $sOut;
    }
    
    static public FnFileNameFullGet($sFileNameFq)
    {
        // return filename of the FqPath C:\folder\filename.txt -> filename.txt
        $sOut       = "";
        $nExtLen    = 0;
        // normalize given path
        $sOut = fnNormalize($sFileNameFq);

        // cut path, if path only is given right(1)=delimiter then output len(0)
        if fnRight($sOut,1) eq $sDelimiter)
        {
            $sOut = ""; // path without file was given, so output=""
        }
        else
        {
            $sOut = fnListLast($sOut, $sDelimiter);
        }
        
        $sOut = fnListLast($sOut, $sDelimiter);
        
        return $sOut;
    }
}
