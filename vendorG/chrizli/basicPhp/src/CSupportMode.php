<?php

class       CSupportMode
extends     CBase   {
        private
                CObjectAdmin    $oObjectAdmin,
                CPHPSite        $oPhpSite,
                CUserAccount    $oUserAccount,
                array           $aAdmin;
                
        public  function    __construct(
                CObjectAdmin    $_oObjectAdmin,
                CPhpSite        $_oPhpSite,
                CUserAccount    $_oUserAccount,
                CUser           $_oUser
                ):  void {
                $this->fnInit();
        }
        
        private function    fnInit(): void {
                $this->aAdmin = ('ListlChr', 'GoebelFr', 'StuerzMa');
        }
        
        public  function    fnSupportMode(CUserAccount $_oUser, string $_sSite): bool {
                if ($this->oPhpSite->fnStageProd()) {
                    if(array_search($aAdmin, $this->oUserAccount->fnAccountGet()>0) {
                        return true;
                    }   else    {
                        return false;
                    }
                }   else    {
                    return true;
                }
        }
}

?>
