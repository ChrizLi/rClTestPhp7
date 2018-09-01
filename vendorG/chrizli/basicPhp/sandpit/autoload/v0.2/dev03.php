<html>
<head>
<?php
    define("__ROOT__", $_SERVER['DOCUMENT_ROOT']);
    function autoLoad($className)
    {
        //require_once(__ROOT__."/chrizli/test/".$sClass.".php");
        $className= ltrim($className, '\\');
        $fileName='';
        $nameSpace='';
        if ($lastNsPos  = strrpos($className, '\\'))
        {
            $nameSpace  = substr($className, 0, $lastNsPos);
            $className  = substr($className, $lastNsPos+1);
            $fileName   = str_replace('\\', DIRECTORY_SEPARATOR, $nameSpace). DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';
        
        require __ROOT__.$fileName;
        return  __ROOT__.$fileName;
    }

    echo autoLoad("/chrizli/test/cTest1").'<br>';
    echo autoLoad("/chrizli/test/cTest2").'<br>';
    $o1 = new cTest1();
    $o2 = new chrizli\test\cTest2();
    echo $o1->fn();
    echo $o2->fn();
    
    

?>
</head>
<body>
</body>
</html>
