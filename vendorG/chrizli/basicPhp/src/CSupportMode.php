<?php

namespace   chrizli\basicPhp;

class       CSupportMode
extends     CBase   
{
    private
            $oObjectAdmin,
            $oPhpSite,
            $oUserAccount,
            $aAdmin;
            
    public  function    __construct(
            CObjectAdmin    $_oObjectAdmin,
            CPhpSite        $_oPhpSite      = null,
            CUserAccount    $_oUserAccount  = null,
            CUser           $_oUser         = null
            ) {
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
