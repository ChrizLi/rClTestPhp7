<?php

namespace   brotherDe\cashback;

class       CProcessCampaignFormCrud
extends     CProcessAbstract
implements  ifProcess 
{
    protected
        $oOutput,
        $oModel;

    public  function    __construct(
            $_oRxArg    =null, 
            $_oOutput   =null, 
            $_oModel    =null
    )       {
        if ($_oOutput        ==null) {
            $this->oOutput  = new COutput();
        }   else {
            $this->oOutput  = $_oOutput;
        }
        if ($_oModel         ==null) {
            $this->oModel   = new CCampaignModel();
        }   else {
            $this->oModel   = $_oModel;
        }
        $this->fnInit();
    }
    
    protected function  fnInit() {
            $oModuleCampaignFormCrud = 
                new CModuleCampaignFormCrud ($this->oObjectAdmin, $this->oRxArg, $this->oOutput, $this->oModel);
            $this->fnModuleAdd($oModuleCampaignFormCrud);
            $oModuleProductFormCrud  = 
                new CModuleProductFormCrud  ($this->oObjectAdmin, $this->oRxArg, $this->oOutput, $this->oModel);
            $this->fnModuleAdd($oModuleProductFormCrud);
            $oModuleProductList      = 
                new CModuleProductList      ($this->oObjectAdmin, $this->oRxArg, $this->oOutput, $this->oModel);
            $this->fnModuleAdd($oModuleProductList);
    }
    
    public  function    fnRunable($_oRxArg): bool {
            return true;
    }
    
    public  function    fnRun($_oRxArg): void {
        
    }
}

?>
