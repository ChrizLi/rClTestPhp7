<?php
abstract class   CModuleAbstract {
    protected
        $oObjectAdmin,
        $oRxArg;

    public function __construct($_oObjectAdmin, $_oRxArg=null) { 
        $this->oObjectAdmin = $_oObjectAdmin;
        if (!$_oRxArg) {
            $this->oRxArg = $_oRxArg;
        }   else {
            $this->oRxArg = new CRxArg;
        }
        $this->fnInit();
    }
    
    abstract protected function fnInit();
        
    abstract public function fnRun($_oRxArg);

}

?>
