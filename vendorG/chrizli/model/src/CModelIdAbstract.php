<?php

class       CModelIdAbstract
extends     CModelAbstract
{
            private 
                        bDirty,
                        qData,
                        aId;    // fnIdValid()
            
            public      function    __constructor(CDsn $_oDsn = ''){
                        parent::__constructor($_oDsn);
                        $this->fnDirtySet();
            }
            
            protected   function    fnPersistentSel(){}
            
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
            
            public      function    fnSel(){
                        $this->fnDataInit();
                        return      $this->qData;
            }
            
            public      function    fnRowByIdGet(int $_nId){
                        $this->fnDataInit();
                        return      $this->qData[$_nId];
            }
            
            public      function    fnIdValid(
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

            private     function    fnDataInit(){
                        if ($this->fnDirtyGet()){
                            $this->qData = fnPersistentSel();
                            $this->fnIdArrayCreate();
                        }
            }
            
            private     function    fnPersistentSel(){
                        return      $this->qData;
            }
            
            private     function    fnIdArrayCreate(){
                        var array       $aRow;
                        forEach($this->qData as $aRow){
                            arrayPush($this->aId, $aRow->nId);
                        }
            }
        
            public      function    fnIdValid(
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
        
            private     function    fnDirtySet(){
                        $this->bDirty = true;
            }
            
            private     function    fnDirtyReset(){
                        $this->bDirty = false;
            }
        
            public      function    fnDirtyGet(){
                        $return     $this->bDirty;
            }
}

?>