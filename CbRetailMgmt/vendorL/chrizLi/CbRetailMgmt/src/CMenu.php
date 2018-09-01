<?php

namespace   brotherDe\cashback;

class       CMenu
extends     CBase
{
    // html NavMenu via Bootstrap
    private
            $sNavBar = "";
    
    public  function    __construct( $_oPage) {
            $oPage = $_oPage; 
            $this->fnInit();
    }
    
    private function    fnInit(): void {}
    
    private function    fnNavBar(): string {
            return $oPage.fnX();
    }
    
    public  function    fnGet(): string {
            return $this->sNavBar;
    }
    
    public  function    fnSetActive(string sItem): void {
    
    }
    
}

?>
