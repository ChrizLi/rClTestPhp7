<html>
<head>

<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    $sAutoload = __ROOT__.'/vendor/autoload.php';
    require_once $sAutoload;
    echo $sAutoload;
    Kint::dump($GLOBALS, $_SERVER);
    //Kint_Renderer_Rich::$theme = 'solarized.css';
    
    function fnTest()
    {
        return "ss";
    }
    
    function fnTest2(string $s="z"):string
    {return $s.$s;}
    
    $sTemp = "Hello world";
    $st=array('s'=>'x');
    d($st);
    d(fnTest());
    d(fnTest2("Hello World!"));
    d(1);
?>
</head>
<body>
    <br>x
</body>
</html>
