<?php

namespace   brotherDe\cashback;

class       CModuleCampaignFormCrud
extends     CModuleAbstract
implements  ifModule 
{
    protected
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
    }
    
    public  function    fnRun($_oRxArg): void {
            $oData  = $this->oModel->fnGet($_oRxArg);
            $this   -> oOutput->fnHeadAppend  ($this->fnHeadGet    ($_oRxArg, $oData));
            $this   -> oOutput->fnRedirect    ($this->fnRedirectGet($_oRxArg, $oData));
            $this   -> oOutput->fnBodyAppend  ($this->fnBodyGet    ($_oRxArg, $oData));
    }
    
    private function    fnHeadAppend(): string {}
    private function    fnRedirect  (): string {}
    private function    fnBodyAppend(): string {
            return "?1=1&sProcess=sProcessCampaignDataCrud";
    }
    
}

?>
