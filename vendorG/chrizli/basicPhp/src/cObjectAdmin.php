<?php

class CLoad {

    private static $aaObject    =array();

    public static function __construct() {
    }
    
    private static function fnIns(
        any    $_o, 
        string $_sId       ="",
        bool   $_bOverwrite=false
    ) {
        var $sId    =  "";
        if( $_sId   == "") {
            $sId    =  $_o.sName;
        } else {
            $sId    =  $_sId;
        }

        if(array_key_exists($sId, $aaObject) && !$_bOverwrite) {
            //ErrorThrow
        } else {
            array_push($aaObject, $sId, $_o);
        }
    }
    
    public static function fnObjectGet(
        string     $_sClass,
        any        $_o         = "",
        bool       $_bGlobal   = true,
        string     $_sId       = "",
        struct     $_aaArg     = ()
    ) {
        var $o  =  "";
        if ($_o == "") {
            self::fnCreate($_sClass, $_bGlobal, $_aaArg);
        } else {
            $o = $_o;
        }
        self::fnIns($o, string: $_sId);
    }
    
    private static function fnCreate(
        string $_sClass,
        bool   $_bGlobal   = true,
        array  $_aaArg     = ()
    ) {
        var $aaArg = array();
        if( $_aaArg.length() == 0 ) {
            array_push($aaArg, "oObjectAdmin", this);
        }
        if( $_bGlobal ) {
            // search/create from global
        } else {
            // search/create from local
        }
        return $
    }
}

?>
