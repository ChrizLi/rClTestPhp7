<?php

namespace   brotherDe\cashback;

abstract 
class       CModuleAbstract 
extends     CBase
{
    private
            $oRxArg;

    public  function    __construct($_oRxArg=null) {
            if (!$_oRxArg) {
                $this->oRxArg = $_oRxArg;
            }   else {
                $this->oRxArg = new CRxArg;
            }
            $this->fnInit();
    }
    
    private function    fnInit(): void {};
        
    public  function    fnRun($_oRxArg): {};

}

?>
