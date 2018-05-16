<?php

namespace   chrizli\basicPhp;

class       CRxArg 
extends     CBase
{
    private
            $aUrl   = array(),
            $aForm  = array(),
            $aRest  = array();
        
    public  function    __construct(
            array $_aUrl    = null, 
            array $_aForm   = null, 
            array $_aRest   = null
            ) {
            $this->aUrl     = $_aUrl;
            $this->aForm    = $_aForm;
            $this->aRest    = $_aRest;
    }
    
    public  function    fnUrlSet($_o, string $_sId=null): void {
            if (is_array($_o)) {
                $this->aUrl = $_o;
            }   else {
                if($_sId!=null && is_string($_sId)) {
                    $this->aUrl[$_sId] = $_o;
                }   else {
                    $this->fnErrorThrow('ArgNotValid');
                }
            }
    }
    
    public  function    fnFormSet($_o, string $_sId=null): void {
            if (is_array($_o)) {
                $this->aForm = $_o;
            }   else {
                if($_sId!=null && is_string($_sId)) {
                    $this->aForm[$_sId] = $_o;
                }   else {
                    $this->fnErrorThrow('ArgNotValid');
                }
            }
    }
    
    public  function    fnRestSet($_o, string $_sId=null): void {
            if (is_array($_o)) {
                $this->aRest = $_o;
            }   else {
                if($_sId!=null && is_string($_sId)) {
                    $this->aRest[$_sId] = $_o;
                }   else {
                    $this->fnErrorThrow('ArgNotValid');
                }
            }
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
    
    public  function    fnUrlGet(string $_sKey='') {
            if ($this->fnUrlKeyExists($_sKey)) {
                return $this->aUrl[$_sKey];
            }   else {
                return $this->aUrl;
            }
    }
    
    public  function    fnFormGet(string $_sKey='') {
            if ($this->fnFormKeyExists($_sKey)) {
                return $this->aForm[$_sKey];
            }   else {
                return  $this->aForm;
            }
    }
    
    public  function    fnRestGet(string $_sKey='') {
            if ($this->fnRestKeyExists($_sKey)) {
                return $this->aRest[$_sKey];
            }   else {
                return  $this->aRest;
            }
    }
    
    public  function    fnUrlDel(string $_sKey): void {
            unset($this->aUrl[$_sKey]);
    }
    
    public  function    fnFormDel(string $_sKey): void {
            unset($this->aForm[$_sKey]);
    }
    
    public  function    fnRestDel(string $_sKey): void {
            unset($this->aRest[$_sKey]);
    }
}

?>
