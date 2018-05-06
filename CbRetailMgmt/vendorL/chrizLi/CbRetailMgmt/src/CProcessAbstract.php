<?php

class   CProcessAbstract 
        implements ifProcess {
    
    var
        $oObjectAdmin,
        $oRxArg;
    
    var
        $aaModule       = array(),
        $oModuleDefault;
    
    public static __construct($_oObjectAdmin, $_oRxArg=undefined) {
        $oObjectAdmin = $_oObjectAdmin;
        if($_oRxArg) {
            $oRxArg = $_oRxArg;
        }   else {
            $oRxArg = new CRxArg;
        }
        self::fnInit();
    }
    
    private static fnInit() {}
    
    abstracted public static fnRunable($_oRxArg) {
        return true;
    }
    
    public static fnRun($_oRxArg) {
        var $oModule,
            $bRan   = false;
        
        forEach($oModule in $aaModule) {
            if($oModule->fnRunable($_oRxArg)) {
                $oModule->fnRun($_oRxArg);
                $bRan = true;
            }
        }
        if(!$bRan) {
            $oModuleDefault->fnRun($_oRxArg);
        }
    }
    
    public static fnModuleAdd(ifModule $_oModule, $_bDefault=false) {
        if($_bDefault) {
            $oModuleDefault = $_oModule;
        }   else {
            array_push($aaModule, $_oModule);
        }
    }
}

?>
