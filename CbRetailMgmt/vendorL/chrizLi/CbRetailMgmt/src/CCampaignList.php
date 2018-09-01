<?php

class CCampaignList {

    public static __construct($_oObjectAdmin, $_oModel) {
        $oObjectAdmin   = $_oObjectAdmin;
        $oModel         = $_oModel;
        $oOutput        = $_oOutput;
        self::fnInit();
    }
    
    private static fnInit() {}
    
    public static fnRunable($oRxArg) {
        return true //default process
    }
    
    public static fnRun($oRxArg) {
        var $oData = $oModel->fnGet();
        $oOutput.fnBodyAppend(self::fnHtmlGet($oData));
    }
    
    private static fnHtmlGet($oData) {
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
