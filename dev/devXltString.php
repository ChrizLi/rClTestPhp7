<html>
<head>

<?php
    function fnNormalize($s, $bSuffixAdd=false): string
    {
        $sDelimiterRev='\\';   
        $sOut = str_replace($sDelimiterRev, DIRECTORY_SEPARATOR, $s);
        
        // add suffix
        if ($bSuffixAdd and (subStr($sOut, -1) != DIRECTORY_SEPARATOR))
        {
            $sOut .= DIRECTORY_SEPARATOR;
        }
        
        // drop suffix
        if (!$bSuffixAdd and (subStr($sOut, -1) == DIRECTORY_SEPARATOR))
        {
            $sOut = subStr($sOut, 0, strLen($sOut)-1);
        }
        return $sOut;
    }

    function fnSiteRootGet():string
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }

    define('__ROOT__', dirname(dirname(__FILE__)));
    echo "root: ". __ROOT__."<br>";
    echo "server:".$_SERVER['DOCUMENT_ROOT']."<br>";
    echo "fnSite:".fnSiteRootGet()."<br>";
    /*
    $sPathWinTest='\\my\\sub\\folder';
    echo "normalize:".fnNormalize($sPathWinTest, true)."<br>";
    echo "normalize:".fnNormalize($sPathWinTest, false)."<br>";
    $sPathWinTest='\\my\\sub\\folder\\';
    echo "normalize:".fnNormalize($sPathWinTest, true)."<br>";
    echo "normalize:".fnNormalize($sPathWinTest, false)."<br>";
    */
    
    //require_once("..\php\class\cXltString.php");//ok
    //require_once(__ROOT__."\php\class\cXltString.php");
    require_once($_SERVER['DOCUMENT_ROOT']."\chrizli\basic\cXltString.php");
    echo cXltString::fnRight("abc",2).'<br>';
    
    $sPathWinTest='\\my\\sub\\folder';
    require_once(__ROOT__."\php\class\cXltFile.php");
    echo cXltFile::fnNormalize($sPathWinTest).'<br>';
    $sPathWinTest='\\my\\sub\\folder\\';
    echo cXltFile::fnNormalize($sPathWinTest).'<br>';
?>
</head>
<body>
    <br>x
</body>
</html>
