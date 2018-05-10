<html>
<head>
<?php
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/AutoLoad02Sub.php';
        $a=array();
        $a=array('\vendorG\chrizli\sandpit');
        fnAutoLoadSetup($a);
        print CXltString::fnLeft("abc",1);
        
        $o = new C1();
        print $o->fnGet();
    }
?>
</head>
<body>
<?php

?>
</body>
<?php fnMain(); ?>
</html>
