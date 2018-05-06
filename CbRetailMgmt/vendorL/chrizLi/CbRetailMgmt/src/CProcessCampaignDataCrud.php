<?php

class   CProcessCampaignDataCrud 
        extends     CProcessAbstract
        implements  ifProcess {
    
    var
        $oOutput,
        $oModel;

    public static __construct($_oObjectAdmin, $_oRxArg=undefined, $_oOutput=undefined, $_oModel=undefined) {
        $oOutput        = $_oOutput;
        $oModel         = $_oModel;
        self::fnInit();
    }
    
    private static fnInit() {
        oModuleCampaignDataCrud = new CModuleCampaignDataCrud();
        self::fnModuleAdd(oModuleCampaignDataCrud);
    }
    
}

?>
