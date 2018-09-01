<?php

namespace   brotherDe\cashback;

class       CProcessCampaignDataCrud 
extends     CProcessAbstract
implements  ifProcess 
{
    protected
            $oOutput,
            $oModel;

    public function     __construct(
            $_oRxArg    =null,
            $_oOutput   =null,
            $_oModel    =null
    )       {
            if($_oOutput        ==null) {
                $this->oOutput  = new COutput();
            }   else {
                $this->oOutput  = $_oOutput;
            }
            if($_oModel         ==null) {
                $this->oModel   = new CCampaignModel();
            }   else {
                $this->oModel   = $_oModel;
            }
    }
    
    protected function  fnInit() {
            $oModuleCampaignDataCrud = new CModuleCampaignDataCrud($this->oObjectAdmin);
            $this->fnModuleAdd($oModuleCampaignDataCrud);
    }
    
    public  function    fnRunable($_oRxArg): bool {
        
    }
    
    public  function    fnRun($_oRxArg): void {
        
    }
    
}

?>
