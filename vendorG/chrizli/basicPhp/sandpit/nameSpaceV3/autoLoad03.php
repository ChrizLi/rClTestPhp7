<html>
<head>
<?php
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/sandpit/nameSpaceV3/autoLoad03Sub.php';
        fnAutoLoadSetup();
        
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