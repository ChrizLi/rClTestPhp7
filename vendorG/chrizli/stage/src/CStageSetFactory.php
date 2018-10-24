<?php

class   CStageModelFactory
extends ChrizLi/CBase
{   
    public      function    fnGet(
                $_oStageSetModel = '',
            )   {
                if ($_oStageSetModel ===''){
                    return new CStageSetModel;
            }   else    {
                return  $_oStageSetModel;
            }
    }
}

?>
