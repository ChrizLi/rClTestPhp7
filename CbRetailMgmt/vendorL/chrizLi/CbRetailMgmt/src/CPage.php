<?php

class CPage() {

    var $oObjectAdmin,
        $oCompany,
        $oPayoutType,
        $oCashBackType,
        $oMenu,
        $oOutput,
        $oRxArg;
        
    var $aProcess = array();

    public static __construct(
        $_oObjectAdmin,
        $_oCompany      = undefined,
        $_oPayoutType   = undefined,
        $_oCashBackType = undefined,
        $_oMenu         = undefined,
        $_oOutput       = undefined,
        $_oRxArg        = undefined
    ) {
        if(!$_oObjectAdmin) {
            $oObjectAdmin = new CObjectAdmin();
        } else {
            $oObjectAdmin = $_oObjectAdmin;
        }
        
        if(!$_oCompany) {
            $oCompany = new CCompany();
        } else {
            $oCompany = $_oCompany;
        }
        
        if(!oPayoutType)    {} else {}
        if(!oCashBackType)  {} else {}
        if(!oMenu)          {} else {}
        if(!oOutput)        {} else {}
    }
    
    private static fnInit() {
        array_push($aProcess, "CampaignList");
        array_push($aProcess, "CampaignCreate");
        array_push($aProcess, "CampaignEdit");
        array_push($aProcess, "ProductCreate");   
    }
    
    public static fnRun() {
        oOutput.fnBodyAppend = oGlobalMenu.fnTopRow();
        oOutput.fnBodyAppend = oMenu.fnGet();
        
        forEach($oItem of $aProcess) {
            if ($oItem.fnRunable(oRxArg)) {
                $oItem.fnRun(oRxArg);
            }
        }
        else $oProcessCampaignList.fnRun(oRxArg);

    }

}

?>
