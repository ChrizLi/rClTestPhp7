<html>
<head>
<?php
    define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
    
    function fnAutoLoad(string $sClassName):string
    {
        $sExt       = '.php';
        $sPath      = '/chrizli/test/';
        $sPathFq    = __ROOT__ . $sPath . $sClassName . $sExt;
        require_once($sPathFq);
        return $sPathFq;
    }
    
    fnAutoLoad('cclass1');
    fnAutoLoad('cclass2');
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
