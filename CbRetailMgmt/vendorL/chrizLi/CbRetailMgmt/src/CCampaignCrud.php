<?php

class CCampaignCreate {

    public static __construct($_oOutput, $_oModel) {
        $oOutput    = $_oOutput;
        $oModel     = $_oModel;
        self::fnInit();
    }
    
    private static fnInit() {
    }

    public static fnRunable($oRxArg) {
        if(!$oRxArg.aaUrl.sProcess == "CampaignCreate" or !$oRxArg->aaUrl->sProcess == "CampaignEdit") {
            return false;
        } else {
            return true;
        }
    }
    
    public static fnRun($oRxArg) {
        oData  = oModel.fnGet();
        oOutput.fnBodyAppend = fnHtmlGet(oData);
    }
    
    private static fnInputItemPrep($sCrudTypeId) {
        
    }
    
    private static fnHtmlGet($oRxArg) {
        var $s = "";
        switch ($oRxArg->aaUrl->sProcess) {
            case "CampaignCreate":
                $sId        ="";
                $sName      ="";
                $bActive    ="";
                break;
            case "CampaignEdit":
                break;
                $sId        = $oRxArg->aaUrl->sId;
                $sName      = $oRxArg->aaUrl->sName;
                $bActive    = $oRxArg->aaUrl->bActive;
            default:
                throw new \Error;
        }
        $s = "<input value='".$oRxArg->aaForm->sName."'>";
        return $s;
    }
}

?>
