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
    public static function FnRedirect(string $sUrl, int nStatusCode)
    {
        header('Location: '.$sUrl, true, $nStatusCode);
        die();
    }
    
    public static function FnSleep(int $nMilliSecond)
    {
        time_nanosleep(0, $nMilliSecond*1000);
    }
}
?>
