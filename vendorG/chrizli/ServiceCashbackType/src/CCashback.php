<?php

class CCashBack{

    private $aCashBack = array();

    public static __construct() {
        self::fnInit();
    }
    
    private static fnInit() {
        var $a 
        $a = (sId="Aip", sName="AllInProgram", sPayoutTypeId="Epp");
        arrayPush($aCashBack, "Aip", $a);
        $a = (sId="CbRetail", sName="Beratungsbonus", sPayoutTypeId="CbRetail");
        arrayPush($aCashBack, "CbRetail", $a);
    }
    
    public static fnGet() {
        return $aCashback;
    }
    
    public static fnValid($_sId) {
        return true;
    }

}

?>
