<!doctype html>
<html lang="en">
<head>
<!-------------------------------------
---- 20180326V1.0.0, ListlChr, Init
----
----------------------------------------
---- what this code does:
---- - template for ChrizLi pageAny.php
---- - including autoloader for chrizli\basic classes
---- 
----------------------------------------
---- missing code/known errors:
----
----------------------------------------->
    <meta charset="utf-8">
    <?php
        function    fnMain()
        {
                    fnAutoLoadInit();
        }

        function    fnAutoLoadInit()
        {
                    //$sBasicFolder   ='/vendorG/chrizli/basicPhp/src/';
                    $sBasicFolder   ='/inetpub/p8721rClTestPhp7dev/vendorG/chrizli/basicPhp/src/';
                    $sNameSpace     ='ChrizLi';
                    require_once $sBasicFolder.'cAutoLoad.php';
                    $oAutoLoad=new  CPsr4Autoloader();
                    $oAutoLoad->register();
                    $oAutoLoad->addNamespace($sNameSpace, $sBasicFolder);
                    $oAutoLoad->addNamespace($sNameSpace, $sBasicFolder.'src');
        }
    ?>
    <title></title>
</head>
<body>
    <header>
    </header>
    <main>
        <article>
        </article>
    </main>
    <footer>
    </footer>
</body>
<?php fnMain();?>
</html>
