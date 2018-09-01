<?php

class CModel {

    var $aa = array();

    public static __construct() {
        self::fnInit();
    }
    
    private static fnInit() {
        array_push($aa, "sDsn", "BrotherDeSapDaten");
    }
    
    public static fnSel() {
        if ($aa.oSel == undefined) {
            $aa.oSel = self::fnCampaignListSel();
        }
        return $aa.oSel;
    }
    
    private static fnCampaignListSel() {
        // Tsql.spCampaignListSel
    }
    
    public static fnIns() {
    }

}

?>
