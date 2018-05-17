<?php

namespace   chrizli\basicPhp;

class       CRecordSet
extends     CBase
{
    private
            $aRecordSet,
            $aKey;
            
    public  function    __construct(array $_aKey) {
            $this->aKey = $_aKey;
    }
    
    public  function    fnSet(array $_aRecordSet): void {
            forEach($aKey as $sKey) {
                if (array_key_exists($sKey, $_aRecordSet)!===false) {
                $this->aKey[$sKey]=$_aRecordSet[$sKey];
            }
    }
    
    public  function    fnKeyExits(string $_sKey): bool {
            return (array_search($_sKey, $this->aKey)===false)? false: true;
    }
    
    public  function    fnGet(string $_sKey=null) {
            if ($_sKey==null) {
                return  $this->aRecordSet;
            }   else {
                if ($this->fnExists($_sKey)) {
                    return $this->aRecordSet[$_sKey];
                }
            }
    }
    
    public  function    fnValueExists(array $_aKeyValue) {
            $sKey = key($_aKeyValue);
            if ($this->fnKeyExists($sKey) {
                if ($aRecordSet[$sKey]==$_aKeyValue[$sKey]) {
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
