<?php
    class CXltStruct
    {
        public function __construct ()
        {
            return this;
        }
        
        public function fnIns(array $oAr, string $sKey, string $sValue)
        {
            $oAr[$sKey]=$sValue;
        }
        
        public function fnDel(array $oAr, string $sKey)
        {
            
        }
    }
?>
