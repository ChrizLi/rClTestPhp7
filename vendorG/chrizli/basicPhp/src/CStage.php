<?php

class       CStage      
extends     CBase       {   // single Stage item
    private
            array       $a,
            string      $a['sStageId'],
            string      $a['sStageBaseId'];
            
    public  function    __construct(array $_a, $_oStageBase=null) {
            if ( $_oStageBase==null) {
                $this->oStageBase   = new CStageBase();
            } else {
                $this->oStageBase   = $_oStageBase;
            }
            $this->fnStageIdSet     ($_a[0]);
            $this->fnStageBaseIdSet ($_a[1]);
    }
    public  function    fnStageIdGet(): string {
            return      $this->a['sStageId'];
    }
    
    public  function    fnStageIdSet($_sId): string {       
            $this->a['sStageId']        = $_sId;
    }
    
    public  function    fnStageBaseIdGet(): string { 
            return      $this->a['sStageBaseId'];
    }
    
    public  function    fnStageBaseIdSet($_sId): string {
            if ($this->oStageBase->fnIdValid($_sId)) {
                $this->a['sStageBaseId']    = $_sId;
            }
    }
    
    public  function    fnGet($_sId): array {
            if ($this->fnIdValid($_sId) { 
                return  $this->a;
            }   else    {
                $this->fnErrorThrow('ArgNotValid', 'ArgNotValid');
            }
            
    public  function    fnIdValid($_sId): bool {
            return      array_search($_sId, $this->a)==false? false: true;
    }
}
?>
