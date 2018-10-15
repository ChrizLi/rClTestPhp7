<?php

class       CModelIdAbstract
extends     CModelAbstract
{
    private 
            bDirty,
            qData,
            aId,    // fnIdValid()
            aKeyId, // used in classes to get Id by know key only
            aKeyKey;// used in classes instead of strings
    
    public  function    __constructor(CDsn $_oDsn = ''){
            super->__constructor($_oDsn);
            $this->fnDirtySet();
    }
    
    protected
            function    fnPersistentSel(){}
    
    public  function    fnSel(){
            $this->fnDataInit();
            return      $this->qData;
    }
    
    public  function    fnRowByIdGet(int $_nId){
            $this->fnDataInit();
            return      $this->qData[$_nId];
    }
    
    public  function    fnIdValid(
            int         $_nId, 
            bool        $_bErrorThrow   = true):bool {
            $this->fnDataInit();
            if (inArray($_nId, $this->aId)){
                return  true;
            }   else    {
                if ($_bErrorThrow){
                    $this->fnErrorThrow('ArgNotValid');
                }   else    {
                    return  false;
                }
            }
    }

    private function    fnDataInit(){
            if  $this->fnDirtyGet(){
                $this->qData = fnPersistentSel();
                $this->fnIdArrayCreate();
                $this->fnKeyIdCreate();
                $this->fnKeyKeyCreate();
            }
    }
    
    private function    fnPersistentSel(){
            return      $this->qData;
    }
    
    private function    fnIdArrayCreate(){
        var array       $aRow;
        forEach($this->qData as $aRow){
            arrayPush($this->aId, $aRow->nId);
        }
    }

    private function    fnKeyIdCreate():array {
        var array       $aRow;
        forEach($this->qData as $aRow){
            $this->aKeyId[$aRow->sKey] = $aRow->nId;
        }
    }
    
    private function    fnKeyKeyCreate(){
        var array       $aRow;
        forEach($this->qData as $aRow){
            $this->aKeyKey[$aRow->sKey] = $aRow->$sKey;
        }
    }
    
    public  function    fnKeyValid(
            string      $_sKey, 
            boolean     $_bErrorThrow   = true):bool {
            $this->fnDataInit();
            if (array_search($this->aKeyKey), $sKey){
                return      true;
            }   else {
                if ($_bErrorThrow){
                    $this->fnErrorThrow('ArgNotValid');
                }   else {
                    return  false;
                }
            }
    }

    public  function    fnKeyIdArrayGet(){
            return      this->stKeyId;
    }
    
    public  function    fnKeyKeyArrayGet(){
            return      this->stKeyKey;
    }
    
    public  function    fnIdByKeyGet(string $_sKey):int{
            return      $this->aKeyId[$_sKey];
    }
    
    public  function    fnIdValid(
            int         $_nId, 
            bool        $_bErrorThrow = true):bool{
            $this->fnDataInit();
            if (array_search($this->aId), $_nId){
                return  true;
            }   else    {
                if($_bErrorThrow){
                    $this->fnErrorThrow('ArgNotValid');
                }   else    {
                    return  false;
                }
            }
    }
    
    private function    fnDirtySet(){
            $this->bDirty = true;
    }
    
    private function    fnDirtyReset(){
            $this->bDirty = false;
    }

    private function    fnDirtyGet(){
            $return     $this->bDirty;
    }
}

?>