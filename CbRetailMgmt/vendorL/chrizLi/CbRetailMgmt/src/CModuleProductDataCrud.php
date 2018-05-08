<?php

class   CModuleProductDataCrud 
        implements ifModule {
    
    var $oOutput,
        $oModel,
        $oRxArg;
    
    public static function __construct($_oOutput) {
        $oOutput = $_oOutput;
    }
    
    public static function fnGet($_oRxArg) {
        var $oData = $oModel->fnSet($_oRxArg);
        $oOutput->fnHeadAppend  (self::fnHeadGet    ($_oRxArg, $oData));
        $oOutput->fnRedirect    (self::fnRedirectGet($_oRxArg, $oData));
        $oOutput->fnBodyAppend  (self::fnHtmlGet    ($_oRxArg, $oData));
    }
    
    private static function fnHeadGet() {}
    
    private static function fnRedirectGet() {}
    
    private static function fnBodyGet() {
        return self::fnTableHeadGet($oData).self::fnTableBodyGet($oData).self::fnTableFootGet($oData);
    }
    
    private static function fnTableHeadGet($oData) {
        return "<tr><th>Id</th><th>Name</th>";
    }
    private static function fnTableBodyGet($oData) {
        var $s="";
        for(var n=0;n<$oData.length;n++) {
            $s .= "<tr><td>".$oData[n]["sId"]."</td><td>".$oData[n]["sName"]."</td></tr>";
        }
    }
    private static function fnTableFootGet($oData) {}
}

?>
