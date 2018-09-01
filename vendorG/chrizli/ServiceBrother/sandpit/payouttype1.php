<html>
<head>
<?php
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/AutoLoad02Sub.php';
        $a=array();
        $a=array('\vendorG\chrizli\sandpit','\vendorG\chrizli\ServiceBrother');
        $oA = fnAutoLoadSetup($a);
        print CXltString::fnLeft("abc",1);
        
        //print_r ($oA->fnGet());
        
        //$o      = new C1();
        //print $o->fnGet();
        $oSoF   = new CPayoutTypeFactory();
        $oSoF   ->fnSet(array('CBVM','MPS'));
        print_r ($oSoF->fnGet());
    }
?>
</head>
<body>
<?php

?>
</body>
<?php fnMain(); ?>
</html>
