<?php

namespace chrizli/health;

class CSexModel
extends CModelId
{
    private
            CDsn        oDsn;

    public  function     __construct (CDsn _oDsn) {
            oDsn    =   _oDsn;
    }
    
    private function    fnPersistentSel(){
    }
    
    public  function    fnIns(
            string      sLabel
    ):numeric {
            var         nSexId;
            return      nSexId;
    }
    
    public  function    fnUpd(
            numeric     nSexId,
            string      sLabel
    ){
    }
    
    public  function    fnDel(numeric nSexId){
    }
}
?>
