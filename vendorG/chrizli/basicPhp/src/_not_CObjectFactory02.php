<?php
/*----------------------------------------------------------
---- 20180305V1.0.0,    ListlChr,   Init
---- 
------------------------------------------------------------
---- what this code does:
---- -  create all types of objects (factory) contained in candidateList [fnInit()]  
---- -  always calls fnConstructor(oObjectAdmin=oObjectAdmin)
---- -  should be called by fnObjectAdmin
---- 
------------------------------------------------------------
---- known errors /missing features:
---- 
----------------------------------------------------------*/

namespace   chrizli\basicPhp;

class       CObjectFactory02 
extends     CBase
{
    private
            $oObjectAdmin,
            $sObjectAdminName   = 'oObjectAdmin';

    public  function    __construct(object $_oObjectAdmin) {
            $oObjectAdmin = $_oObjectAdmin;
            $this->fnInit();
    }

    private function    fnInit(): void {}
    
    public  function    fnCreate(
            string      $_sClass, 
            array       $_aArg
            ): object {
            $_aArg      = $this->fnArgValid($_aArg);
            $o          = new reflectionClass($_sClass);
            return      $o->newInstanceArgs($_aArg);
    }
    
    private function    fnArgValid(string $_aArg): array {
            if (!$_aArg.length==0) {
                 $_aArg[$this->sObjectAdminName] = $oObjectAdmin;
            }
            return  $_aArg;
    }
}
?>
