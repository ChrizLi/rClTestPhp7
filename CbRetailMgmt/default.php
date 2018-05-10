<html>
<head>
<?php 
    //require="vendor/chrizli/CbRetailMgmt/src/CPage.php";
    //oPage = new CPage();
    //oPage.fnRun();
        
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/AutoLoad02Sub.php';
        //$a=array('\vendorG\chrizli\sandpit');
        $a=array('\CbRetailMgmt\vendorL\chrizli\CbRetailMgmt');
        fnAutoLoadSetup($a);
        //print CXltString::fnLeft("abc",1);
        fnInit();
    }
    
    function fnInit() {
        $oObjectAdmin   = new CObjectAdmin();
        $oRxArg         = new CRxArg();
        $oPage          = new CPage($oObjectAdmin, $oRxArg);
    }
?>
</head>
<body>
    CbRetailCampaignMgmt<br>
</body>
<?php fnMain(); ?>
</html>
