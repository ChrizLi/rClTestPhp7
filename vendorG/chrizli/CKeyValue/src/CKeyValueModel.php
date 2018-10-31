<?php
    
class           CKeyValue
extends         CIdKeyModel
{
    private
                $aData;
    protected
                $oDsn;

    public      function    __construct ($_oDsn) {
        
    }
    
    public      function    setODsn($_oDsn){
        if (isTypeOf($_oDsn, IDsnProvider),
    }
    
    private     function    fnDataInit(){
        if (array_len($aData) ===0){
            $this->aData    = $this->fnPersistentSel()
        }
    }
    
    private     function    fnPersistentSel(){
        
    }
    
    public
    
}
?>
