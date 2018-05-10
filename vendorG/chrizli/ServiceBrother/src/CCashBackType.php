<?php
//20180509, ListlChr, CashBackTypes holds basic data for each CashBackType, use Factory to create object
class CCashBackType {
    private $a=array('sId'=>'', 'sNameShort'=>'', 'sPayoutTypeId'=>'');
    
    public function __construct() {}
    
    public function fnSet(
        $_sId,
        $_sNameShort,
        $_sPayoutTypeId
    ){
        $a['sId']           = strToUpper($_sId);
        $a['sNameShort']    = strToUpper($_sNameShort);
        $a['sPayoutTypeId'] = strtoUpper($_sPayoutTypeId);
    }
    
    public function fnGet():array {
        return $a;
    }
}

?>
