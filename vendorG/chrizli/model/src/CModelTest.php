<?php

class CModel
{
    private     aDsn;
    
    function    __constructor(CDsn oDsn){}
    
    function    fnSel():array{}
    
    function    fnIns():int{}
}

class CModelCache
{
    private     bDirty;
    
    function    fnSel():array{
        if (this->bDirty){
            this->aDsn = super->fnSel();
        }
        fnDirtyReset();
        return this->aDsn;
    }
    
    function    fnIns():int{
        var nId = super->fnIns();
        fnDirtySet();
        return nId;
    }
}

class CModelCache02
{
    private     bDirty,
                bCache;
    
    function    fnSel():array{
        if (bCache) {
            if (this->bDirty) {
                this->aDsn = super->fnSel();
            }
            fnDirtyReset();
        }   else {
            this->aDsn = super->fnSel();
        }
        return this->aDsn;
    }
    
    function    fnIns():int{
        var nId = super->fnIns();
        fnDirtySet();
        return nId;
    }
}

?>
