<?php

class       CActiveDirectory
extends     CBase
implements  ifUserAccount{
    private
            $aUser  = array(),
            $aId    = array();
    
    public  function    __construct(): void {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->fnUserAccountListSet();
    }

    private function    fnUserAccountListSet(): void {
            $a  = array(sAccountId=>'UK\ListlChr', sNameLast=>'Listl', sNameFirst=>'Christian');
            array_push($this->aUser, $a);
            $a  = array(sAccountId=>'UK\ListlAnd', sNameLast=>'Listl', sNameFirst=>'Andrea');
            array_push($this->aUser, $a);
            aId = array_column($this->aUser, 'sAccountId');
    }
    
    public  function    fnUserAccountListGet(): array {
            return $this->a;
    }
    
    public  function    fnUserAccountExists(string $_sId): bool {
            return  array_key_exists($_sId, $this->aId);
    }
    
    public  function    fnUserAccountGet(string $_sId): CUserAccount {
            return $aUser[$_sId];
    }
}

?>
