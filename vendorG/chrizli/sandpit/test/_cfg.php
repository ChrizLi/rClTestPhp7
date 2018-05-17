<?php
//20180515V1.0.0,   ListlChr,   default cfg for all PhpUnit Tests in this is ComposerApp
//usage:    require_once('_cfg.php');
//
//  define root of website
if ($_SERVER['DOCUMENT_ROOT'] == null) {
    define('__ROOT__', 'C:/inetpub/p8721rClTestPhp7dev');
}   else {
    define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
}
?>
