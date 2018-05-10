<?php
class       CModuleProductFormCrud
extends     CModuleAbstract
implements  ifModule {
    protected
        $oObjectAdmin,
        $oRxArg,
        $oOutput,
        $oModel;
    
    public function __construct(
        $_oObjectAdmin, 
        $_oRxArg        =null, 
        $_oOutput       =null, 
        $_oModel        =null
    ) {
        parent::__construct($_oObjectAdmin, $_oRxArg);
        if ($_oOutput        ==null) {
            $this->oOutput  = new COutput();
        }   else {
            $this->oOutput  = $_oOutput;
        }
        if ($_oModel         ==null) {
            $this->oModel   = new CProductModel();
        }   else {
            $this->oModel   = $_oModel;
        }
        $this->fnInit();
    }
    
    protected function fnInit() {}
    
    public function fnRun($_oRxArg): void {
        $oData = $this->oModel->fnGet($_oRxArg);
        $oOutput->fnHeadAppend  ($this->fnHeadGet    ($_oRxArg, $oData));
        $oOutput->fnRedirect    ($this->fnRedirectGet($_oRxArg, $oData));
        $oOutput->fnBodyAppend  ($this->fnHtmlGet    ($_oRxArg, $oData));
    }
    
    private function fnHeadAppend (): void {}
    private function fnRedirect   (): void {}
    private function fnBodyAppend (): void {
        //return "?1=1&sProcess=sProcessProductDataCrud";
    }
    
}

?>
