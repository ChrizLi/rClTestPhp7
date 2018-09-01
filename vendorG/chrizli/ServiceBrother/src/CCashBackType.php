<?php
//20180509, ListlChr, CashBackTypes holds basic data for each CashBackType, use Factory to create object

class   CCashBackType 
extends CBase
{
    private $a=array('sId'=>'', 'sNameShort'=>'', 'sPayoutTypeId'=>'');
    
    public  function    __construct() {}
    
    public  function    fnSet(
            string $_sId,
            string $_sNameShort,
            string $_sPayoutTypeId
    ): void {
            $this->a['sId']           = strToUpper($_sId);
            $this->a['sNameShort']    = strToUpper($_sNameShort);
            $this->a['sPayoutTypeId'] = strtoUpper($_sPayoutTypeId);
    }
    
    public  function    fnGet():array {
            return $this->a;
    }
}

?>
