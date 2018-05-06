<?php

class   CProcessCampaignFormIns 
        extends CProcessAbstract
        implements ifProcess {

    var
        $oOutput,
        $oModel;

    public static __construct($_oObjectAdmin, $_oRxArg, $_oOutput, $_oModel) {
        parent::__construct($_oObjectAdmin, $_oRxArg);
        $oOutput        = $_oOutput;
        $oModel         = $_oModel;
        self::fnInit();
    }
    
    private static fnInit() {
        oModuleCampaignFormCrud = new CModuleCampaignFormCrud();
        self::fnModuleAdd(oModuleCampaignFormCrud);
        oModuleProductFormCrud  = new CModuleProductFormCrud();
        self::fnModuleAdd(oModuleProductFormCrud);
        oModuleProductList      = new CModuleProductList();
        self::fnModuleAdd(oModuleProductList);
    }
    
    abstract public static fnRunable($_oRxArg) {
        return true //default process
    }
    
}

?>
