<?php
    /*
        cClass.php
            namespace x\y;
            class cClass{}
    
        caller.php
            option 1:
            //namespace;
            new x\y\cClass;
        
            option 2:
            namespace x;
            new y\cClass;
        
            option 3:
            namespace x\y;
            new cClass;
            
            option 4:
            use x\y as z;
            new z\cClass;
    */

    //namespace chrizli;
    use chrizli\test as z;
    
    fnAutoLoadInit();
    function fnAutoLoadInit() {
        define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
        //set_include_path(get_include_path() . PATH_SEPARATOR . __ROOT__ . '/chrizli/test/');
        //set_include_path(get_include_path() . PATH_SEPARATOR . __ROOT__ . '/vendorG/chrizli/basicPhp/sandpit/nameSpace');
        //set_include_path(get_include_path() . PATH_SEPARATOR . __ROOT__ . '/vendorG/chrizli/basicPhp/sandpit/nameSpace');
    }
    
    function fnAutoLoad(string $sClassName):string {
        $sExt       = '.php';
        $sPathFq    = $sClassName . $sExt;
        require_once($sPathFq);
        return $sPathFq;
    }
    fnAutoLoad('cclass1ns');
    fnAutoLoad('cclass2ns');
    
    //echo get_include_path().'<br>';
    
    //$oC1= new z\cclass1ns();
    $oC1= new chrizli\test\cclass1ns();
    $oC2= new z\cclass2ns();
    
    echo $oC1->fnOut().'<br>';
    echo $oC2->fnOut().'<br>';
    
?>
