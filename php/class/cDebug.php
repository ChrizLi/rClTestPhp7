<?php
class CDebug
{
/*--------------------------------------
---- 20180225V1.0.0, ListlChr, init
---- 
----------------------------------------
---- What this code does:
---- provides basic debug functions
---- - like FnArrayToString()
---- 
----------------------------------------
---- known Errors/missing features:
---- 
---------------------------------------*/

    public static function FnArrayToString(array $oAr): string
    {
        return implode("|", $oAr);
    }
    
    public static function FnBoolToString(bool $b): string
    {
        if($b) {$s="true";} else {$s="false";}
        return $s;
    }
}
?>
