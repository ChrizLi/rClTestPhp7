<?php
//20180509, ListlChr, SalesOrg holds basic data for each SalesOrg, use Factory to create object

class       CSalesOrg 
extends     CBase
{
    private $a=array('sId'=>'', 'sNameShort'=>'');
    
    public  function    __construct() {}
    
    public  function    fnSet(
            string  $_sId,
            string  $_sNameShort
            ): void {
            $a['sId']           = strToUpper($_sId);
            $a['sNameShort']    = strToUpper($_sNameShort);
    }
    
    public  function    fnGet():array {
            return $this->a;
    }
}

?>
