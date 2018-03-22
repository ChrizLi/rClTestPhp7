<html>
<head>
    <title>cSystemTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cSystem.php");
    //cSystem::FnInit();
    $sRowEnd    = "|<br>";
    
    //echo "fnServerNameGet():"           .CPhpServer::fnServerNameGet().                       "|locahost".              $sRowEnd;//fg
    cOutput::fnSleep(1);
    
    echo cOutput::fnBodyGet();
?>
</body>
</html>
