<?php

class CRxArg {
    var $aaUrl,
        $aaForm,
        $aaRest;
        
    public static __construct($_aaUrl = "", $_aaForm = "", $_aaRest = "") {
        $aaUrl  = $_aaUrl;
        $aaForm = $_aaForm;
        $aaRest = $_aaRest;
    }
    
    public static fnUrlGet(string $sKey?) {
        if($s) {
            return $aaUrl;
        } else {
            if(fnUrlValid($sKey) {
                return $aaUrl($sKey);
            } else {
                return undefined;
            }
        }
    }
    
    private static fnUrlValid(string $sKey) {
        if(array_key_exists($aaUrl, $sKey)) {
            return true;
        } else {
            return false;
        }
    }
}

?>
