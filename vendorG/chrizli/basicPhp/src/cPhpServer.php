class CPhpServer
{
    $sStageCandidateDi = fnStageCandidateInit();   

    function __construct()
    {
    
    }
    
    public static fnStageCandidateInit()
    {
        $sDi = 
        [
            "sIsDev" => "dev",
            "sIsTest"=> "test",
            "sIsProd"=> "prod";
        ];
        return $sDi;
    }
    
    public static fnServerNameGet()
    {
        return $_SERVER['SERVER_NAME'];
    }
    
    public static fnServerPortGet()
    {
        return $_Server['SERVER_PORT'];
    }
    
    public static fnServerStageGet($sServer, $nPort)
    {
        if $sServer =="" $sServer=fnServerNameGet();
        if $nPort   =="" $nPort  =fnServerPortGet();
        
        $sServer = fnServerNameNormalize($sServer);
        
        if ($sServer == "BigW10N61014")
        {
            switch($nPort)
            {
                case 8531:
                case 8601:
                case 8602:
                case 8611:
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
    
    public static fnServerNameNormalize($s)
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
            default:
             throwError;
        }
        return $sOut;
    }
    
    public static function fnStageCandidateGet()
    {
        return $sStageCandidateDi;
    }
    
    public static function fnServerStageIsDev($sServer, $nPort)
    {
        $s = fnServerStageGet($sServer, $nPort);
        if ($s = "dev")
        { $b = true}
        else
        { $b = false}
        return $b;
    }
    
    public static function fnServerStageIsTest($sServer, $nPort)
    {
        $s = fnServerStageGet($sServer, $nPort);
        if ($s = "test")
        { $b = true}
        else
        { $b = false}
        return $b;
    }
    
    public static function fnServerStageIsProd($sServer, $nPort)
    {
        $s = fnServerStageGet($sServer, $nPort);
        if ($s = "prod")
        { $b = true}
        else
        { $b = false}
        return $b;
    }
    
    //////////////////////////////////////
    
    public static function fnClientIpGet()
    {
        // return client's ip addr,e.g. 127.0.0.1
        return $_SERVER['REMOTE_ADDR'];
    }
    
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
}