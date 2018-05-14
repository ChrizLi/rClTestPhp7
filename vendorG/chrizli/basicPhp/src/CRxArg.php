<?php
<<<<<<< Updated upstream

class       CRxArg 
extends     CBase {
    private
            array   $aUrl,
            array   $aForm,
            array   $aRest;
        
    public  function    __construct(
            array   $_aUrl    = array(), 
            array   $_aForm   = array(), 
            array   $_aRest   = array()
            ): void {
            $this->aUrl     = $_aUrl;
            $this->aForm    = $_aForm;
            $this->aRest    = $_aRest;
    }
    
    public  function    fnUrlKeyExists(string $_sKey): bool {
            return array_key_exists($_sKey, $this->aUrl)? true: false;
    }
    
    public  function    fnFormKeyExists(string $_sKey): bool {
            return array_key_exists($_sKey, $this->aForm)? true: false;
    }
    
    public  function    fnRestKeyExists(string $_sKey): bool {
            return array_key_exists($_sKey, $this->aRest)? true: false;
    }
    
    public  function    fnUrlGet(string $_sKey='', bool $_bErrorThrow=true) {
            if ($this-fnUrlKeyExists($_sKey)) {
                return $this->aUrl[$_sKey];
            }   else {
                if($_bErrorThrow) {
                    $this->fnErrorThrow("ArrayKeyNoExists","");
                } else {
                    return false;
                }
            }
    }
    
    public  function    fnFormGet(string $_sKey='', bool $_bErrorThrow=true): bool {
            if ($this-fnFormKeyExists($_sKey)) {
                return $this->aForm[$_sKey];
            }   else {
                if($_bErrorThrow) {
                    $this->fnErrorThrow("ArrayKeyNoExists","");
                } else {
                    return false;
                }
            }
    }
    
    public  function    fnRestGet(string $_sKey='', bool $_bErrorThrow=true): bool {
            if ($this-fnRestKeyExists($_sKey)) {
                return $this->aRest[$_sKey];
            }   else {
                if($_bErrorThrow) {
                    $this->fnErrorThrow("ArrayKeyNoExists","");
                } else {
                    return false;
                }
    /*
    public  function    fnUrlUpd(string $_sKey, string $_sValue): void {
            $this->aUrl[$_sKey] = $_sValue;
    }
    
    public  function    fnFormUpd(string $_sKey, string $_sValue): void {
            $this->aForm[$_sKey] = $_sValue;
    }
    
    public  function    fnRestUpd(string $_sKey, string $_sValue): void {
            $this->aRest[$_sKey] = $_sValue;
    }
    
    public  function    fnUrlDel(string $_sKey): void {
            unset($this->aUrl[$_sKey]);
    }
    
    public  function    fnFormDel(string $_sKey): void {
            unset($this->aForm[$_sKey]);
    }
    
    public  function    fnRestDel(string $_sKey): void {
            unset($this->aRest[$_sKey]);
    */
            
    /*
    private static function fnUrlValid(string $sKey) {
        if(array_key_exists(self::$aUrl, $sKey)) {
            return true;
        } else {
            return false;
        }
    }
    */
}

?>
