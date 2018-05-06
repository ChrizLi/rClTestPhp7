<?php

class CPage() {

    var 
        $oObjectAdmin, 
        $oRxArg:
        
    var 
        $aProcess           = array(),
        $oProcessDefault;

    public static __construct($_oObjectAdmin, $_oRxArg=undefined) { 
        $oObjectAdmin = $_oObjectAdmin;
        if(!$_oRxArg) {
            $oRxArg = $_oRxArg;
        } else {
            $oRxArg = new CRxArg;
        }
        self:fnInit();
    }
    
    abstract protected static fnInit() {}
        
    public static fnRun() {
        var $oProcess,
            $bRan=false;
        
        forEach($oProcess of $aProcess) {
            if ($oProcess->fnRunable(oRxArg)) {
                $oProcess->fnRun(oRxArg);
                $bRan = true;
            }
        }
        if(!$bRan) {
            $oProcessDefault->fnRun($oRxArg);
        }
    }
    
    private static fnProcessAdd($_oModule, $_bDefault=false) {
        if($_bDefault) {
            $oProcessDefault = $_oModule;
        }   else {
            array_push($aProcess, $_oModule);
        }
    }
}

?>
