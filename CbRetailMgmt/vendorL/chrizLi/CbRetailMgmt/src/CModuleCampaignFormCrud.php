<?php

class CModuleCampaignFormIns implements ifModule {
    
    var $oObjectAdmin,
        $oRxArg,
        $oOutput,
        $oModel;
    
    public static __construct() {}

    public static fnInit() {}
    
    public static fnGet($_oRxArg) {
        var $oData = $oModel->fnGet($_oRxArg);
        $oOutput->fnHeadAppend  (self::fnHeadGet    ($_oRxArg, $oData));
        $oOutput->fnRedirect    (self::fnRedirectGet($_oRxArg, $oData));
        $oOutput->fnBodyAppend  (self::fnHtmlGet    ($_oRxArg, $oData));
    }
    
    private static fnHeadAppend() {}
    private static fnRedirect() {}
    private static fnBodyAppend() {
        return "?1=1&sProcess=sProcessCampaignDataCrud";
    }
    
}

?>
