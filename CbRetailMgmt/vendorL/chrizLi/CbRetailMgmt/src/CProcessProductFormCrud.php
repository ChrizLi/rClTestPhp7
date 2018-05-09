<?php
class       CProcessProductFormCrud
extends     CProcessAbstract 
implements  ifProcess {
    protected
        $oOutput,
        $oModel;

    public function __construct($_oObjectAdmin, $_oRxArg, $_oModel, ifOutput $_oOutput) {
        parent::__constrcut($_oObjectAdmin, $_oRxArg);
        $oModel         = $_oModel;
        $oOutput        = $_oOutput;
        $this->fnInit();
    }
    
    private function fnInit() {
        $oModuleProductFormCrud = new CModuleProductFormCrud();
        $this->fnModuleAdd($oModuleProductFormCrud);
    }
    
    public function fnRunable($_oRxArg): bool {
        if($_oRxArg->aaUrl->sProcess=="ProcessProductFormCrud") {
            return true;
        } else {
            return false;
        }
    }
    
    public static function fnRun($_oRxArg): void {
        if($this->fnRunable($_oRxArg) {
            
        } else {
            throw new Error("noRun");
        }
    }
}

?>
