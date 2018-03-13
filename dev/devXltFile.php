<html>
<head>

<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    echo "root: ". __ROOT__."<br>";
    echo "server:".$_SERVER['DOCUMENT_ROOT']."<br>";
    //echo "fnSite:".fnSiteRootGet()."<br>";
    
    require_once(__ROOT__."\chrizli\basic\cXltFile.php");
    cXltFile::fnInit();
    
    echo "Delimter:".cXltFile::fnDelimiterGet().'|\\<br>';
    echo "DelimterRev:".cXltFile::fnDelimiterRevGet().'|/<br>';
    
    $sPathWinTest='\\my\\sub\\folder';
    echo "normalize:".cXltFile::fnNormalize($sPathWinTest, true).'|\\<br>';
    echo "normalize:".cXltFile::fnNormalize($sPathWinTest, false).'|<br>';
    $sPathWinTest='\\my\\sub\\folder\\';
    echo "normalize:".cXltFile::fnNormalize($sPathWinTest, true).'|\\<br>';
    echo "normalize:".cXltFile::fnNormalize($sPathWinTest, false).'<br>';
    
    $sPathHostFq='\\\Host\Share\folder\filename.ext';
    $sPathDriveFq='C:\folder\filename.ext';
    echo "FileNameFullGet:".cXltFile::fnFileNameFullGet($sPathHostFq).'|filename.ext<br>';
    echo "FileNameFullGet:".cXltFile::fnFileNameFullGet($sPathDriveFq).'|filename.ext<br>';
    echo "FileExtensionGet:".cXltFile::fnFileExtensionGet($sPathDriveFq).'|ext<br>';
    echo "FileNameGet:".cXltFile::fnFileNameGet($sPathDriveFq).'|filename<br>';
    echo "FilePathGet:".cXltFile::fnFilePathGet($sPathDriveFq).'|C:\folder\<br>';
    echo "FileExtensionUpd:".cXltFile::fnFileExtensionUpd($sPathDriveFq,'new').'|C:\folder\filename.new<br>';
    echo "FilePrefixUpd:".cXltFile::fnFilePrefixUpd($sPathDriveFq,'pre_','_suf').'|C:\folder\pre_filename_suf.ext<br>';
    echo "SiteRoot:".cXltFile::fnSiteRootGet().'|c:\iNetPub\rClTestPhp7Dev8721<br>';
?>
</head>
<body>
    <br>x
</body>
</html>
