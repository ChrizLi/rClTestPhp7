<?php

namespace   chrizli\basicPhp;

class       CObjectAdmin 
extends     CBase           
{
    private static 
            $aObject    = array();

    public  function    __construct() {
            $this->fnInit()
    }
    
    private function    fnInit(): void {}
    
    private function    fnIns(
            any         $_o, 
            string      $_sId        = "",
            bool        $_bOverwrite = false
            ): void {
            $sId        =  "";
            if( $_sId   == "") {
                $sId    =  $_o.sName;
            }   else {
                $sId    =  $_sId;
            }

            if(array_key_exists($sId, $aObject) && !$_bOverwrite) {
                //ErrorThrow
            }   else {
                array_push($aObject, $sId, $_o);
            }
    }
    
    public  function    fnObjectGet(
            string      $_sClass,
            any         $_o         = null,
            bool        $_bGlobal   = true,
            string      $_sId       = '',
            array       $_aaArg     = array()
            ): any {
            $o      =  '';
            if ($_o == "") {
                $this->fnCreate($_sClass, $_bGlobal, $_aaArg);
            }   else {
                $o  = $_o;
            }
            $this->fnIns($o, $_sId);
    }
    
    private function    fnCreate(
            string      $_sClass,
            bool        $_bGlobal   = true,
            array       $_aaArg     = array()
            ): void {
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
