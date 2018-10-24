<?php

class           CModelIdKeyAbstract
extends         CModelIdAbstract
{
    private 
                aKeyId, // used in classes to get Id by know key only
                aKeyKey;// used in classes instead of strings
    
    protected   function    fnDataInit(){
                if  $this->fnDirtyGet(){
                    parent::fnDataInit();
                    $this->fnKeyIdCreate();
                    $this->fnKeyKeyCreate();
                }
    }
    
    private     function    fnKeyIdCreate():array {
                var array   $aRow;
                forEach($this->qData as $aRow){
                    $this->aKeyId[$aRow->sKey] = $aRow->nId;
                }
    }
    
    private     function    fnKeyKeyCreate(){
                var array   $aRow;
                forEach($this->qData as $aRow){
                    $this->aKeyKey[$aRow->sKey] = $aRow->$sKey;
                }
    }
    
    public      function    fnKeyValid(
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
    
    private     function    fnIdKeyColAdd(
        array   $aIn,
        string  $sIdColName,
        string  $sKeyColName
    ):  array   {
        forEach(){
            $aOut->nId  = $aIn[$sIdColName]
            $aOut->sKey = $aIn[$sKeyColName]
        }
    }

    public      function    fnKeyIdArrayGet(){
                return      $this->stKeyId;
    }
    
    public      function    fnKeyKeyArrayGet(){
                return      $this->stKeyKey;
    }
    
    public      function    fnIdByKeyGet(string $_sKey):int{
                return      $this->aKeyId[$_sKey];
    }        
}

?>