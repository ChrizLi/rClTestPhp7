<?php

//namespace ChrizLi/basic;

class CXltFile
{
/*--------------------------------------
---- 20180225V1.0.0, ListlChr, init
---- 
----------------------------------------
---- What this code does:
---- provides basic string functions around fileNames
---- - like FnExtensionGet()
---- 
----------------------------------------
---- known Errors/missing features:
---- 
---------------------------------------*/

    private static $sSlash          = "/";
    private static $sBackSlash      = "\\";
    private static $sDelimiterRev   = "";
    
    /*public  static function __construct()
    {
        require_once("CObjectAdmin");
        require_once("CXltString");
    }*/

    public  static function fnInit()
    {
        require_once($_SERVER['DOCUMENT_ROOT']."\chrizli\basic\cXltString.php");
        
        if (DIRECTORY_SEPARATOR == self::$sSlash)
        {
            self::$sDelimiterRev = self::$sBackSlash;
        }
        else
        {
            self::$sDelimiterRev = self::$sSlash;
        }
    }
    
    static  public function fnDelimiterGet(): string
    {
            return DIRECTORY_SEPARATOR;
    }
    
    static  public function fnDelimiterRevGet(): string
    {
            return self::$sDelimiterRev;
    }
    
    static  public function fnNormalize($s, $bSuffixAdd=false): string
    {
        $sOut = str_replace(self::$sDelimiterRev, DIRECTORY_SEPARATOR, $s);
        
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
    
    static public function fnFileNameFullGet($sFileNameFq): string
    {
        // return filename of the FqPath C:\folder\filename.txt -> filename.txt
        $nExtLen    = 0;
        $sOut       = self::FnNormalize($sFileNameFq);
        
        // cut path, if path only is given => (right(1)=delimiter) then output len(0)
        if (subStr($sOut, -1) == DIRECTORY_SEPARATOR)
        {
            $sOut = ""; // path without file was given, so output=""
        }
        else
        {
            $sOut = CXltString::FnListLastGet($sOut, DIRECTORY_SEPARATOR);
        }
        
        //$sOut = CXltString::FnListLastGet($sOut, DIRECTORY_SEPARATOR);
        
        return  $sOut;
    }
    
    static public function fnFileExtensionGet($sFileNameFq): string
    {
        // return fileExtension, e.g. //host/share/folder/filename.ext -> ext
        $oAr    = pathInfo(self::FnNormalize($sFileNameFq));
        return  $oAr['extension'];
    }
    
    static public function fnFileNameGet($sFileNameFq): string
    {
        // return fileName only e.g. filename.ext -> filename
        $oAr    = pathInfo(self::FnNormalize($sFileNameFq));
        return  $oAr['filename'];
    }
    
    static public function fnFilePathGet($sFileNameFq): string
    {
        // return path only, e.g. \\host\share\folder\filename.ext -> \\host\share\folder\
        $oAr    = pathInfo(self::FnNormalize($sFileNameFq));
        $sOut   = $oAr['dirname'].DIRECTORY_SEPARATOR;
        return  $sOut;
    }
    
    static public function fnFileExtensionUpd($sFileNameFq, $sNew): string
    {
        // return given path while extension replace. E.g  /folder/filename.ext -> /folder/filename.new
        return self::FnFilePathGet($sFileNameFq).self::FnFileNameGet($sFileNameFq) .".". $sNew;
    }
    
    static public function fnFilePrefixUpd($sFileNameFq, $sPrefix, $sSuffix): string
    {
        // we add prefix before filename and suffix behind filename
        return self::FnFilePathGet($sFileNameFq).$sPrefix.self::FnFileNameGet($sFileNameFq).$sSuffix.".".self::FnFileExtensionGet($sFileNameFq);
    }
    
    static public function fnSiteRootGet():string
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}
?>
