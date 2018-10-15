<?php

namespace   chrizli\basicPhp;

class       CRecordSet
extends     CBase
{   //handles single associated array with flex qty of key/values-sets
    private
            $aData,
            $aKey       = array();

    public  function    __construct(array $_aKey) {
            //  contruct should be only point to setup list of aKey, to ensure data integrity
            $this->fnInit($_aKey);  // plain array, non associated
    }
    
    private function    fnInit(array $_aKey=null) {
            $this->aKey     = $_aKey;
            $this->aData    = array();
    }
    
    public  function    fnSet(array $_a): void {
            //  copies given key/value array into existing keys only
            forEach($_a as $sKey=>$sValue) {
                if ($this->fnKeyExists($sKey)) {
                    $this->aData[$sKey] = $sValue;
                }
            }
    }
    
    private function    fnKeyExists(string $_sKey): bool {
            return (array_search($_sKey, $this->aKey)===false)? false: true;
    }
    
    
    public  function    fnGet(string $_sKey=null, bool $_bErrorThrow=null) {
            //  returns full array or value for given key
            $_bErrorThrow = ($_bErrorThrow==null)? true: $_bErrorThrow;
            if ($_sKey==null) {
                return $this->aData;
            }   else {
                if ($this->fnKeyExists($_sKey)) {
                    return $this->aData[$_sKey];
                }   else {
                    if ($_bErrorThrow) {
                        $this->fnErrorThrow("ArgIsNotValid");
                    }   else {
                        return null;
                    }
                }
            }
    }
    
    public  function    fnValueExists(array $_aKeyValue) {
            $sKey = key($_aKeyValue);
            if ($this->fnKeyExists($sKey)) {
                if ($this->aData[$sKey]==$_aKeyValue[$sKey]) {
                    return  true;
                }   else {
                    return  false;
                }
            }   else {
                $this->fnErrorThrow('ArgIsNotValid');
            }
    }    
}
?>
