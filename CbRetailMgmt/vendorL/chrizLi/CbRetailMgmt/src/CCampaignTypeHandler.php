<?php

namespace   brotherDe\cashback;

class       CCampaignTypeHandler
extends     CBase
{

    public  function    __construct(
            $_oObjectAdmin,
            $_oOutput,
            $_oCampaignTypeModel
            )   {}
    
    private function    fnInit(): void {}
    
    private function    fnDropDownPrep(string $_sIdCurrent): string {
            $s      = "";
            $sCur   = "";
            $aa     = $_oCampaignTypeModel->fnSel();
            for($n=0; $n<$count(aa); $n++) {
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
