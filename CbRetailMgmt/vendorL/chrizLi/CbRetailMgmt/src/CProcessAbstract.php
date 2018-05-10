<?php

abstract    class       CProcessAbstract 
            implements  ifProcess {
    protected
        $oObjectAdmin,
        $oRxArg;
    protected
        $aModule        = array(),
        $oModuleDefault;
    
    public function __construct(
        $_oObjectAdmin, 
        $_oRxArg        =null
    ) {
        $oObjectAdmin = $_oObjectAdmin;
        if($_oRxArg) {
            $this->oRxArg = $_oRxArg;
        }   else {
            $this->oRxArg = new CRxArg;
        }
        $this->fnInit();
    }
    
    abstract protected function fnInit();
    
    abstract public function fnRunable($_oRxArg): bool;
    
    public function fnRun($_oRxArg): void {
        //private
            //$oModule    = null,
            $bRan       = false;
        
        forEach($oModule as $this->aModule) {
            if ($oModule->$this->fnRunable($_oRxArg)) {
                $oModule->fnRun($_oRxArg);
                $bRan = true;
            }
        }
        if(!$bRan) {
            $this->oModuleDefault->fnRun($_oRxArg);
        }
    }
    
    public function fnModuleAdd(ifModule $_oModule, $_bDefault=false) {
        if($_bDefault) {
            $this->oModuleDefault = $_oModule;
        }   else {
            array_push($this->aModule, $_oModule);
        }
    }
}

?>
