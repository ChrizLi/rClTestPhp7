<html>
<head>
<?php
    define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
    require_once(__ROOT__.'/chrizli/test/cclass1.php');
    require_once(__ROOT__.'/chrizli/test/cclass2.php');
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
