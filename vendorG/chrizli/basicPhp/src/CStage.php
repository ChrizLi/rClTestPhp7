<?php

namespace   chrizli\basicPhp;

class       CStage      
extends     CRecordSet
{   // single Stage item like Dev or test or prod
    
    public  function    __construct() {
            parent::__construct(array('sStageId', 'sNameShort', 'oStageBase'));
    }
    
}
?>
