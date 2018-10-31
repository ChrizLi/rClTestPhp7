<?php

$ composer require hassankhan/config

class   CAppInstaller
extends CBase
{
    private
                $aExtCandidate  = ['ini', 'cfg'],
                $sCfgFileBaseFq = './cfg/cfgFile',
                $bExtSet        = false,
                $sExt,
                $sCfgFileFq,
                $aContent,
                $oCfg;
                
    public      function    __construct(string $_sFileExt){
        $this->fnFileExtSet($_sFileExt);
    }
    
    public      function    fnFileExtSet(string $_sFileExt){
        if ($this->fnFileExtValid($_sFileExt)){
            $this->sCfgFileFq   = $this->sCfgFileBaseFq .'.'. $_sFileExt);
            $this->sCfg         = $_sFileExt;
            $this->bExtSet      = true;
        }
    }

    private     function    fnFileExtValid(string $_sFileExt){
        if (array_search($_sFileExt, $this->aExtCandidate) > 0){
            return true;
        }
        return  false;
    }

    private     function    fnCfgFileRead(){
        $this->oCfg = new Config($this->sCfgFileFq);
    }

    public      function    fnRun(){
        if (not fnFileExists($this->sCfgFileFq and $this->bExtSet){
            $this->fnCfgFileCreate();
            $this->oCfg = $this->fnAppCfgFileRead($sCfgFileFq);
        }

    }    
    
    private     function    fnCfgFileCreate(){
        //$this->fnDataInit();
        $sContent=$this->oCfg->all();
        $this->fnFileWrite($this->sCfgFileFq, $sContent, );
    }
    
    public      function    fnCfgItemGet(string $_sKey){
        return  $this->oCfg->get($_sKey)
    }
    
    public      function    fnCfgItemSet(string $_sKey, $_sValue) {
        $this->oCfg->set($_sKey, $s_Value);
    }
}
?>
