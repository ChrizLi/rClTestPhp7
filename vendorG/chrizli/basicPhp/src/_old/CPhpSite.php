<?php

class       CPhpSite
extends     CBase   {
    private 
            $a = array;
            
    public  function    __construct(): void {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $a = $this->fnSiteArrayGet();
    }
    
    public  function    fnSiteArrayGet(): array {
            $aa = array();
            $aa['sSiteId']      = '',
            $aa['sServerName']  = '',
            $aa['nPort']        = '',
            $aa['sStageId']     = '';
            return $aa;
    }
    
    public  function    fnSet(array $_a): void {
            $this->a['sSiteId']     = $_a['sSiteId'];
            $this->a['sServerName'] = $_a['sServerName'];
            $this->a['nPort']       = $_a['nPort'];
            $this->a['sStageId']    = $_a['sStageId'];
    }
    
    public  function    fnGet(string $_s = null): any {
            if ($_s==null){
                return  $a;
            }   else    {
                return  $a[$_s]
            }
    }
    
    public  function    fnStageGet(): string {
            return $this->a['sStageId'];
    }
    
    public  function    fnStageDev(): bool {
            return  ($this->a['sStageId']='dev');
    }
    
    public  function    fnStageTest(): bool (
            return  ($this->a['sStageId']='test');
    )
    
    public  function    fnStageProd(): bool (
            return  ($his->a['sStageId']='prod');
    )
    
}

?>
