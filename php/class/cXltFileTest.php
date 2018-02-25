<html>
<head>
    <title>cXltFileTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cXltString.php");
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cXltFile.php");
    CXltFile::FnInit();
    $sRowEnd    = "|<br>";
    
    echo "FnDelimiterGet():"                    . CXltFile::FnDelimiterGet()   .                                "|Slash".           $sRowEnd;//fg
    echo "FnDelimiterRevGet():"                 . CXltFile::FnDelimiterRevGet().                                "|BackSlash".       $sRowEnd;//fg
    echo "FnNormalize():"                       . CXltFile::FnNormalize("\\\\host\\share\\folder\\file.txt").   "|//".              $sRowEnd;//fg
    echo "FnNormalize():"                       . CXltFile::FnNormalize("//host/share/folder/file.txt").        "|//".              $sRowEnd;//fg
    $sFq = "//host/share/folder/filename.ext";
    echo "FnFileNameFullGet():"                 . CXltFile::FnFileNameFullGet($sFq).                            "|filename.ext".    $sRowEnd;//fg
    echo "FnFileExtensionGet():"                . CXltFile::fnFileExtensionGet($sFq).                           "|ext".             $sRowEnd;//fg
    echo "FnFileNameGet():"                     . CXltFile::fnFileNameGet($sFq).                                "|filename".                    $sRowEnd;//fg
    echo "FnFilePathGet():"                     . CXltFile::fnFilePathGet($sFq).                                "|//host/share/folder/".        $sRowEnd;//fg
    echo "FnFileExtensionUpd():"                . CXltFile::fnFileExtensionUpd($sFq,"new").                     "|/folder/filename.new".        $sRowEnd;//fg
    echo "fnFilePrefixUpd():"                   . CXltFile::fnFilePrefixUpd($sFq,"Pre","Suf").                  "|/folder/PreFilenameSuf.ext".  $sRowEnd;//fg
    echo "fnScriptFileNameFqGet():"             . CXltFile::fnScriptFileNameFqGet().                            "|/cXltFileTest.php".           $sRowEnd;//fg
?>
</body>
</html>
