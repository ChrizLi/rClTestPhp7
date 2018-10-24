<?php

class   CFactory
extends ChrizLi/CBase
{
    private     $oClassName;
    
    public      function    __construct($_o){
                $this->oClassName;
    }
    
    public      function    fnGet(
                $_o = ''
            )   {
                if ($_o ===''){
                    return new $this->oClassName;
            }   else    {
                return  $_o;
            }        
    }
}

?>
