<?php

class   CProcessCampaignList
        extends     CProcessAbstract {

    var 
        $oModel,
        $oOutput;

    public static __construct($_oObjectAdmin, $_oRxArg, $_oModel, ifOutput $_oOutput) {
        parent::__constrcut($_oObjectAdmin, $_oRxArg);
        $oModel         = $_oModel;
        $oOutput        = $_oOutput;
        self::fnInit();
    }
    
    private static fnInit() {
        oModuleCampaignList = new CModuleCampaignList();
        self:fnModuleAdd(oModuleCampaignList);
    }
}

?>
