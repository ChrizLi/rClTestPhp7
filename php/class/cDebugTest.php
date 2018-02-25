<html>
<head>
    <title>cDebugTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cDebug.php");
    //cDebug::FnInit();
    $sRowEnd    = "|<br>";
    $oAr=array("eins","zwei","drei");
    echo "fnArrayToString():"                    .cDebug::fnArrayToString($oAr).                       "|eins|zwei|drei".       $sRowEnd;//fg
    echo "fnBoolToString():"                     .cDebug::fnBoolToString(true).                       "|true".       $sRowEnd;//fg
    echo "fnBoolToString():"                     .cDebug::fnBoolToString(false).                      "|false".      $sRowEnd;//fg
    
?>
</body>
</html>
