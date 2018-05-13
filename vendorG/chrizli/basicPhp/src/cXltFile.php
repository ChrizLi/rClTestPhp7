<?php

//namespace ChrizLi/basic;
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
class       CXltFile
extends     CBase   {
    private 
            $sSlash         = "/",
            $sBackSlash     = "\\",
            $sDelimiterRev  = "";
    
    public  function    __construct(
            object      $_oObjectAdmin, 
            object      $_oXltString     = null
            ): void {
            require_once("CObjectAdmin");
            require_once("CXltString");
    }
    
    static  public  function fnInit(): void {
            require_once( $_SERVER['DOCUMENT_ROOT']."\chrizli\basic\cXltString.php");
            if (DIRECTORY_SEPARATOR == self::$sSlash) {
                self::$sDelimiterRev = self::$sBackSlash;
            }   else    {
                self::$sDelimiterRev = self::$sSlash;
            }
    }
    
    static  public  function fnDelimiterGet(): string {
            return  DIRECTORY_SEPARATOR;
    }
    
    static  public  function fnDelimiterRevGet(): string {
            return  self::$sDelimiterRev;
    }
    
    static  public  function fnNormalize(
            string  $s, 
            bool    $bSuffixAdd = false
            ):      string {
            $sOut = str_replace(self::$sDelimiterRev, DIRECTORY_SEPARATOR, $s);
            //      add suffix
            if ($bSuffixAdd and (subStr($sOut, -1) != DIRECTORY_SEPARATOR)) {
                $sOut .= DIRECTORY_SEPARATOR;
            }
            //      drop suffix
            if (!$bSuffixAdd and (subStr($sOut, -1) == DIRECTORY_SEPARATOR)) {
                $sOut = subStr($sOut, 0, strLen($sOut)-1);
            }
            return  $sOut;
    }
    
    static  public  function fnFileNameFullGet(string $sFileNameFq): string {
            //      return filename of the FqPath C:\folder\filename.txt -> filename.txt
            int     $nExtLen    = 0;
            string  $sOut       = self::fnNormalize($sFileNameFq);
            //      cut path, if path only is given => (right(1)=delimiter) then output len(0)
            if     (subStr($sOut, -1) == DIRECTORY_SEPARATOR) {
                    $sOut = ""; // path without file was given, so output=""
            }       else    {
                    $sOut = CXltString::FnListLastGet($sOut, DIRECTORY_SEPARATOR);
            }
            return  $sOut;
    }
    
    public  function fnFilePrefixUpd(
            string  $sFileNameFq, 
            string  $sPrefix, 
            string  $sSuffix
            ):      string {
            //      we add prefix before filename and suffix behind filename
            return  self::fnFilePathGet($sFileNameFq) .$sPrefix .self::fnFileNameGet($sFileNameFq).$sSuffix. ".". self::fnFileExtensionGet($sFileNameFq);
    }

    static  public  function fnFileExtensionGet(string $sFileNameFq): string {
            //      return fileExtension, e.g. //host/share/folder/filename.ext -> ext
            $oAr    = pathInfo(self::fnNormalize($sFileNameFq));
            return  $oAr['extension'];
    }
    
    static  public  function fnFileNameGet(string $sFileNameFq): string {
            //      return fileName only e.g. filename.ext -> filename
            $oAr    = pathInfo(self::fnNormalize($sFileNameFq));
            return  $oAr['filename'];
    }
    
    static  public  function fnFilePathGet(string $sFileNameFq): string {
            //      return path only, e.g. \\host\share\folder\filename.ext -> \\host\share\folder\
            $oAr    = pathInfo(self::fnNormalize($sFileNameFq));
            return  $oAr['dirname'].DIRECTORY_SEPARATOR;
    }
    
    static  public  function fnFileExtensionUpd(string $sFileNameFq, string $sNew): string {
            //      return given path while extension replace. E.g  /folder/filename.ext -> /folder/filename.new
            return  self::fnFilePathGet($sFileNameFq).self::fnFileNameGet($sFileNameFq) .".". $sNew;
    }
    
    static  public  function fnFilePrefixUpd(
            string  $sFileNameFq, 
            string  $sPrefix     = '', 
            string  $sSuffix     = ''
            ):      string {
            //      we add prefix before filename and suffix behind filename
            return  self::fnFilePathGet($sFileNameFq).$sPrefix.self::fnFileNameGet($sFileNameFq).$sSuffix.".".self::fnFileExtensionGet($sFileNameFq);
    }
    
    static  public  function fnSiteRootGet(): string {
            return  $_SERVER['DOCUMENT_ROOT'];
    }
}
?>
