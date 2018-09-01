<?php
    class CModelAbstract
    {
        private
                $oDsn;
                
        public  function __construct($oDsn)     {
                $this->oDsn = $oDsn;
                $this->sDsn = $this->oDsn.fnGet();
        }
        public  function fnIns(array $a):       int {}
        public  function fnSel():               array {}
        public  function fnDel(int $nRowId):    bool {}
        
    }
?>
