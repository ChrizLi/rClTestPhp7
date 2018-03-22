<html>
<head>
    <title>cUserTest.php</title>
</head>
<body>
<?php
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cUser.php");
    cUser::FnInit();
    $sRowEnd    = "|<br>";
    echo "fnAdAccountGet():"                    .cUser::fnAdAccountGet().                       "|al13\cl".       $sRowEnd;//fg
    echo "fnAdAccountNameGet():"                .cUser::fnAdAccountNameGet().                   "|cl".       $sRowEnd;//fg
    echo "fnAdDomainGet():"                     .cUser::fnAdDomainGet().                        "|AL13".       $sRowEnd;//fg
?>
</body>
</html>