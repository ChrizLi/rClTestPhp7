<?php

namespace   brotherDe\cashback;

class       CProductModel
extends     CServiceModel
{
    protected 
            $a = array();

    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit() {
            $this->a['sDsn']='BrotherDeSapDaten';
    }
    
    public  function    fnSel() {
            if ($this->a['oSel'] == undefined) {
                $this->a['oSel'] = $this->fnProductListSel();
            }
            return $this->a['oSel'];
    }
    
    private function    fnProductListSel() {
            // return array of arrays
            return array(
                array('nId'=>1, 'sProductId'=>'p11','sName'=>'s1', 'bActive'=>false),
                array('nId'=>2, 'sProductId'=>'p12','sName'=>'s2', 'bActive'=>true),
                array('nId'=>3, 'sProductId'=>'p13','sName'=>'s3', 'bActive'=>true),
            );
    }
    
    public function     fnIns() {
        
    }
}

?>
