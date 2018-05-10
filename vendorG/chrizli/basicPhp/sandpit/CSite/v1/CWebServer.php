<?php

Class CWebServer
{
    public  static function fnIpV4Get()
    {
            return $_SERVER['ipAddr'];
    }
    
    public  static function fnPortGet()
    {
            return $_SERVER['port'];
    }
}

?>
