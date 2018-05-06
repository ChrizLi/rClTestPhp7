<?php

class CMenu {
    
    var $oMenuEntry = new CMenuEntry();
    var $aaMenuEntry = arrayNew();

    public static __construct() {
        self::fnInit()
    }
    
    public static fnInit() {
        $oMenuEntry = ("l1", "l2", "CbRetailMgmt", "CbRetailMgmt");
    }
    
    public static fnGet(string: $_sId) {
        if(self::fnValid($_sId) {
            return $aaMenuEntry($_sId);
        } else {
            if($bErrorThrow) {
                ThrowError("x");
            } else {
                return undefined;
            }
        }
    }
    
    private static fnValid(string: $_sId) {
        return true;
    }    
}

?>
