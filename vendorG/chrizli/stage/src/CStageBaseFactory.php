<?php

class   CStageBaseFactory
extends ChrizLi/CBase
{
    public      function    fnGet(
                $_oStageBaseModel = ''
            )   {
                if ($_oStageBaseModel ===''){
                    return new CStageBaseModel;
            }   else    {
                return  $_oStageBaseModel;
            }        
    }
}

?>
