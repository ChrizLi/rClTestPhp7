<html>
<head>
<?php
    error_reporting(E_STRICT);
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/autoLoad03Sub.php';
        fnAutoLoadSetup();
        
        //$oUser = new chrizli\basicPhp\CUser();
        //$oUser->fnSet(array('sId'=>'listlchr', 'sAdminPath'=>'\\BigW10N61014\tempCB$'));
        // samples
        $oC1 = new chrizli\basicPhp\C1();
        $oC1->fnPrint('xy');
    }
    fnMain();
    
?>
</head>
<body>z
</body>
</html>