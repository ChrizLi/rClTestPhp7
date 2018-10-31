<?php

class   CFileIni
extends CBase
{
    private $sFileFq,
            $bFileRead,
            $sContent,
            $aContent,
            $bWriteAuto;

    public  function    __constructor(
            $_oFileTxt,
            $_sFileFq
    )   {
        $oFileTxt           = $_oFileTxt;
        $this->sFileFq      = $_sFileFq;
        $this->bFileRead    = false;
        $this->sContent     = '';
        $this->aContent     = array();
        $this->bWriteAuto   = true;
    }
    
    public  function    fnSFileFqSet(string: $_sFileFq){
            $this->FileFq = $_sFileFq;
    }

    private function    fnRead() {
        if (!$this->bFileRead) {
            _fnRead();
        }
    }

    private function    _fnRead() {
        $bFileRead      = true;
        $this->sContent = $this->oFileTxt->fnRead($this->sFileFq);
    }
    
    public  function    fnWrite() {
        $this->_fnWrite();
    }
    
    private function    _fnWrite(){
        $this->oFileTxt->fnWrite($this->sFileFq, $this->sContent);
    }
    
    private function    fnStringToArrayOfAssociatedArray(){
        $this->fnRead();
    }
    
    public  function    fnKeyGet(string: sKey): string {
        $this->fnRead();
    }
    
    public  function    fnKeySet(
        string: sKey, 
        string: sValue
    )   {
        if($this->bWriteAuto) {
            $this->fnWrite();
        }
    }
}

?>
