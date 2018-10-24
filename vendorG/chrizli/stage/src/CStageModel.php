<?php

class   CStageModel
extends ChrizLi/CIdKeyModel
{
    private
                $aData,
                $oStageRecord,
                $oStageBaseModel;
                
    public      function    __construct (
                CStageRecord        $_oStageRecord,
                CStageBaseModel     $_oStageBaseModel
            )   {
                $this->setOStageRecord(     $_oStageRecord);
                $this->setOStageBaseModel(  $_oStageBaseRecord);
    }
    
    public      function    setOStageRecord(
                $_oStageRecord
            )   {
                if (isTypeOf($_oStageRecord, CStageRecord){
                    $this->oStageRecord     = $_oStageRecord;
                }   else    {
                    $this->oStageRecord     = new CStageRecord;
                }
    }
        
    public      function    setOStageBaseModel(
                $_oStageBaseModel
            )   {
                if (isTypeOf($_oStageBaseModel, CStageBaseModel){
                    $this->oStageBaseModel  = $_oStageBaseModel;
                }   else    {
                    $this->oStageBaseModel  = new CStageBaseModel;
                }
    }

    private     function    fnDataInit(){
                if ($this->oStageRecord is null){
                    $this->setOStageRecord();
                }
                if ($this->oStageBaseModel is null){
                    $this->setOStageBaseModel();
                }
    }
    
    private     function    fnPersistentSel(){
                $this->fnDataInit();
        var     $aRecord    = new CStageRecord,
                $aIdByKey   = $this->OStageBaseModel.fnKeyKeyGet(),
                $nId;
        $nId    = $this->OStageBaseModel.fnIdByKeyGet($aIdByKey->dev);
        $aRecord->fnIdSet($nId);
        $aRecord->fnKeySet('dev');
        $aRecord->fnLabelShortSet('Dev');
        $aRecord->fnLabelLongSet('Development');
        $aRecord->fnCodeStageBaseId($nId);
        arrayPush($this->aData, $aRecord);
        
        $nId    = $this->OStageBaseModel.fnIdByKeyGet($aIdByKey->test);
        $aRecord->fnIdSet(2);
        $aRecord->fnKeySet('test');
        $aRecord->fnLabelShortSet('Test');
        $aRecord->fnLabelLongSet('Test');
        $aRecord->fnCodeStageBaseId($nId);
        arrayPush($this->aData, $aRecord);
        
        $nId    = $this->OStageBaseModel.fnIdByKeyGet($aIdByKey->prod);
        $aRecord->fnIdSet(3);
        $aRecord->fnKeySet('prod');
        $aRecord->fnLabelShortSet('Prod');
        $aRecord->fnLabelLongSet('Production');
        $aRecord->fnCodeStageBaseId($nId);
        arrayPush($this->aData, $aRecord);
    }
}
?>
