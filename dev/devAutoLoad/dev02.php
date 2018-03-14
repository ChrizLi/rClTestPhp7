<html>
<head>
<?php
    function autoLoad($className)
    {
        //define("__ROOT__", $_SERVER['DOCUMENT_ROOT']);
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
        
        require $fileName;
        return  $fileName;
    }

    echo autoLoad("/chrizli/test/cTest1");
    //$o = new cTest1();
    

?>
</head>
<body>
</body>
</html>
