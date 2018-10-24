<?php

class   CStageBaseRecord
extends ChrizLi/CRecord
{    
    public      function    __construct () {
    }

    private     function    fnDataInit(){
    }
    
    public      function    fnIdSet(numeric $_nIn){
                $this->aa['nId']            = $_nIn;
    }
    
    public      function    fnKeySet(string $_sIn){
                $this->aa['sKey']           = $_sIn;
    }
    
    public      function    fnLabelShortSet(string $_sIn){
                $this->aa['sLabelShort']    = $_sIn;
    }
    
    public      function    fnLabelLongSet(string $_sIn){
                $this->aa['sLabelLong']     = $_sIn;
    }
}
?>
