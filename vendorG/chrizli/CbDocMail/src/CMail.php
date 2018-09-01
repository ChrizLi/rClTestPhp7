<?php
    class CMail
    {
        private
                $sFrom,
                $sTo,
                $sCc,
                $sBcc,
                $sSubject,
                $sBody
                
        public  function __construct () {
        }
        
        public  function fnSet(array $aIn) {
                $this->sFrom= $aIn['sFrom'];
                $this->sTo      = $aIn['sTo'];
                $this->sCc      = $aIn['sCc'];
                $this->sBcc     = $aIn['sBcc'];
                $this->sSubject = $aIn['sSubject'];
                $this->sBody    = $aIn['sBody'];
        }
    }
?>
