<?php

class   CDsnModel
extends CBase
{
    private     $aDsn,
                $oStageModel;

    public      function    __construct($_oStageModel){
        $this->oStageModel  = $this->setOStageModel($_oStageModel);
    }
    
    public      function    setOStageModel(
        $_oStageModel,
        $_ErrorThrow = true
    )   {
        if (isTypeOf($_oStageModel, CStageModel){
            $this->oStageModel = $_oStageModel;
        }   elseIf ($_ErrorThrow){
            throw('ArgNotValid');
        }
    }
    
    private     function    fnDataInit(){
        if  not isTypeOf($this->oStageModel, CStageModel){
            throw('ArgNotValid');
        }
        $this->aDsn = $this->fnPersistentSel();
    }
    
    private     function    fnPersistentSel(){
        var $aStageKeyKey   = $this->oStageModel-fnKeyKeyGet();
            $aStage         = $this->oStageModel->fnRowByKeyGet($aStageKeyKey->dev),
            $nStageId       = $aStage['nStageId'],
            $sStageKey      = $aStage['sKey'],
            $a              = array(),
            $st             = array(),
            $nRowCnt        = 0,
            $sDsnTypeName   = 'BrotherDeSapDaten'
        $st->nId            = ++$nRowCnt;
        $st->sKey           = $sDsnTypeName.'.'.$sStageKey;
        $st->sDsn           = $sDsnTypeName;
        $st->nStageId       = $sStageKey;
        array_push($a, $st);
        
        $aStage             = $this->oStageModel->fnRowByKeyGet($aStageKeyKey->test),
        $nStageId           = $aStage['nStageId'],
        $sStageKey          = $aStage['sKey'];
        $st->nId            = ++$nRowCnt;
        $st->sKey           = $sDsnTypeName.'.'.$sStageKey;
        $st->sDsn           = $sDsnTypeName;
        $st->nStageId       = $sStageKey;
        array_push($a, $st);
        
        $aStage             = $this->oStageModel->fnRowByKeyGet($aStageKeyKey->prod),
        $nStageId           = $aStage['nStageId'],
        $sStageKey          = $aStage['sKey'];
        $st->nId            = ++$nRowCnt;
        $st->sKey           = $sDsnTypeName.'.'.$sStageKey;
        $st->sDsn           = $sDsnTypeName;
        $st->nStageId       = $sStageKey;
        array_push($a, $st);

        return $a;
    }

}
?>
