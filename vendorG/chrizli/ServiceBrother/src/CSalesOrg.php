<?php
//20180509, ListlChr, SalesOrg holds basic data for each SalesOrg, use Factory to create object
class CSalesOrg {
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
