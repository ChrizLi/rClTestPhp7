<?php
class cUser
{
/*--------------------------------------
---- 20180225V1.0.0, ListlChr, init
---- 
----------------------------------------
---- What this code does:
---- contains basic function regarding current user
---- 
----------------------------------------
---- known Errors/missing features:
---- 
---------------------------------------*/
    private static $sAdAccountName = "";
    private static $sAdDomain      = "";

    public static function fnInit()
    {
        self::fnAdAccountInit();
    }

    private static function fnAdAccountInit()
    {
        self::fnAdAccountSet();
    }
    
    public static function fnAdAccountSet()
    {
        self::$sAdAccountName   ="cl";
        self::$sAdDomain        ="AL13"; 
    }
    
    public static function fnAdAccountGet()
    {   return self::$sAdDomain."\\".self::$sAdAccountName;}
    
    public static function fnAdAccountNameGet()
    {   return self::$sAdAccountName;}
    
    public static function fnAdDomainGet()
    {   return self::$sAdDomain;}
}
?>
