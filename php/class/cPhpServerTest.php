<html>
<head>
    <title>cPhpServerTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cDebug.php");
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cPhpServer.php");
    cPhpServer::FnInit();
    $sRowEnd    = "|<br>";
    
    echo "fnServerNameGet():"           .CPhpServer::fnServerNameGet().                       "|locahost".              $sRowEnd;//fg
    echo "fnServerPortGet():"           .CPhpServer::fnServerPortGet().                       "|8721".                  $sRowEnd;//fg
    echo "fnServerNameNormalize():"     .CPhpServer::fnServerNameNormalize("10.5.129.52").    "|TestMyBeip".            $sRowEnd;//fg
    echo "fnServerNameNormalize():"     .CPhpServer::fnServerNameNormalize("EuBigWb67152").   "|TestMyBeip".            $sRowEnd;//fg
    echo "fnServerStageGet():"          .CPhpServer::fnServerStageGet().                      "|dev".                   $sRowEnd;//fg
    echo "fnStageCandidateGet():"       .CDebug::fnArrayToString(CPhpServer::fnStageCandidateGet()).  "|DEV|TEST|PROD". $sRowEnd;//fg
    echo "fnServerStageIsDev():"        .CDebug::fnBoolToString(CPhpServer::fnServerStageIsDev()).                    "|true".                  $sRowEnd;//fg
    echo "fnServerStageIsTest():"       .CDebug::fnBoolToString(CPhpServer::fnServerStageIsTest()).                   "|false".                 $sRowEnd;//fg
    echo "fnServerStageIsProd():"       .CDebug::fnBoolToString(CPhpServer::fnServerStageIsProd()).                   "|false".                 $sRowEnd;//fg
    echo "fnRootFolderGet():"           .CPhpServer::fnRootFolderGet().                         "|".                 $sRowEnd;//fg

?>
</body>
</html>
