<?php
    class CCbDocMailContainer
    {
        public  function __construct ()
        {
                return this;
        }
        
        private function fnInit(): void {
                $this->oDsn=new CDsnBrotherDeSapDaten();
        }
        
        public  function fnMailSessionCreate(int $nPayoutSessionId): void {
                $this->nMailSessionId = $this->oMailSessionModel->fnIns($this->oDsn, $nPayoutSessionId);
        }
        
        public  function fnFileTypeToSessionIns(int $nFileTypeId): void {
                $this->oFileTypeToSessionModel->fnIns($this->oDsn, $this->nMailSessionId, $nFileTypeId);
        }
        
        
    }
?>
