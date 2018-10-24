<?php

class   CStageBaseModel
extends ChrizLi/CIdKeyModel
{
    private
                $aData;
    public      function    __construct () {
    }
            
    public      function    fnGet(){
                $this->fnDataInit();
                return  $this->aData;
    }

    private     function    fnDataInit(){
                if(array_len($aData) === 0){
                    $this->aData = fnPersistentSel();
                }
    }
        
    private     function    fnPersistentSel(){
                var     $aData,
                        $aRecord    = new CStageBaseRecord;
                $aRecord->fnIdSet(1);
                $aRecord->fnKeySet(lower('dev'));
                $aRecord->fnLabelShortSet('Dev');
                $aRecord->fnLabelLongSet('Development');
                arrayPush($aData, $aRecord);
                
                $aRecord    = new CStageBaseRecord;
                $aRecord->fnIdSet(2);
                $aRecord->fnKeySet(lower('test'));
                $aRecord->fnLabelShortSet('Test');
                $aRecord->fnLabelLongSet('Test');
                arrayPush($aData, $aRecord);
                
                $aRecord    = new CStageBaseRecord;
                $aRecord->fnIdSet(3);
                $aRecord->fnKeySet(lower('prod'));
                $aRecord->fnLabelShortSet('Prod');
                $aRecord->fnLabelLongSet('Production');
                arrayPush($aData, $aRecord);
                return $aData;
    }
}
?>
