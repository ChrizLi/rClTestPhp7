<?php

namespace   brotherDe\cashback;

class       CCampaignTypeHandler
extends     CBase
{

    public static __construct(
        $_oObjectAdmin,
        $_oOutput,
        $_oCampaignTypeModel
    ) {}
    
    private static fnInit() {}
    
    private static fnDropDownPrep($_sIdCurrent) {
        var $s      = "";
        var $sCur   = "";
        var $aa = $_oCampaignTypeModel->fnSel();
        for(let $n=0; $n<$aa.length; $n++) {
            if($aa[$n]==$_sIdCurrent){
                $sCur = "active";
            } else {
                $sCur = "";
            }
            $s .= "<option ".$sCur.">".$aa[$n]."</option>";
        }
        return $s;
    }
}

?>
