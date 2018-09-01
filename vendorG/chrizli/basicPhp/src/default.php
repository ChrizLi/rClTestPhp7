<html>
<!--------------------------------------
---- 20180205V1.0.0, ListlChr, init
---- 
----------------------------------------
---- What this code does:
----
----------------------------------------
---- known Errors/missing features:
---- 
--------------------------------------->
<head>
	<title>default.php</title>
    <?php
        function    fnPathNormalize (
            string  $sPathFq,
            bool    $bDelimiterAtEnd = true
        ):  string  {
            $sDelimiter     = '\\';
            $sDelimiterRev  = '/';
            return  str_replace($sDelimiter, $sDelimiterRev, $sPathFq);
        }
        
        function    fnPathArrayNormalize (
            array   $oAr,
            bool    $bDelimiterAtEnd = true
        ):  array   {
            $sDelimiter     = '\\';
            $sDelimiterRev  = '/';
            $oOutAr         = array();
            $oOutAr         = str_replace($sDelimiter, $sDelimiterRev, $oAr);
            return          $oOutAr;
        }
        
        function    fnFolderArrayGet (
            string  $sPathFq,
            bool    $bRelative = true
        ):  array   {
            $oAr    = glob($sPathFq . '/*' , GLOB_ONLYDIR);
            if     ($bRelative) {
                $sRoot  = fnSiteRootDirGet();
                $oAr    = fnPathArrayNormalize($oAr);
                $oAr    = str_replace($sRoot, '', $oAr);
            }
            return  $oAr;
        }
        
        function    fnFileArrayGet (
            string  $sPathFq
        ):  array   {
            if (substr($sPathFq, strLen($sPathFq)-2, 2)!='\\')
                $sPathFq .='\\';
            $oOutAr = array();
            $oAr    = scanDir($sPathFq);
            forEach($oAr as $sItem) {
                if (is_file($sPathFq.$sItem)) {
                    array_push($oOutAr, $sItem);
                }
            }
            return  $oOutAr;
        }
        
        function    fnArrayToLinkListGet (
            array   $oAr
        ):  string  {
            $sOut   = "<ul>";
            forEach($oAr as $sItem)
            $sOut  .= "<li><a href='{$sItem}'>{$sItem}</a></li>";
            return  $sOut . "</ul>";
        }
        
        function    fnCurrentDirGet(): string {
            return  getCwd();
        }
        
        function    fnSiteRootDirGet(): string {
            return  $_SERVER['DOCUMENT_ROOT'];
        }
        
        function    fnFolderArrayDriveDrop (
            array   $oAr
        ):  array   {
            $oOutAr = array();
            forEach($oAr as $sItem) {
                if (substr($sItem, 1,1)==':') {
                    // c://php
                    // 0123456
                    array_push($oOutAr, substr($sItem,3,strLen($sItem)-3));
                }   else {
                    array_push($oOutAr, $sItem);
                }
            }
            return  $oOutAr;
        }
    ?>
</head>
<body>
	<h1>StartPage</h1>
    <ul>
        <li><a href="http://localhost:8721">php7 dev</a></li>
        <li><a href="http://localhost:8722">php7 test</a></li>
        <li><a href="http://localhost:8723">php7 prod</a></li>
    </ul>
    <ul>
        <li><a href="http://localhost:8721/php.php">php7Info dev</a></li>
        <li><a href="http://localhost:8722/php.php">php7Info test</a></li>
        <li><a href="http://localhost:8723/php.php">php7Info prod</a></li>
    </ul>
    <?php
        $sPathFq    = fnCurrentDirGet();
        echo "<h3>{$sPathFq}</h3>";
        
        $oFolderAr  = fnFolderArrayGet($sPathFq, true);
        $oFolderAr  = fnPathArrayNormalize($oFolderAr);
        echo fnArrayToLinkListGet($oFolderAr);
        
        $oFileAr    = fnFileArrayGet($sPathFq);
        $oFileAr    = fnPathArrayNormalize($oFileAr);
        echo fnArrayToLinkListGet($oFileAr);        
    ?>
</body>
</html>
