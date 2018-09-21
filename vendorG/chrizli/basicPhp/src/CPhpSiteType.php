<?php

namespace   chrizli\basicPhp;

class       CPhpSiteType
extends     CRecordSet
{
    public  function    __construct() {
            parent::__construct(array('sPhpSiteTypeId', 'sNameShort'));
    }
}
?>
 