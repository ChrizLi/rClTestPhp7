<?php

namespace   chrizli\basicPhp;

class       CStageBaseContainer
extends     CContainerObject
{           
    public  function    __construct() {
            parent::__construct(false);
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->fnDataInit();
    }
    
    private function    fnDataInit(): void {
            $oStageBase = new CStageBase();
            $oStageBase ->fnSet(array('sStageBaseId'=>'dev', 'sNameShort'=>'Dev'));
            $this->fnAdd($oStageBase);
            $oStageBase = new CStageBase();
            $oStageBase ->fnSet(array('sStageBaseId'=>'test', 'sNameShort'=>'Test'));
            $this->fnAdd($oStageBase);
            $oStageBase = new CStageBase();
            $oStageBase ->fnSet(array('sStageBaseId'=>'prod', 'sNameShort'=>'Prod'));
            $this->fnAdd($oStageBase);
    }
}

?>
