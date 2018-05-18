<?php

namespace   chrizli\basicPhp;

class       CRecordSet
extends     CBase
{
    private
            $aRecordSet,
            $aKey;
            
    public  function    __construct(array $_aKey) {
            // plain array, non associated
            $this->aKey = $_aKey;
    }
    
    public  function    fnSet(array $_aRecordSet): void {
            forEach($this->aKey as $sKey) {
                if (array_key_exists($sKey, $_aRecordSet)!==false) {
                    $this->aRecordSet[$sKey]=$_aRecordSet[$sKey];
                }
            }
    }
    
    public  function    fnKeyExists(string $_sKey): bool {
            return (array_search($_sKey, $this->aKey)===false)? false: true;
    }
    
    public  function    fnGet(string $_sKey=null, bool $_bErrorThrow=null) {
            $_bErrorThrow = ($_bErrorThrow==null)? true: $_bErrorThrow;
            if ($_sKey==null) {
                return  $this->aRecordSet;
            }   else {
                if ($this->fnKeyExists($_sKey)) {
                    return $this->aRecordSet[$_sKey];
                }   else {
                    if ($_bErrorThrow) {
                        $this->fnErrorThrow('ArgIsNotValid');
                    }   else {
                        return null;
                    }
                }
            }
    }
    
    public  function    fnValueExists(array $_aKeyValue) {
            $sKey = key($_aKeyValue);
            if ($this->fnKeyExists($sKey)) {
                if ($this->aRecordSet[$sKey]==$_aKeyValue[$sKey]) {
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
