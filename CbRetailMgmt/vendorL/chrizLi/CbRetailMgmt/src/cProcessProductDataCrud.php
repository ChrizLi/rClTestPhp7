<?php

namespace   brotherDe\cashback;

class       CProcessProductDataCrud 
extends     CProcessAbstract
implements  ifProcess {
    protected
            $oOutput,
            $oModel;

    public function __construct(
            $_oRxArg        =null,
            $_oOutput       =null,
            $_oModel        =null
            ) {
            if($_oOutput        ==null) {
                $this->oOutput  = new COutput();
            }   else {
                $this->oOutput  = $_oOutput;
            }
            if($_oModel         ==null) {
                $this->oModel   = new CProductModel();
            }   else {
                $this->oModel   = $_oModel;
            }
            $this->fnInit();
    }
    
    protected function  fnInit() {
            $oModuleProductDataCrud = new CModuleProductDataCrud($this->oObjectAdmin);
            $this->fnModuleAdd($oModuleProductDataCrud);
    }
    
    public  function     fnRunable($_oRxArg): bool {
            return true;
    }
    
    public  function     fnRun($_oRxArg): void {
            if($this->fnRunable()    
    }    
}

?>
