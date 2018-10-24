<?php

Class   CModelTestIdKey 
extends CModelIdKeyAbstract
{

    private     function    fnPersistentSel(): array{
        var     array aData;
        return  $this->fnIdKeyColAdd(aData, "nRowId", "sRowKey");
    }
    
    

}
?>
