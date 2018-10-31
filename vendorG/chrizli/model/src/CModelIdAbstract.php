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
            
            public      function    __constructor(CDsn $_oDsn = ''){
                        parent::__constructor($_oDsn);
                        $this->fnDirtySet();
    
    public  function    __constructor(CDsn $_oDsn = ''){
            super->__constructor($_oDsn);
            $this->fnDirtySet();
    }
    
    protected
            function    fnPersistentSel(){
    //      call sql to fetch all rows, no args for filtering here        
    }
    
    public  function    fnSel(){
            $this->fnDataInit();
            return      $this->qData;
    }
    
    public  function    fnRowByIdGet(int $_nId){
            $this->fnDataInit();
            if (fnIdValid($_nId)){
                return      $this->qData[$_nId];
            }
    }
    
    public  function    fnIdValid(
            int         $_nId,
            bool        $_bErrorThrow   = true
            ):  bool    {
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

?>