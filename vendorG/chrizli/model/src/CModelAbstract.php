<?php

class   CModel
extends CBase
{
    protected
            CDsn    $oDsn;
            
    public  function    __constructor(CDsn $_oDsn){
            $this->oDsn = $_oDsn;
    }
    
    public  function    setODsn(CDsn $_oDsn){
            $this->oDsn = $_oDsn;
    }
    
    public  function    getODsn(): string{
            return      $this->oDsn;
    }
}

?>
