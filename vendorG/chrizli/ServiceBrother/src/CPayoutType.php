<?php
//20180509, ListlChr, PayoutTypes holds basic data for each PayoutType, use Factory to create object
class CPayoutType {
    private $a=array('sId'=>'', 'sNameShort'=>'');
    
    public function __construct() {}
    
    public function fnSet(
        $_sId,
        $_sNameShort
    ){
        $a['sId']           = strToUpper($_sId);
        $a['sNameShort']    = strToUpper($_sNameShort);
    }
    
    public function fnGet():array {
        return $a;
    }
}

?>
