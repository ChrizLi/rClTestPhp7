<html>
<head>
<?php
    function fnMain() {
        include '../src/AutoLoad02Sub.php';
        print CXltString::fnLeft("abc",1);
        //print CXltString::fnRight("abc",1);
        //print CXltFile::fnFileExtensionGet("file.ext");
    }
?>
</head>
<body>
<?php

?>
</body>
<?php fnMain(); ?>
</html>
