<html>
<head>
<?php
    function fnMain() {
        require '\inetpub\p8721rClTestPhp7dev\vendorG\chrizli\basicPhp\src\CAutoLoad02.php';
        
        $o=new CAutoLoad();
        $sF1='\vendorG\chrizli\basicPhp';
        $o->fnFolderAdd($sF1);
        if(false) {
            $o->fnClassLoad('CXltString');
        } else {
            $o->fnRegister();
        }
        print CXltString::fnLeft("abc",1);
        print CXltString::fnRight("abc",1);
        print CXltFile::fnFileExtensionGet("file.ext");
    }
?>
</head>
<body>
<?php
?>
</body>
<?php fnMain(); ?>
</html>
