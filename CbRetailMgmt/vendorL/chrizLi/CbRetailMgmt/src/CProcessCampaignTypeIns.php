<?php

namespace   brotherDe\cashback;

class       CProcessCampaignTypeIns
extends     CProcessAbstract 
implements  ifProcess {
    protected
        $oOutput,
        $oModel;
        
    public function __construct(
        $_oObjectAdmin, 
        $_oRxArg        =null, 
        $_oOutput       =null, 
        $_oModel        =null
    ) {
        parent::__construct($_oObjectAdmin, $_oRxArg);
        if($_oOutput        ==null) {
            $this->oOutput  = new COutput();
        }   else {
            $this->oOutput  = $_oOutput;
        }
        if($_oModel         ==null) {
            $this->oModel   = new CCampaignTypeModel();
        }   else {
            $this->oModel   = $_oModel;
        }
        self::fnInit();
    }
    
    private function fnInit() {}
    
    public function fnRunable($_oRxArg): bool {
        if($_oRxArg->aaUrl->sProcess=="CampaignTypeIns") {
            return true;
        } else {
            return false;
        }
    }
    
    public static function fnRun($_oRxArg): void {
        if($this->fnRunable($_oRxArg) {
            
        } else {
            throw new Error("noRun");
        }
    }
    
    /*public static fnIns($_sId) {
        //save to persistent storage
    }*/
    
}

?>
