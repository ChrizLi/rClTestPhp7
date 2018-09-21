<?php

namespace   chrizli\basicPhp;

class       CPhpServerList
extends     CContainerObject
{
    public  function    __construct() {
            parent::__construct(false);
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->fnServerListInit();
    }
    
    private function    fnServerListInit(): void {
            $oServer = new CPhpServer(array('sPhpServerId'=>'BigW10N61014_p8721','sName'=>'BigW10N61014','nPort'=>'8721'));
            $this->fnAdd($oServer);
            $oServer = new CPhpServer(array('sPhpServerId'=>'BigW10N61014_p8722','sName'=>'BigW10N61014','nPort'=>'8722'));
            $this->fnAdd($oServer);
            $oServer = new CPhpServer(array('sPhpServerId'=>'BigW10N61014_p8723','sName'=>'BigW10N61014','nPort'=>'8723'));
            $this->fnAdd($oServer);
    }
    
}

?>
 