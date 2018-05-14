<?php
class   CPhpServer
extends CBase
{
    private
            CObjectAdmin    $oObjectAdmin,
            CStageBase      $oStageBase,
            array           $aStageCandidate = fnStageCandidateInit();

    public  function    __construct(object $oObjectAdmin, object $_oStageBase=null): void {
            $oObjectAdmin   = $_oObjectAdmin;
            $oStageBase     = $this->oObjectAdmin->fnObjectGet('CStageBase', $_oStageBase);
    }
    
    private function    fnInit(): void {
            $aStageCandidate    = $this->fnStageCandidateInit();
            $aServer            = $this->fnServerInit();
    }
    
    public  function    fnStageCandidateInit(): string {
            return $this.oStageBase.fnGet();
    }
    
    private function    fnServerInit(): void {
            $o  = new CPhpServer();
            $o->fnSet((sServerId='Server1', sServerName='Server1', nPort='8321', sStageId='dev');)
                (sServerId='Server2', sServerName='Server2', nPort='8322', sStageId='test')
    }
    
    public  function    fnServerNameGet() {
            return $_SERVER['SERVER_NAME'];
    }
    
    public  function    fnServerPortGet() {
            return $_Server['SERVER_PORT'];
    }
    
    public  static  function    fnServerStageGet(string $sServer, int $nPort): string {
            if $sServer =="" $sServer=fnServerNameGet();
            if $nPort   =="" $nPort  =fnServerPortGet();
            $sServer = fnServerNameNormalize($sServer);
            
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
    
    public  static  function    fnServerNameNormalize(string $s): string {
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
                    $this->fnErrorThrow('');
            }
            return $sOut;
    }
    
    public  static  function    fnStageCandidateGet(): string {
            return $sStageCandidateDi;
    }
    
    public static function fnServerStageIsDev(string $sServer, int $nPort): bool {
            $s = $this->fnServerStageGet($sServer, $nPort);
            if ($s = "dev")
            { $b = true}
            else
            { $b = false}
            return $b;
    }
    
    public  static  function    fnServerStageIsTest(string $sServer, bool $nPort): bool {
            $s = fnServerStageGet($sServer, $nPort);
            if ($s = "test")
            { $b = true}
            else
            { $b = false}
            return $b;
    }
    
    public  static  function    fnServerStageIsProd(string $sServer, int $nPort): bool {
            $s = fnServerStageGet($sServer, $nPort);
            if ($s = "prod")
            { $b = true}
            else
            { $b = false}
            return $b;
    }
    
    //////////////////////////////////////
    
    public  static  function    fnClientIpGet(): string {
            // return client's ip addr,e.g. 127.0.0.1
            return $_SERVER['REMOTE_ADDR'];
    }
    
    public  static  function    fnScriptFileNameFq(): string {
            // return fq of current script
            return $_SERVER['SCRIPT_FILENAME'];
    }
    
    public  static  function    fnScriptFileName() {
            //return current scriptfileName
            return $_SERVER['PHP_SELF'];
    }
}
?>
