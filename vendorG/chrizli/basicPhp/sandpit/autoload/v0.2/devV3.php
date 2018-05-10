<html>
<head>
<?php
    fnAutoLoadInit();
    function fnAutoLoadInit()
    {
        define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
        set_include_path(get_include_path() . PATH_SEPARATOR . __ROOT__ . '/chrizli/test/');
    }
    
    function fnAutoLoad(string $sClassName):string
    {
        $sExt       = '.php';
        $sPathFq    = $sClassName . $sExt;
        require_once($sPathFq);
        return $sPathFq;
    }
    fnAutoLoad('cclass1');
    fnAutoLoad('cclass2');
    
    echo get_include_path().'<br>';
    
    $oC1= new cclass1();
    $oC2= new cclass2();
    
    echo $oC1->fnOut().'<br>';
    echo $oC2->fnOut().'<br>';
?>
</head>
<body>
devAutoLoad\devV1.php<br>
</body>
</html>
