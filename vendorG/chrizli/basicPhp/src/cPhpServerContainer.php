<?php

namespace   chrizli\basicPhp;

class       CPhpServer
extends     CContainerObject
{
    /*
    private
            $oObjectAdmin,
            $oStageBase,
            $aStageCandidate = fnStageCandidateInit();

    public  function    __construct(object $_oObjectAdmin, object $_oStageBase=null) {
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
            return $_SERVER['SERVER_PORT'];
    }
    
    public  static  function    fnServerStageGet(string $_sServer, int $_nPort): string {
            if $_sServer =="" $_sServer=fnServerNameGet();
            if $_nPort   =="" $_nPort  =fnServerPortGet();
            $_sServer = $this->fnServerNameNormalize($_sServer);
            
            if ($_sServer == "BigW10N61014") {
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
            if ($_sServer == "TestMyBeip") {
                $sOut = "test";
            }
            if ($_sServer == "MyBeip") {
                $sOut = "prod";
            }
            if ($_sServer == "BigINet") {
                $sOut = "prod";
            }   
            return $sOut;
    }
    
    public  static  function    fnServerNameNormalize(string $_s): string {
            switch($_s) {
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
    
    public static   function    fnServerStageIsDev(string $_sServer, int $_nPort): bool {
            $s = $this->fnServerStageGet($_sServer, $_nPort);
            if ($s = "dev")
            { $b = true}
            else
            { $b = false}
            return $b;
    }
    
    public  static  function    fnServerStageIsTest(string $_sServer, bool $_nPort): bool {
            $s = $this->fnServerStageGet($_sServer, $_nPort);
            if ($s = "test")
            { $b = true}
            else
            { $b = false}
            return $b;
    }
    
    public  static  function    fnServerStageIsProd(string $_sServer, int $_nPort): bool {
            $s = $this->fnServerStageGet($_sServer, $_nPort);
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
    */
}
?>
