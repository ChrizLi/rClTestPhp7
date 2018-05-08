<?php

class CPayout{

    private static $aaPayout = array();

    public static __construct() {
        self::fnInit();
    }
    
    private static fnInit() {
        var $a=("sId"="Epp", sName="Epp");
        arrayPush($aaPayout, "Epp", $a);
            $a=("sId"="CbRetail", sName="Beratungsbonus");
        arrayPush($aaPayout, "CbRetail", $a);
    }
    
    public static fnGet() {
        return $aaPayout;
    }
    
    public static fnValid($_s) {
        return
    }
}

?>
