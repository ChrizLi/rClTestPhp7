<?php
class       CPage 
extends     CPageAbstract {
    protected
        $oOutput    = null,
        $oModel     = null;
    
    public function __construct(
        $_oObjectAdmin, 
        $_oRxArg        = null,
        $_oOutput       = null,
        $_oModel        = null
    ) {
        parent::__construct(
            $_oObjectAdmin, 
            $_oRxArg        = null
        );
        if (!$_oOutput) {
            $this->oOutput = $_oOutput;
        }   else {
            $this->oOutput = new COutput;
        }
        if (!$_oModel) {
            $this->oModel = $_oModel;
        }   else {
            $this->oModel = new CCampaignModel;
        }
    }
    
    protected function fnInit() {
        //$oProcessCampaignList        = new CProcessCampaignList($this->oObjectAdmin, $this->oRxArg, $this->oOutput, $this->oModel);
        //$oProcessCampaignFormCrud    = new CProcessCampaignFormCrud($this->oObjectAdmin, $this->oRxArg, $this->oOutput, $this->oModel);
        //$oProcessCampaignDataCrud    = new CProcessCampaignDataCrud($this->oObjectAdmin, $this->oRxArg, $this->oOutput, $this->oModel);
        $oProcessCampaignList        = new CProcessCampaignList     ($this->oObjectAdmin);
        $oProcessCampaignFormCrud    = new CProcessCampaignFormCrud ($this->oObjectAdmin);
        $oProcessCampaignDataCrud    = new CProcessCampaignDataCrud ($this->oObjectAdmin);
        $oProcessProductDataCrud     = new CProcessProductDataCrud  ($this->oObjectAdmin);
        $this->fnProcessAdd($oProcessCampaignList);
        $this->fnProcessAdd($oProcessCampaignFormCrud);
        $this->fnProcessAdd($oProcessCampaignDataCrud);
        $this->fnProcessAdd($oProcessProductDataCrud);
    }
}

?>
