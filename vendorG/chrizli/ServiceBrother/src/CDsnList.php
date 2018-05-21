<?php

class   CDsnListl
extends CContainer
{
    private
            $aDsn;
    
    public  function    __construct() {
            parent::__construct(true);
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $aItem = array('sDsnId'=>'rClTestPhp7dev',  'sDsnTypeId'=>'rClTestPhp7', 'sStageId'=>'dev',  'sServer'=>'tal13', 'nPort'=>'8721');
            //$this->aDsn['rClTestPhp7dev'] = $aItem;
            $this->fnAdd($aItem, 'rClTestPhp7dev');
            $aItem = array('sDsnId'=>'rClTestPhp7test', 'sDsnTypeId'=>'rClTestPhp7', 'sStageId'=>'test', 'sServer'=>'tal13', 'nPort'=>'8722');
            //$this->aDsn['rClTestPhp7test'] = $aItem;
            $this->fnAdd($aItem, 'rClTestPhp7test');
            $aItem = array('sDsnId'=>'rClTestPhp7prod', 'sDsnTypeId'=>'rClTestPhp7', 'sStageId'=>'prod', 'sServer'=>'tal13', 'nPort'=>'8723');
            //$this->aDsn['rClTestPhp7prod'] = $aItem;
            $this->fnAdd($aItem, 'rClTestPhp7prod');
    }
    
    /*
    public  function    fnValid(string $_s): bool {
            return (array_key_exists($_s, $this->aDsn))? true: false;
    }
    
    public  function    fnGet(string $_s=null) {
            if($_s == null) {
                return $this->aDsn;
            }   else {
                if ($this->fnValid($_s) {
                    return $this->aDsn[$_s];
                }
            }
    }
    */
}
?>
