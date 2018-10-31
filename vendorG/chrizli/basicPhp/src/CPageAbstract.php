<?php

abstract    class   CPageAbstract
{
    protected
            object  $oObjectAdmin,
            object  $oRxArg;
    protected
            $aProcess           = array(),
            $oProcessDefault;

    public  function    __construct(
            object $_oObjectAdmin, 
            object $_oRxArg=null
    ): void { 
            $this->oObjectAdmin = $_oObjectAdmin;
            if (!$_oRxArg) {
                $this->oRxArg   = $_oRxArg;
            }   else {
                $this->oRxArg   = new CRxArg;
            }
            $this->fnInit();
    }
    
    abstract protected  function fnInit();
        
    public  function    fnRun() {
            $bRan=false;
            forEach($this->aProcess as $oProcess) {
                if ($oProcess->fnRunable($this->oRxArg)) {
                    $oProcess->fnRun($this->oRxArg);
                    $bRan = true;
                }
            }
            if(!$bRan) {
                $this->oProcessDefault->fnRun($this->oRxArg);
            }
    }
    
    protected   function fnProcessAdd($_oProcess, $_bDefault=false): void {
            if ($_bDefault) {
                $this->oProcessDefault = $_oProcess;
            }   else {
                array_push($this->aProcess, $_oProcess);
            }
    }
}

?>
