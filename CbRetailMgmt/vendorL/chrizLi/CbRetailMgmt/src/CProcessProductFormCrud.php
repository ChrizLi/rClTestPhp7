<?php
class       CProcessProductFormCrud
extends     CProcessAbstract 
implements  ifProcess {
    protected
            $oOutput,
            $oModel;

    public  function    __construct(
            $_oRxArg, 
            $_oModel, 
            ifOutput $_oOutput
            ) {
            $oModel         = $_oModel;
            $oOutput        = $_oOutput;
            $this->fnInit();
    }
    
    private function    fnInit() {
            $oModuleProductFormCrud = new CModuleProductFormCrud();
            $this->fnModuleAdd($oModuleProductFormCrud);
    }
    
    public  function    fnRunable($_oRxArg): bool {
            if($_oRxArg->aaUrl->sProcess=="ProcessProductFormCrud") {
                return true;
            }   else {
                return false;
            }
    }
    
    public  function    fnRun($_oRxArg): void {
            if(! $this->fnRunable($_oRxArg) {
                $this->fnErrorThrow();
            }   else {
                //run actions
            }
    }
}

?>
