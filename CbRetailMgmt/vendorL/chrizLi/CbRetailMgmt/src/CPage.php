<?php

class   CPage 
        extends CPageAbstract {
    
    private static fnInit() {
        oProcessCampaignList        = new CProcessCampaignList;
        oProcessCampaignFormCrud    = new CProcessCampaignFormCrud;
        oProcessCampaignDataCrud    = new CProcessCampaignDataCrud;
        oProcessProductDataCrud     = new CProcessProductDataCrud;
        self::fnProcessAdd(oProcessCampaignList);
        self::fnProcessAdd(oProcessCampaignFormCrud);
        self::fnProcessAdd(oProcessCampaignDataCrud);
        self::fnProcessAdd(oProcessProductDataCrud);  
    }
}

?>
