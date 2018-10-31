<?php

Class   CDsn
extends CBase
{
        protected
                    $sDsn;
                    
        public      function    __constructor(string $_sDsn){
                    fnSet($_sDsn);
        }
        
        public      function    fnGet(): string {
                    return $this->sDsn;
        }
        
        public      function    fnSet(string $s_Dsn){
                    $this->sDsn = $_sDsn;
        }
}

?>
