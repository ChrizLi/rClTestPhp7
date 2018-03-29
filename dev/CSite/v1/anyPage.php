<html>
<head>
<?php
    require_once('CSite');
    require_once('CSiteStage');
    require_once('CWebServer');
    
    $sIp    = CWebServer::fnIpV4Get();
    $nPort  = CWebServer::fnPortGet();
    $sStage = CSiteStage($sIp, $nPort);
?>
</head>
<body>
<?php
    Ip:     $sIp<br>
    Port:   $nPort<br>
    Stage:  $sStage<br>
?>
</body>
</html>
