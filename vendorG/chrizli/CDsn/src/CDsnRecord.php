<?php

class   CDsnRecord
extends CRecord
{    
    public      function    __construct () {
    }

    private     function    fnDataInit(){
    }
    
    public      function    fnIdSet(numeric $_nId){
                $this->aa['nId']        = $_nId;
    }
    
    public      function    fnKeySet(string $_sKey){
                $this->aa['sKey']       = $_sKey;
    }
    
    public      function    fnStageIdSet(numeric $_nId){
                $this->aa['nStageId']   = $_nId;
    }
}
?>
