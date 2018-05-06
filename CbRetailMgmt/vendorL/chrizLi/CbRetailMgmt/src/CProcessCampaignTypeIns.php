<?php

class CProcessCampaignTypeIns{
    public static __construct(
    $_oObjectAdmin,
    $_oModel
    ) {}
    
    private static fnInit() {}
    
    public static fnRunable($_oRxArg) {
        if($_oRxArg->aaUrl->sProcess=="CampaignTypeIns") {
            return true;
        } else {
            return false;
        }
    }
    
    public static fnRun($_oRxArg) {
        if(self::fnRunable($_oRxArg) {
            
        } else {
            throw new \Error;
        }
    }
    
    /*public static fnIns($_sId) {
        //save to persistent storage
    }*/
    
}

?>
