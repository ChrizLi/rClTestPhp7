<?php

class   CStageModelFactory
extends ChrizLi/CBase
{   
    public      function    fnGet(
                $_oStageModel = '',
            )   {
                if ($_oStageModel ===''){
                    return new CStageModel;
            }   else    {
                return  $_oStageModel;
            }
    }
}

?>
