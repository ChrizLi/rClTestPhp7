<?php

namespace   chrizli\basicPhp;

class       CPhpSite
extends     CRecordSet
{
    public  function    __construct() {
            parent::__construct(array('sPhpSiteId', 'sServerName', 'nPort', 'oStage', 'oPhpSiteType'));
    }
}
?>
