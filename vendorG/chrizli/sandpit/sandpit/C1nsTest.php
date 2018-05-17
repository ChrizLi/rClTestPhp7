<?php
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/AutoLoad02Sub.php';
        $a=array('\vendorG\chrizli\sandpit\src','\vendorG\chrizli\basicPhp\sandpit\nameSpace');
        fnAutoLoadSetup($a);
        print CXltString::fnLeft("abc",1);
        
        define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
        
        function fnAutoLoad(string $sClassName): void {
            $sPathFq    = $sClassName . '.php';
            require_once($sPathFq);
        }
        fnAutoLoad(__ROOT__.'/vendorG/chrizli/basicPhp/sandpit/nameSpace/cclass1ns');
        //fnAutoLoad('cclass2ns');
        $o31 = new chrizli\test\CClass1ns();
        
        //$o1 = new C1();
        $o1 = new C1();
        $o1->fnPrint('o1');
        $o2 = new C2();
        $o2->fnPrint('o2');
        print 'x';
        
    
    }
    fnMain();
?>
