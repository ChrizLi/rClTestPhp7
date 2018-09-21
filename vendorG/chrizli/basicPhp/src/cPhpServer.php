<?php

namespace   chrizli\basicPhp;

class       CPhpServer
extends     CRecordSet
{           
    public  function    __construct() {
            parent::__construct(array('sPhpServerId', 'sName', 'nPort'));
    }

/*
    public  function    fnServerNameGet():string {
            return $_SERVER['SERVER_NAME'];
    }
    
    public  function    fnServerPortGet():string {
            return $_Server['SERVER_PORT'];
    }
    
    public  function    fnServerNameNormalize(string $_s): string {
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
                    $this->fnErrorThrow();
            }
            return $sOut;
    }
*/    
    //////////////////////////////////////
    /*
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
    }*/
}

?>
