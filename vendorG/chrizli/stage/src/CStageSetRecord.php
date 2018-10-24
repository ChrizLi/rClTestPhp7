<?php

class   CStageSetRecord
extends ChrizLi/CRecord
{
    private     $aa;

    public      function    fnIdSet(numeric $_nIn){
                $this->aa['nId']            = $_nIn;
    }
    
    public      function    fnNameSet(string $_sIn){
                $this->aa['sName'           = $_sIn;
    }
}

?>
