<?php

class CPhpServer
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

    private static $oStageCandidateDi = "";
    
    public static function fnInit()
    {   // constructor for non existing constructor in static classes
        self::$oStageCandidateDi = self::FnStageCandidateInit();
    }

    private static function fnStageCandidateInit()
    {
        $oDi = 
        [
            "sIsDev"    => "dev",
            "sIsTest"   => "test",
            "sIsProd"   => "prod"
        ];
        return $oDi;
    }
    
    public static function fnServerNameGet()
    {
        return $_SERVER['SERVER_NAME'];
    }
    
    public static function fnServerPortGet()
    {
        return $_SERVER['SERVER_PORT'];
    }
    
    public static function fnServerStageGet($sServer="", $nPort="")
    {
        if ($sServer =="") $sServer= self::fnServerNameGet();
        if ($nPort   =="") $nPort  = self::fnServerPortGet();
        
        $sServer = self::fnServerNameNormalize($sServer);
        
        if ($sServer == "localhost")
        {
            switch($nPort)
            {
                case 8531:
                case 8601:
                case 8602:
                case 8721:
                    $sOut = "dev";
                    break;
                case 8533:
                case 8613:
                    $sOut = "test";
                case   80:
                case 8535:
                    $sOut = "prod";
            }
        }
        
        if ($sServer == "TestMyBeip")
        {
            $sOut = "test";
        }
        
        if ($sServer == "MyBeip")
        {
            $sOut = "prod";
        }
        
        if ($sServer == "BigINet")
        {
            $sOut = "prod";
        }
        
        return $sOut;
    }
    
    public static function fnServerNameNormalize($s)
    {
        switch($s)
        {
            case "10.5.129.52":
            case "EuBigWb67152":
                $sOut="TestMyBeip";
                break;
            case "10.5.144.52":
            case "EuBigWb67121":
            case "EuBigWb67122":
                $sOut="MyBeip";
                break;
            case "localhost":
                $sOut="localhost";
                break;
            default:
                fnErrorThrow("ArgumentIsNotValidException");
        }
        return $sOut;
    }
    
    public static function fnStageCandidateGet(): array
    {
        return self::$oStageCandidateDi;
    }
    
    public static function fnServerStageIsDev($sServer="", $nPort=""): bool
    {
        $s = self::FnServerStageGet($sServer, $nPort);
        if ($s == "dev")
        { $b = true;}
        else
        { $b = false;}
        return $b;
    }
    
    public static function fnServerStageIsTest($sServer="", $nPort=""): bool
    {
        $s = self::fnServerStageGet($sServer, $nPort);
        if ($s == "test")
        { $b = true;}
        else
        { $b = false;}
        return false;
    }
    
    public static function fnServerStageIsProd($sServer="", $nPort=""): bool
    {
        $s = self::fnServerStageGet($sServer, $nPort);
        if ($s == "prod")
        { $b = true;}
        else
        { $b = false;}
        return $b;
    }
    
    //////////////////////////////////////
    
    public static function FnRootFolderGet():string
    {
        //return __DIR__;
        return $_SERVER['DOCUMENT_ROOT'];
    }
    
    /*public static function fnClientIpGet()
    {
        // return client's ip addr,e.g. 127.0.0.1
        return $_SERVER['REMOTE_ADDR'];
    }*/
    /*
    public static function FnScriptFileNameFq()
    {
        // return fq of current script
        return $_SERVER['SCRIPT_FILENAME'];
    }
    
    public static function FnScriptFileName()
    {
        //return current scriptfileName
        return $_SERVER['PHP_SELF'];
    }
    */
    private static function fnErrorThrow($s)
    {   // throw exception
        throw new\exception($s);
    }
}
?>
