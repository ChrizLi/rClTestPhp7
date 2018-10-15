<?php

namespace   chrizli\basicPhp;

class       CUser
extends     CBase   
{
    private
            $oUserAccount,
            $aUser          = array();

    public  function    __construct($_oUserAccount=null) {
            if ($_oUserAccount  ==null) {
                $oUserAccount   = new CUserAccount();
            }   else {
                $oUserAccount   = $_oUserAccount;
            }
            $this->fnInit();
    }
    
    private function    fnInit(): void {
        // data should be based on $oUserAccount.fnAccountIdGet() and fetchd data from db
        $this->aUser['sId']         = 'EU\listlchr';
        $this->aUser['bAdmin']      = true;
        $this->aUser['sAdminPath']  = '\\BigW10N61014\tempCB$';
    }
    
    private function    fnDataStructureGet(): array {
            return  array(
                'sId'       => '',
                'bAdmin'    => '',
                'sAdminPath'=> ''
            );
    }
    
    /*public  function    fnSet(array $_a): void {
            $this->aUser['sId']         = $_a['sId'];// AccountId
            $this->aUser['sAdminPath']  = $_a['sAdminPath'];
    }*/
    
    /*public  function    fnValid(array $_a): bool {
            if ($_a.length!=3) {
                $this-fnErrorThrow('ArgIsInvalid');
            }
            forEach(fnDataStructureGet() as $sKey => $sValue) {
                if (array_key_exists($sKey, $_a)=0) {
                    $this->fnErrorThrow('ArgIsNotValid');
                }
            }
    }*/
    
    public  function    fnGet(string $_s=null) {
            return ($_s==null)? $this->aUser: $this->aUser[$_s];
    }
}

?>
