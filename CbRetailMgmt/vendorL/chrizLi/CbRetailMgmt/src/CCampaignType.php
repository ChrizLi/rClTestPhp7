<?php

namespace   brotherDe\cashback;

class       CCampaignType
            CBase
{
    private 
            $aa         = array(),
            $aa->sId    = "",
            $aa->sName  = "";
            
    public  function    fnSet($_sId, $_sName): void {
            $aa->sId    = $_sId;
            $aa->sName  = $_sName;
    }
    
    public  function    fnGet(): array {
            return $aa;
    }
}

?>
