<?php

namespace   brotherDe\cashback;

class       CModuleProductList 
extends     CModuleAbstract
implements  ifModule 
{
    protected
            $oModel;
    
    public  function     __construct(
            $_oRxArg    =null, 
            $_oOutput   =null, 
            $_oModel    =null
    ) {
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
    }

    protected function  fnInit() {}
    
    public  function    fnRun($_oRxArg): void {
            $oData = $this->oModel->fnGet($_oRxArg);
            $this->oOutput->fnHeadAppend  ($this->fnHeadGet    ($_oRxArg, $oData));
            $this->oOutput->fnRedirect    ($this->fnRedirectGet($_oRxArg, $oData));
            $this->oOutput->fnBodyAppend  ($this->fnHtmlGet    ($_oRxArg, $oData));
    }
    
    private function    fnHeadAppend(): void {
    
    }
    private function    fnRedirect  () {}
    private function    fnBodyAppend(): string {
            return "?1=1&sProcess=sProcessCampaignDataCrud";
    }
    
}

?>
