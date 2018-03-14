<html>
<head>
<?php
    define("__ROOT__", $_SERVER['DOCUMENT_ROOT']);
    
    function fnAutoLoader(string $sClass)
    {
        require_once(__ROOT__."/chrizli/test/".$sClass.".php");
    }

    fnAutoLoader("cTest1");
    $o = new cTest1();
    echo $o->fn().'<br>';
    
    //require_once(__ROOT__."/chrizli/test/"."cTest2".".php");
    $o2 = new chrizli\test\cTest2();
    echo $o2->fn().'<br>';

?>
</head>
<body>
</body>
</html>
