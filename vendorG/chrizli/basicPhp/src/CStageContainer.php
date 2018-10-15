<?php

class       CStageContainer
extends     CBase       {
    private 
            CStageBase  $oStageBase, 
            CStage[]    $aStage,
            string[]    $aStageId;

    public  function    __construct(
            object      $_oObjectAdmin,
            any         $_oStageBase    = null,
            bool        $_bDefault      = true
            ):  void    {
            if ($_oObjectAdmin  == null {
                $oObjectAdmin   = new CObjectAdmin();
            }   else    {
                $oObjectAdmin   = $_oObjectAdmin;
            }
            if ($_oStageBase    == null) {
                $oStageBase     = new CStageBase();
            }   else    {
                $oStageBase     = $_oStageBase;
            }
            $this->fnInit($_bDefault);
    }
    
    private function    fnInit(bool $_bDefault = true): void {
            if ($_bDefault) {
                $this->fnDefaultSet();
            }
    }
    
    private function    fnDefaultSet() {
            forEach($this->oStageBase->fnGet() as $_oStageBase) {
                $a = new CStage(
                    array(  $_oStageBase->fnStageIdGet(),
                            $_oStageBase->fnStageBaseIdGet())
                    );
                array_push($this->aStage, $a);
            }
            $this->fnStageIdReorg();
    }
    
    public  function    fnStageIdReorg() {
            $this-aStageId  = array_column($this-aStage, 'sStageId');
    }
    
    public  function    fnIns(CStage $_oStage): void {
            array_push($this->aStage, $_oStage);
            $this->aStage = array_unique($this->aStage);
            $this->fnStageIdReorg();
    }
    
    public  function    fnDel(string $_sId): void {
            unset($this->aStage[$_sId];
    }
    
    public  function    fnIdValid(string $_sId): bool {
            return (array_key_search($this->aStageId, $_sId)==false)? false: true;
    }
    
    public  function    fnGet(string $_sId=null): array {
            if ($_sId == null) {
                return $this->aStage;
            }   else    {
                if ($this->fnIdValid(string $_sId)) {
                    return $this->aStage[$_sId];
                }   else    {
                    $this-fnErrorThrow('ArgNotValid','ArgNotValid');
                }
            }
    }

}
?>
