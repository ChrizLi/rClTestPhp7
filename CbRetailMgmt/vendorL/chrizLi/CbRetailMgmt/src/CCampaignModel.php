<?php

namespace   brotherDe\cashback;

class       CCampaignModel
extends     CBase
{
    protected 
            $a = array();

    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->a['sDsn']='BrotherDeSapDaten';
    }
    
    public  function    fnSel() {
            if ($this->a['oSel'] == undefined) {
                $this->a['oSel'] = $this->fnCampaignListSel();
            }
            return $this->a['oSel'];
    }
    
    private function    fnCampaignListSel(): array {
            // return array of arrays
            return array(
                array('nId'=>1, 'sName'=>'s1', 'bActive'=>false),
                array('nId'=>2, 'sName'=>'s2', 'bActive'=>true),
                array('nId'=>3, 'sName'=>'s3', 'bActive'=>true),
            );
    }
    
    public  function    fnIns() {
        
    }

}

?>
