<?php 

class COutput
{
/*--------------------------------------
---- 20180225V1.0.0, ListlChr, init
---- 
----------------------------------------
---- What this code does:
----
----------------------------------------
---- known Errors/missing features:
---- 
---------------------------------------*/

    public static $oOutSt = array("sHead"=>"", "sBody"=>"", "sUrlRedirect"=>"");

    public static function fnInit()
    {
        // define global vars
        //$sUrl = ""; 
    }

    public static function FnHeadGet(): string
    {
        return self::$oOutSt["sHead"];
    }
    
    public static function FnHeadConcat(string $s)
    {
        self::$oOutSt["sHead"].=$s;
    }
    
    public static function FnHeadReset(string $s="")
    {
        self::$oOutSt["sHead"]=$s;
    }
    
    public static function FnBodyGet(): string
    {
        return self::$oOutSt["sBody"];
    }
    
    public static function FnBodyConcat(string $s)
    {
        self::$oOutSt["sBody"].=$s;
    }
    
    public static function FnBodyReset(string $s="")
    {
        selft::$oOutSt["sBody"]=$s;
    }
    
    public static function FnUrlRedirectGet(string $s): string
    {
        return self::$oOutSt["sUrlRedirect"];
    }
    
    public static function FnUrlRedirectSet($sUrl)
    {
        $sUrl = $sUrl;
    }
    
    public static function FnUrlRedirectExists(): bool
    { 
        if (self::$oOutSt["sUrlRedirect"]!="")
        { $bOut = true;}
        else
        { $bOut = false;}
        return $bOut;
    }
    
    
    public static function FnBodyAllGet()
    {
        $sOut ="";
        if (self::FnUrlRedirectExists())
        {
            $sOut .= FnUrlRedirectGet();
        }
        else
        {
            //$sOut += FnNoteHtmlGet("Info");
            //$sOut += FnNoteHtmlGet("Error");
            self::FnBodyGet();
        }
        return $sOut;
    }
}
?>
