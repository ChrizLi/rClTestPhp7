<?php

namespace   brotherDe\cashback;

abstract    
class       CProcessAbstract
extends     CModuleAbstract
implements  ifProcess 
{
    private
            $oModule,
            $oOutput,
            $oModuleDefault;
    
    public  function    __construct($_oOutput, $_oRxArg=null) {
            $this->oOutput=$_oOutput;
            parent::__construct($_oRxArg);
    }
    
    private function    fnInit(): void {};
    
    public  function    fnRunable(): bool {
            return true;
    }
    
    public  function    fnRun(): void {
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
    
    public function     fnModuleAdd(ifModule $_oModule, $_bDefault=false) {
            if($_bDefault) {
                $this->oModuleDefault = $_oModule;
            }   else {
                array_push($this->aModule, $_oModule);
            }
    }
}

?>
