class CFileIni
{
    private sFileFq;
    private bFileRead;
    private sContent;
    private aContent;
    private bWriteAuto;

    __constructor(
        oFileTxt,
        sFileFq
    ){
        oFileTxt            = oFileTxt;
        $this->sFileFq      = sFileFq;
        $this->bFileRead    = false;
        $this->sContent     = '';
        $this->aContent     = array();
        $this->bWriteAuto   = true;
    }
    
    public function sFileFqSet(string: sFileFq){
        sthis->sFileFq = sFileFq;
    }

    private function fnRead() {
        if (!$this->bFileRead) {
            _fnRead();
        }
    }

    private function _fnRead() {
        bFileRead       = true;
        $this->sContent = $this->oFileTxt->fnRead($this->sFileFq);
    }
    
    public function fnWrite() {
        _fnWrite();
    }
    
    private function _fnWrite(){
        $this->oFileTxt->fnWrite($this->sFileFq, $this->sContent);
    }
    
    private function fnStringToArrayOfAssociatedArray(){
        fnRead();
        
    }
    
    public function fnKeyGet(string: sKey): string {
        fnRead();
    }
    
    public function fnKeySet(string: sKey, string: sValue) {
        if($this->bWriteAuto) {
            fnWrite();
        }
    }
    
}