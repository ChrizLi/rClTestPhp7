<?php

class   CDsn
extends CBase
{
    protected
                $sDsn;
                    
    public      function    __construct(string $_sDsn){
                fnSet($_sDsn);
        }
        
    public      function    fnDsnGet(): string {
                return $this->sDsn;
        }
        
    public      function    fnDsnSet(string $s_Dsn){
                $this->sDsn = $_sDsn;
        }
}

?>
