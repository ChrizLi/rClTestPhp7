<? php

class       CPhpServer
extends     CBase       {
    private
            object  $oObjectAdmin,
            object  $oStage,
            array   $a,
            $a['sPhpServerId']  = '',
            $a['sName']         = '',
            $a['nPort']         = '',
            $a['sStageId']      = '';
            
            
    public  function    __construct(object $_oObjectAdmin, object $_oStageBase=null): void {
            $this->oObjectAdmin = $_oObjectAdmin;
            if  ($_oStageBase==null) {
                $this->oStage = new CStageBase;
            } else {
                $this->oStage = $_oStageBase;
            }
            fnInit();
    }
    
    private function    fnInit(): void {
            $aStageCandidate = $this->fnStageCandidateInit();
    }
    
    public  function    fnStageCandidateInit(): array {
            return  $this->oStage->fnGet();
    }

    public  function    fnSet(array $_a): void {
            $a['sPhpServerId']  = $_a['sPhpServerId'];
            $a['sName']         = $_a['sName'];
            $a['nPort']         = $_a['nPort'];
            $a['sStageId']      = $_a['sStageId'];
    }
    
    public  function    fnArrayGet(): array {
            return  array(
                'sPhpServerId'  = '',
                'sName'         = '',
                'nPort'         = '',
                'sStageId'      = ''
            );
    }
    
    public  function    fnGet(string $_s=null): array {
            if ($_s==null) {
                return $this->a;
            }   else {
                return $this->a[$_s];
            }
    }

    public  function    fnServerNameGet():string {
            return $_SERVER['SERVER_NAME'];
    }
    
    public  function    fnServerPortGet():string {
            return $_Server['SERVER_PORT'];
    }
    
    public  function    fnServerStageGet(string $sServer, int $nPort):string {
            if ($sServer ==""){ $sServer    = $this->fnServerNameGet()};
            if ($nPort   ==""){ $nPort      = $this->fnServerPortGet()};
            $sServer = $this->fnServerNameNormalize($sServer);
            if ($sServer == "BigW10N61014") {
                switch($nPort) {
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
            
            if ($sServer == "TestMyBeip") {
                $sOut = "test";
            }
            
            if ($sServer == "MyBeip") {
                $sOut = "prod";
            }
            
            if ($sServer == "BigINet") {
                $sOut = "prod";
            }
            return $sOut;
    }
    
    public  function    fnServerNameNormalize(string $s):string {
            switch($s) {
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
                    $this->fnErrorThrow();
            }
            return $sOut;
    }
    
    public  function    fnStageCandidateGet(): array {
            return      $aStageCandidate;
    }
    
    public  function    fnServerStageIsDev(string $sServer, int $nPort): bool {
            $s = $this->fnServerStageGet($sServer, $nPort);
            if ($s = "dev") { 
                $b = true;
            }   else { 
                $b = false;
            }
            return $b;
    }
    
    public  function    fnServerStageIsTest(string $sServer, int $nPort):bool {
            $s = $this->fnServerStageGet($sServer, $nPort);
            if ($s = "test") { 
                $b = true;
            }   else { 
                $b = false;
            }
            return $b;
    }
    
    public  function    fnServerStageIsProd(string $sServer, int $nPort):bool {
            $s = $this->fnServerStageGet($sServer, $nPort);
            if ($s = "prod") { 
                $b = true;
            }   else { 
                $b = false;
            }
            return $b;
    }
    
    //////////////////////////////////////
    
    public  function    fnClientIpGet() {
        // return client's ip addr,e.g. 127.0.0.1
        return $_SERVER['REMOTE_ADDR'];
    }
    
    public  function    fnScriptFileNameFq() {
        // return fq of current script
        return $_SERVER['SCRIPT_FILENAME'];
    }
    
    public  function    fnScriptFileName() {
        //return current scriptfileName
        return $_SERVER['PHP_SELF'];
    }
}

?>
