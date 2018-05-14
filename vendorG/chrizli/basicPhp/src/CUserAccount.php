<?php

class       CUserAccount 
extends     CBase {
    private
            $oObjectAdmin,
            $oUserSource,
            $aUser          = array();
        
    public  function    __construct(
            object          $_oObjectAdmin,
            string          $_sUserAccountId,
            ifUserAccount   $_oUserSource       = null
            ): void {
            $oObjectAdmin       =  $_oObjectAdmin;
            if ($_oUserSource   == null) {
                $oUserSource    =  new CActiveDirectory;
            }   else {
                $oUserSource    =  $_oUserSource;
            }
            if ($this->$oUserSource->fnUserAccountExists($_sId)) {
                $this->aUser    =  $this->oUserSource->fnUserAccountGet($_sId);
            }
            $this->fnInit();
    }
    
    private function    fnInit(): void {
        
    }
    
    public  function    fnUserAccountIdGet(): string {
            return      $this->a['sAccountId'];
    }
    
    public  function    fnNameGet(): string {
            return      $this->a['sNameFirst'].' '.$this->a['sNameLast'];
    }
    
    public  function    fnNameSortGet(): string {
            return      $this->a['sNameLast'].', '.$this->a['sNameFirst'];
    }
    
    public  function    fnNameFirstGet(): string {
            return      $this->a['sNameFirst'];
    }
    
    public  function    fnNameLastGet(): string {
            return      $this->a['sNameLast'];
    }
}

?>
