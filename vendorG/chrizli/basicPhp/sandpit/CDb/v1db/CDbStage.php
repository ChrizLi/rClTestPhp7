<?php

require_once('CDb');

    class CDbStage
    {
        $oDb        = "";
        $ar         = "";
        $sStageId   = "";
    
        public function __construct ($_oDb='')
        {
            fnDbSet($_oDb);
            return this;
        }
        
        public function fnDbSet($_oDb='', bool $bErrorThrow=true)
        {
            if(is_a($_oDb, 'CDbCurrent'))
            {
                $oDb    = $_oDb;
                $ar     = fnInit();
            }
            else
            {
                if ($bErrorThrow) fnErrorThrow('Arg');
            }
        }
        
        public function fnStageValid(string $_sStageId): bool
        {
            if($oDb=='') fnErrorThrow('arg');
            $bOut = false;
            forEach($ar as $sItem)
            {
                if($sItem=='$_sStageId')
                    $bOut = true;
            }
            return $bOut;
        }
        
        public function fnStageSet(string $_sStageId)
        {
            if($oDb='') fnErrorThrow('arg');
            if(fnStageValid($_sStageId))
                $sStageId=$_sStageId;
        }
        
        public function fnStageGet(): string
        {return $sStageId;}
        
        private function fnInit()
        {
            // return list of all existing stages for given db
            $arStage= array();
            $ar     = CDb::fnSel();
            forEach($ar as $arItem)
            {
                if($arItem['sDbName']==$oDb=>fnGet())
                    array_push($arStage, $arItem['sStageId']);
            }
            return array_unique($arStage);   
        }
    }
?>
