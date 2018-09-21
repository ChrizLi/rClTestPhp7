<?php

namespace   chrizli\basicPhp;

class       CPhpSiteTypeContainer
extends     CContainerObject
{
    private
            $oModel;

    public  function    __construct($_oModel=null) {
            parent::__construct(false);
            if ($_oModel==null) {
                $this->oModel = new CPhpSiteTypeModel();
            }   else {
                $this->oModel = $_oModel;
            }
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->fnDataInit();
    }
    
    private function    fnDataInit(): void {
            $a = $this->oModel->fnSel();
            forEach($a as $aRow) {
                $oPhpSiteType = new CPhpSiteType();
                $oPhpSiteType->fnSet($aRow);
                $this->fnAdd($oPhpSiteType);
            }
    }
}
?>
 