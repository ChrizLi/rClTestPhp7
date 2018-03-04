<?php

require_once('CDb');

    class CDbCurrent
    {
        $sDb="";
    
        public function __construct (string $_sDb="")
        {
            if(CDb:fnValid($_sDb)
            {$sDb = $_sDb;}
            else
            {fnErrorThrow('ArgumentNotValidException');}
            return this;
        }
        
        public function fnSet(string: $_sDb, bool: $bErrorThrow=true)
        {
            if(CDb::fnValid($_sDb))
            {
                $sDb = $_sDb;
            }
            else
            {
                if($bErrorThrow) fnErrorThrow('ArgumentNotValidException');
            }
        }
        
        public function fnGet(bool: $bErrorThrow): string 
        {
            if($sDb=='')
            {fnErrorThrow('ArgumentNotValidException');}
            return $sDb;
        }
    }
?>
