<?php

require_once("CSite");

class CSite
{
    private $arSite     = "";

    public  static function __construct()
    {
            $arSite     = CSiteStage::fnSiteInit(); 
    }
    
    private static function fnSiteInit(): array
    {
            return CSite::fnSel();
    }
           
    public  static function fnStageGet
    (
            string  $sIp,
            int     $nPort,
            bool    $bErrorThrow=true
    ):      string
    {
        $sOut = "";
        forEach($arSite as $ar)
        {
            if($ar['sIp']==$sIp and $ar['nPort']==$nPort)
            {
                $sOut = $ar['sStageId'];
                break;
            }
        }
        if($sOut="" and $bErrorThrow) fnErrorThrow("ArgumentNotValidException");
        return $sOut;
    }
}

?>
