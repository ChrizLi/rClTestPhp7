<html>
<head>
    <title>cOutputTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cOutput.php");
    //cOutput::FnInit();
    $sRowEnd    = "|<br>";
    
    //echo "fnServerNameGet():"           .CPhpServer::fnServerNameGet().                       "|locahost".              $sRowEnd;//fg
    cOutput::fnBodyConcat("Hello");
    cOutput::fnBodyConcat(" world");
    echo cOutput::fnBodyGet();
?>
</body>
</html>
