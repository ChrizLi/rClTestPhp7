<?php

namespace   chrizli\basicPhp;

class       CPhpSiteTypeModel
extends     CBase
{
    private
            $aRow;
            
    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit() {
            $this->fnDataInit();
    }
    
    private function    fnDataInit() {
            $this->aRow[] = array('sPhpSiteTypeId'=>'BigINet',  'sNameShort'=>'BigINet');
            $this->aRow[] = array('sPhpSiteTypeId'=>'Beip',     'sNameShort'=>'Beip');
    }
    
    public  function    fnSel() {
            return $this->aRow;
    }
}
?>
