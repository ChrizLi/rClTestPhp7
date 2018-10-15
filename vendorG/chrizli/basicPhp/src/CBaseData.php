<?php

namespace   chrizli\basicPhp;

class       CBaseData
extends     CBase
{   //handles single associated array
    private
            $aData,
            $aCol       = array();

    public  function    __construct(array $_aCol) {
            //  contruct should be only point to setup list of aCol, to ensure data integrity
            $this->fnInit($_aCol);
    }
    
    private function    fnInit(array $_a=null) {
            $this->aCol     = $_a;
            $this->aData    = array();
    }
    
    private function    fnValid(array $_a): bool {
            // validate if given array contains all cols of object
            forEach($this->aCol as $sValue) {
                if (!array_key_exists($sValue, $_a)) {
                    return false;
                }
            }
            return true;
    }
    
    private function    fnKeyValid(string $_sKey): bool {
            return (array_search($_sKey, $this->aCol)===false)? false: true;
    }
    
    public  function    fnSet(array $_a): void {
            //  copies given Key/Value array into existing Key only
            if($this->fnValid($_a)) {
                forEach($_a as $sKey=>$sValue) {
                    if ($this->fnKeyValid($sKey)) {
                        $this->aData[$sKey] = $_a[$sKey];
                    }
                }
            }   else {
                $this->fnErrorThrow('ArgIsNotValid');
            }
    }
    
    public  function    fnGet(string $_sKey=null) {
            //  returns full array or value for given key
            if ($_sKey==null) {
                return $this->aData;
            }   else {
                if ($this->fnKeyValid($_sKey)) {
                    return $this->aData[$_sKey];
                }   else {
                    $this->fnErrorThrow("ArgIsNotValid");
                }
            }
    }
}
?>
 