<?php
class       CProcessCampaignList
extends     CProcessAbstract
implements  ifProcess {
    protected
        $oOutput        = null,
        $oModel         = null;

    public function __construct(
        $_oObjectAdmin, 
        $_oRxArg        = null, 
        $_oOutput       = null, 
        $_oModel        = null
    ) {
        parent::__construct($_oObjectAdmin, $_oRxArg);
        if($_oOutput    ==null) {
            $oOutput    = new COutput();
        }   else {
            $oOutput    = $_oOutput;
        }
        if($_oModel     ==null) {
            $oModel     = new CCampaignModel();
        }   else {
            $oModel     = $_oModel;
        }
        $this->fnInit();
    }
    
    protected function fnInit() {
        $oModuleCampaignList = new CModuleCampaignList($this->oObjectAdmin, $this->oOutput);
        $this->fnModuleAdd($oModuleCampaignList);
    }
    
    public function fnRunable($_oRxArg): bool{
        
    }
}

?>
