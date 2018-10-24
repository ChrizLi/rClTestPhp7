<?php

class   CStageSetModel
extends ChrizLi/CIdKeyModel
{
    private
                $aData;
                
    public      function    __construct(){}
    
    private     function    fnPersistentSel(){
        var     $oStageSet  = new ChrizLi/CStageSetRecord;
                $aRecord->fnIdSet(1);
                $aRecord->fnNameSet(lower('default'));
                arrayPush($aData, $aRecord);
                return $aData;
    }

}

?>
