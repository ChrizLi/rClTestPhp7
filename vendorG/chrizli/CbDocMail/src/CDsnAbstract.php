<?php
    class CDsnAbstract
    {
        private
                $sDsn;
                
        public  function __construct (string $sDsn)
        {
                $this->sDsn = $sDsn;
        }
        
        public  function fnGet(): string {
                return $this->sDsn;
        }
    }
?>
