<?php
class CObjectAdmin {
    private static 
        $aObject = array();

    /*public static function __construct() {
    }*/
    
    private static function fnIns(
        any    $_o, 
        string $_sId       ="",
        bool   $_bOverwrite=false
    ): void {
            $sId    =  "";
        if( $_sId   == "") {
            $sId    =  $_o.sName;
        } else {
            $sId    =  $_sId;
        }

        if(array_key_exists($sId, $aObject) && !$_bOverwrite) {
            //ErrorThrow
        } else {
            array_push($aObject, $sId, $_o);
        }
    }
    
    public static   function fnObjectGet(
        string      $_sClass,
        any         $_o         = null,
        bool        $_bGlobal   = true,
        string      $_sId       = '',
        array       $_aaArg     = array()
    ): any {
            $o  =  "";
        if ($_o == "") {
            self::fnCreate($_sClass, $_bGlobal, $_aaArg);
        } else {
            $o = $_o;
        }
        self::fnIns($o, $_sId);
    }
    
    private static function fnCreate(
        string $_sClass,
        bool   $_bGlobal   = true,
        array  $_aaArg     = array()
    ) {
            $aaArg = array();
        if( $_aaArg.length() == 0 ) {
            array_push($aaArg, "oObjectAdmin", this);
        }
        if( $_bGlobal ) {
            // search/create from global
            return "global";
        } else {
            // search/create from local
            return "local";
        }
        return "end";
    }
}

?>
