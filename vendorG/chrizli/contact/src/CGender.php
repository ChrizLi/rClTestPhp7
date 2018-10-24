<?

class   CGenderLookup
extends CBase
{
    private $oModel
            $aData;

    public  function    __construct(CDsn $_oModel){
            $this->oModel => $_oModel;
    }
    
    private function    fnDataInit(){
        if ($this->oModel->fnDirtyGet()){
            $this->aData = $this-oModel->fnSel();
        }
    }
    
    public  function    fnSelectionDropdownHtmlGet(){
        fnDataInit();
        var $sOut;
            $sOut = '<';
            $sOut .= '>'; 
    }

}
?>
