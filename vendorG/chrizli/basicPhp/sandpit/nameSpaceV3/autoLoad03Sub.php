<?php

    function fnAutoLoadSetup($_aPath=array()) {
        //add autoloader to SPL_AUTOLOADER
        $sAutoLoadFileName  = "CAutoLoad03.php"; //no extension
        $sPathCur           = pathInfo(__FILE__)['dirname'].DIRECTORY_SEPARATOR;
        require_once          $sPathCur.$sAutoLoadFileName;
        $oLoadAuto             = new \chrizli\basicPhp\CAutoLoad();
        // now add default folders
        $oLoadAuto->register();
        define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
        $oLoadAuto->addNameSpace('chrizli\basicPhp', __ROOT__.'\vendorG\chrizli\sandpit\src');
    }

?>
