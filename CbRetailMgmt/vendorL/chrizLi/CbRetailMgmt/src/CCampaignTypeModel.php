<?php

namespace   brotherDe\cashback;

class       CCampaignTypeModel
extends     CBase
{
    protected
            $aType = array();

    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
    }
    
    public  function    fnSel(): array {
            // fetch from persistent storage
            return $this->aType;
    }
    
    public  function    fnValid($_sId): bool {
            if (array_key_exists($this->aType, $_sId) {
                return true;
            }   else {
                return false;
            }
    }
    
    public  function    fnIns(oCampaignType): void {
            // save to persistent storage
    }
}

?>
