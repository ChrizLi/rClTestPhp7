<?php
class       CModuleCampaignDataCrud 
extends     CModuleAbstract
implements  ifModule {
    protected
        $oOutput,
        $oModel;
    protected
        $oData = array();
    
    public function __construct(
        $_oObjectAdmin, 
        $_oRxArg        =null, 
        $_oOutput       =null, 
        $_oModel        =null
    ) {
        parent::__construct($_oObjectAdmin, $_oRxArg);
        if ($_oOutput       ==null) {
            $this->oOutput  = new COutput();
        }   else {
            $this->oOutput  = $_oOutput;
        }
        if ($_oModel        ==null) {
            $this->oModel   = new CCampaignModel();
        }   else {
            $this->oModel   = $_oModel;
        }
        $this->fnInit();
    }
    
    public function fnInit() {}
    
    public function fnRun($_oRxArg): void {
        $oData = $this->oModel->fnGet($_oRxArg);
        $this->oOutput->fnHeadAppend  ($this->fnHeadGet    ());
        $this->oOutput->fnRedirect    ($this->fnRedirectGet());
        $this->oOutput->fnBodyAppend  ($this->fnBodyGet    ());
    }
    
    private function fnHeadGet(): string {
        return 'head';
    }
    
    private function fnRedirectGet(): string {
        return '?1=1';
    }
    
    private function fnBodyGet(): string {
        return $this->fnTableHeadGet().$this->fnTableBodyGet().$this->fnTableFootGet();
    }
    
    private function fnTableHeadGet(): string {
        //return "<tr><th>Id</th><th>Name</th>";
        return 'tableHead';
    }
    private function fnTableBodyGet(): string {
        $s="";
        //for(n=0;n<$oData.length;n++) {
        //    $s .= "<tr><td>".$this.oData[n]["sId"]."</td><td>".$this.oData[n]["sName"]."</td></tr>";
        //}
        return 'tableBody';
    }
    private function fnTableFootGet(): string {
        return 'tableFoot';
    }
}

?>
