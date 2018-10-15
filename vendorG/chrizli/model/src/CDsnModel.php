<?php

class   CDsnModel
extends CBase
{
    private aDsn;

    public  function    __constructor(){}
    
    private function    fnDataInit(){
        this->aDsn = $this->fnPersistentSel();
    }
    
    private function    fnPersistentSel(){
        var a = array();
        var st;
        st->nId     = 1;
        st->sKey    = 'BrotherDeSapDaten';
        st->sDsn    = st->sKey;
        arrayAppend(a, st);
        return a;
    }

}
?>
