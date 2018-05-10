<?php
class       CModuleProductDataCrud
extends     CModuleAbstract
implements  ifModule {
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
        if ($_oOutput        ==null) {
            $this->oOutput  = new COutput();
        }   else {
            $this->oOutput  = $_oOutput;
        }
        if ($_oModel         ==null) {
            $this->oModel   = new CProductModel();
        }   else {
            $this->oModel   = $_oModel;
        }
        $this->fnInit();
    }
    
    public function fnInit() {}
    
    public function fnRun($_oRxArg): void {
        $oData = $this->oModel->fnGet($_oRxArg);
        $this->oOutput->fnHeadAppend  ($this->fnHeadGet    ($_oRxArg, $oData));
        $this->oOutput->fnRedirect    ($this->fnRedirectGet($_oRxArg, $oData));
        $this->oOutput->fnBodyAppend  ($this->fnBodyGet    ($_oRxArg, $oData));
    }
    
    private function fnHeadGet(): string {}
    
    private function fnRedirectGet(): string {
        return '?1=1';
    }
    
    private function fnBodyGet(): string {
        //return self::fnTableHeadGet($oData).self::fnTableBodyGet($oData).self::fnTableFootGet($oData);
        return 'body';
    }
    
    private function fnTableHeadGet($oData): string {
        return "<tr><th>Id</th><th>Name</th>";
    }
    
    private function fnTableBodyGet($oData): string {
        $s='';
        //for(var n=0;n<$oData.length;n++) {
        //    $s .= "<tr><td>".$oData[n]["sId"]."</td><td>".$oData[n]["sName"]."</td></tr>";
        //}
        return $s;
    }
    private function fnTableFootGet($oData): string {
        return 's';
    }
}

?>
