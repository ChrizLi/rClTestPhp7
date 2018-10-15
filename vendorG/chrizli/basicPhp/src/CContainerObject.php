<?php

namespace   chrizli\basicPhp;

class       CContainerObject
extends     CContainer
{   
    public  function    fnValueValid(string $_sValue, string $_sKey): bool {
            return array_search($_sValue, array_column($this->aItem, $_sKey));
    }
    
    public  function    fnObjectGet($_sValue, string $_sKey): array {
            $aTgt   = array();
            if ($this->fnValueValid($_sValue, $_sKey)) {
                forEach($this->aItem as $oItem) {
                    if( $oItem[$_sKey]==$_sValue) {
                        //array_push($aTgt, $oItem);
                        $aTgt[]=$oItem;
                    }
                }
            }
            if (count($aTgt)==1) {
                return $aTgt[0];
            }   else {
                return $aTgt;
            }
    }
    
}

?>
