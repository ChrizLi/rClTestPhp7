<?php

namespace   chrizli\basicPhp;

class       CStageBase
extends     CEnum
{
    public  function    __construct() {
            parent::__construct(array('dev', 'test', 'prod'));
    }
}
?>
