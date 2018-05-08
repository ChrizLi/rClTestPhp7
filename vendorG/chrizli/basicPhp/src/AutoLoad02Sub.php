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
    function fnAutoLoadSetup() {
        //add autoloader to SPL_AUTOLOADER
        $sAutoLoadFileName="CAutoLoad02"; //no extension
        $sPathCur   = pathInfo(__FILE__)['dirname'].DIRECTORY_SEPARATOR;
        require     $sPathCur.$sAutoLoadFileName.'.php';
        $o=new CAutoLoad();
        $ar=array(
            '\vendorG\chrizli\basicPhp'
        );
        forEach($ar as $sFolder){
            $o->fnFolderAdd($sFolder);
        }
        $o->fnRegister();
    }
    fnAutoLoadSetup();
?>
