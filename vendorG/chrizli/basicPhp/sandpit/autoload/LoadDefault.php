<html>
<head>
<?php
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/AutoLoad02Sub.php';
        fnAutoLoadSetup();
        print CXltString::fnLeft("abc",1);
        print CXltString::fnRight("abc",1);
        //print CXltFile::fnFile    ExtensionGet("file.ext");
    }
?>
</head>
<body>
<?php

?>
</body>
<?php fnMain(); ?>
</html>
