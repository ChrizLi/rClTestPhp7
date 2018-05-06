<?php

class CModuleCampaignList implements ifModule {
    
    var $oOutput,
        $oModel,
        $oRxArg;
    
    public static __construct() {
        $oOutput = $_oOutput;
    }
    
    public static fnGet($_oRxArg) {
        var $oData = $oModel->fnGet($_oRxArg);
        $oOutput->fnHeadAppend  (self::fnHeadGet    ($_oRxArg, $oData));
        $oOutput->fnRedirect    (self::fnRedirectGet($_oRxArg, $oData));
        $oOutput->fnBodyAppend  (self::fnHtmlGet    ($_oRxArg, $oData));
    }
    
    private static fnHeadGet() {}
    
    private static fnRedirectGet() {}
    
    private static fnBodyGet() {
        return self::fnTableHeadGet($oData).self::fnTableBodyGet($oData).self::fnTableFootGet($oData);
    }
    
    private static fnTableHeadGet($oData) {
        return "<tr><th>Id</th><th>Name</th>";
    }
    private static fnTableBodyGet($oData) {
        var $s="";
        for(var n=0;n<$oData.length;n++) {
            $s .= "<tr><td>".$oData[n]["sId"]."</td><td>".$oData[n]["sName"]."</td></tr>";
        }
    }
    private static fnTableFootGet($oData) {}
}

?>
