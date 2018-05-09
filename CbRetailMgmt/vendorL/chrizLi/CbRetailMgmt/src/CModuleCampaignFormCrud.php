<?php
class       CModuleCampaignFormCrud
extends     CModuleAbstract
implements  ifModule {
    protected
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
            $this->oModel   = new CCampaignModel();
        }   else {
            $this->oModel   = $_oModel;
        }
        $this->fnInit();
    }
    
    public function fnInit() {}
    
    public function fnRun($_oRxArg): void {
        $oData = $this->oModel->fnGet($_oRxArg);
        $this->oOutput->fnHeadAppend  ($this->fnHeadGet    ($_oRxArg, $oData));
        $this->oOutput->fnRedirect    ($this->fnRedirectGet($_oRxArg, $oData));
        $this->oOutput->fnBodyAppend  ($this->fnBodyGet    ($_oRxArg, $oData));
    }
    
    private static function fnHeadAppend(): string {}
    private static function fnRedirect  (): string {}
    private static function fnBodyAppend(): string {
        return "?1=1&sProcess=sProcessCampaignDataCrud";
    }
    
}

?>
