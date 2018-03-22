<html>
<head>
    <title>TestClass</title>
</head>
<body>
<?php
    
    class CTest
    {
        function    fnSiteRootDirGet()
        {
            return  $_SERVER['DOCUMENT_ROOT'];
        }
    }
   
    echo "x<br>";
    $oTest = new CTest();
    echo get_class($oTest) . "<br>";
    echo get_parent_class($oTest) ."|<br>";
    print_r(get_class_methods($oTest));
    echo "<br>";
    echo $oTest::fnSiteRootDirGet();
?>
</body>
</html>
