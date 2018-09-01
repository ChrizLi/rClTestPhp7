<?php
/*----------------------------------------------------------
---- 20180508V1.0.0,    ListlChr,   Init
---- 
------------------------------------------------------------
---- what this code does:
---- - autoloader Setup for SPL_Autoloader
---- - add all required folders too
------------------------------------------------------------
---- known errors/missing features:
---- 
----------------------------------------------------------*/
    function    fnAutoLoadSetup($_aFolder=array()) {
                //add autoloader to SPL_AUTOLOADER
                $sAutoLoadFileName  = "CAutoLoad02"; //no extension
                $sPathCur           = pathInfo(__FILE__)['dirname'].DIRECTORY_SEPARATOR;
                require               $sPathCur.$sAutoLoadFileName.'.php';
                $o                  = new CAutoLoad();
                array_push($_aFolder, '\vendorG\chrizli\basicPhp\src');
                array_push($_aFolder, '\vendor\phpunit\phpunit\src');
                array_push($_aFolder, '\vendor\phpunit\phpunit\src\Framework');
                array_push($_aFolder, '\vendor\phpunit\phpunit\src\Runner');
                array_push($_aFolder, '\vendor\phpunit\phpunit\src\TextUi');
                array_push($_aFolder, '\vendor\phpunit\phpunit\src\Util');
                $_aFolder           = array_unique($_aFolder);
                $o->fnFolderAdd($_aFolder);
                $o->fnRegister();
                return  $o;
    }
    //fnAutoLoadSetup();
?>
