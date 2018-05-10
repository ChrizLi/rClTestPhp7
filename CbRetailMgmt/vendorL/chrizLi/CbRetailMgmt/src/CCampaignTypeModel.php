<?php
class   CCampaignTypeModel {
    protected
        $aaType = array();

    public function __construct() {
        $this->fnInit();
    }
    
    private function fnInit() {
    }
    
    public function fnSel() {
        // fetch from persistent storage
        return $aaType;
    }
    
    public function fnValid($_sId) {
        if(array_key_exists($aaType, $_sId) {
            return true;
        } else {
            return false;
        }
    }
    
    public function fnIns(CCampaignType oCampaignType) {
        // save to persistent storage
    }
}

?>
