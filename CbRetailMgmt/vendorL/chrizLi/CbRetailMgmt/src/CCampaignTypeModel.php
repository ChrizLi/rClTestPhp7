<?php

class CCampaignTypeModel {

    var $aaType = array();

    public static __construct() {
        self::fnInit();
    }
    
    private static fnInit() {
    }
    
    public static fnSel() {
        // fetch from persistent storage
        return $aaType;
    }
    
    public static fnValid($_sId) {
        if(array_key_exists($aaType, $_sId) {
            return true;
        } else {
            return false;
        }
    }
    
    public static fnIns(CCampaignType oCampaignType) {
        // save to persistent storage
    }

}

?>
