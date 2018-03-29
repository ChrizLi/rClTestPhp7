<?php

class CSite
{

    private $arNameToIp = "";
    private $arSite     = "";

    public static function    __construct()
    {
        $arSite     = CSite::fnSiteInit();
        $arNameToIp = CSite::fnNameToIpInit(); 
    }
    
    private static function fnSiteInit(): array
    {
        $ar=array();
        $ar[0]=array("sIp"=>"10.1.1.1",  "nPort"=>"80","sStageId"=>"dev");
        $ar[1]=array("sIp"=>"10.1.1.2",  "nPort"=>"80","sStageId"=>"prod");
        return $ar;
    }
    
    private static function fnNameToIpInit(): array
    {
        $ar=array();
        $ar["TestMyBeip"]   = "10.1.1.1";
        $ar["MyBeip"]       = "10.1.1.2";
        return  $ar;
    }
    
    public static function  fnSel(): array{return $arSite;}
    
    public static function  fnNameToIpGet(string $sName, bool $bErrorThrow): string
    {
        $sOut = array_Search($sName, $arNameToIp);
        if (!   $sOut and $bErrorThrow) fnErrorThrow("ArgumentNotValidException");
        return  $sOut;//ipV4
    }
}

?>
