<?php

namespace   brotherDe\cashback;

class       CModuleCampaignList 
extends     CModuleAbstract
implements  ifModule 
{
    protected
            $oModel,
            $oRxArg;
    protected
            $oData;
    
    public  function    __construct( 
            $_oRxArg    =null, 
            $_oOutput   =null, 
            $_oModel    =null
    )       {
            if ($_oOutput        ==null) {
                $this->oOutput  = new COutput();
            }   else {
                $this->oOutput  = $_oOutput;
            }
            if ($_oModel         ==null) {
                $this->oModel   = new CCampaignModel();
            }   else {
                $this->oModel   = $_oModel;
            }
    }
    
    private function    fnInit() {}
    
    public  function    fnRun($_oRxArg): void {
            $oData = $this->oModel->fnGet($_oRxArg);
            $this->oOutput->fnHeadAppend  ($this->fnHeadGet    ($_oRxArg, $oData));
            $this->oOutput->fnRedirect    ($this->fnRedirectGet($_oRxArg, $oData));
            $this->oOutput->fnBodyAppend  ($this->fnBodyGet    ($_oRxArg, $oData));
    }
    
    private function    fnHeadGet():string {}
    
    private function    fnRedirectGet():string {}
    
    private function    fnBodyGet():string {
            return  
                    $this->fnTableHeadGet($this->oData).
                    $this->fnTableBodyGet($this->oData).
                    $this->fnTableFootGet($this->oData);
    }
    
    private function    fnTableHeadGet($_oData): string {
            return "<tr><th>Id</th><th>Name</th>";
    }
    
    private function    fnTableBodyGet($_oData): string {
            $s="";
            for($n=0;$n<$oData.length;$n++) {
            $s .= "<tr><td>".$oData[$n]["sId"]."</td><td>".$oData[$n]["sName"]."</td></tr>";
            }
            return $s;
    }
    
    private function    fnTableFootGet($_oData): string {
            return 'foot';
    }
}

?>
