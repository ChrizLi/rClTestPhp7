<?php

Class   CDsn
extends CBase
{
        protected
                    $sDsn;
                    
        function    __constructor(string $_sDsn){
                fnSet($_sDsn);
        }
        
        function    fnGet(): string {
                return $this->sDsn;
        }
        
        function    fnSet(string $s_Dsn){
                $this->sDsn = $_sDsn;
        }
}

?>
