<?php

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

namespace   chrizli\basicPhp;

class       CXltFile
extends     CBase   
{
    private static
            $sSlash         = "/",
            $sBackSlash     = "\\",
            $sDelimiterRev  = "";
    
    private static  function    fnDelimiterInit(): void {
            if (DIRECTORY_SEPARATOR == self::$sSlash) {
                self::$sDelimiterRev = self::$sBackSlash;
            }   else    {
                self::$sDelimiterRev = self::$sSlash;
            }
    }
    
    static  public  function    fnDelimiterGet(): string {
            return  DIRECTORY_SEPARATOR;
    }
    
    static  public  function    fnDelimiterRevGet(): string {
            self::fnDelimiterInit();
            return  self::$sDelimiterRev;
    }
    
    static  public  function    fnNormalize(
            string  $s,
            bool    $bSuffixUpd = false,    // should suffix be updated?
            bool    $bSuffixAdd = false     // if $bSuffixUpd=true then drop existing or add missing DIRECTORY_SEPARATOR ?
            ):      string {
            $sOut = str_replace(self::$sDelimiterRev, DIRECTORY_SEPARATOR, $s);
            if     ($bSuffixUpd) {
                if ($bSuffixAdd) {
                    if (subStr($sOut,-1)!=DIRECTORY_SEPARATOR) {
                        $sOut .=DIRECTORY_SEPARATOR;
                    }
                }   else {
                    if (subStr($sOut,-1)==DIRECTORY_SEPARATOR) {
                        $sOut = subStr($sOut, 0, strLen($sOut)-1);
                    }
                }
            }
            return  $sOut;
    }
    
    static  public  function    fnFileNameFullGet(string $sFileNameFq): string {
            //      return filename of the FqPath C:\folder\filename.txt -> filename.txt
                    $nExtLen    = 0;
                    $sOut       = self::fnNormalize($sFileNameFq);
            //      cut path, if path only is given => (right(1)=delimiter) then output len(0)
            if     (subStr($sOut, -1) == DIRECTORY_SEPARATOR) {
                    $sOut = ""; // path without file was given, so output=""
            }       else    {
                    $sOut = CXltString::fnListLastGet($sOut, DIRECTORY_SEPARATOR);
            }
            return  $sOut;
    }

    static  public  function fnFileExtensionGet(string $sFileNameFq): string {
            //      return fileExtension, e.g. //host/share/folder/filename.ext -> ext
            if     (striPos($sFileNameFq, '.',0)> 0) {
                    $oAr    = pathInfo(self::fnNormalize($sFileNameFq));
            }       else {
                    $oAr['extension']='';
            }
            return  $oAr['extension'];
    }
    
    static  public  function fnFileNameGet(string $sFileNameFq): string {
            //      return fileName only e.g. filename.ext -> filename
            $oAr    = pathInfo(self::fnNormalize($sFileNameFq));
            return  $oAr['filename'];
    }
    
    static  public  function fnFilePathGet(string $sFileNameFq): string {
                    // return path only, e.g. \\host\share\folder\filename.ext -> \\host\share\folder\
                    // fixes issue if last char is delimiter (pathInfo drops last folder then)
                    $sFileNameFq = self::fnNormalize($sFileNameFq);
                    $a      = pathInfo(self::fnNormalize($sFileNameFq));
                    $sOut   = $a['dirname'];
            if     (subStr($sFileNameFq,-1)==DIRECTORY_SEPARATOR) {
                    $sOut .= DIRECTORY_SEPARATOR . $a['filename'];
            }
            return  $sOut.DIRECTORY_SEPARATOR;
    }
    
    static  public  function fnFileExtensionUpd(string $sFileNameFq, string $sNew): string {
            //      return given path while extension replace. E.g  /folder/filename.ext -> /folder/filename.new
            return  self::fnFilePathGet($sFileNameFq).
                    self::fnFileNameGet($sFileNameFq).".". $sNew;
    }
    
    static  public  function fnFilePrefixUpd(
            string  $sFileNameFq,
            string  $sPrefix     = '', 
            string  $sSuffix     = ''
            ):      string {
            //      we add prefix before filename and suffix behind filename
            return               self::fnFilePathGet($sFileNameFq).
                    $sPrefix.    self::fnFileNameGet($sFileNameFq).
                    $sSuffix.".".self::fnFileExtensionGet($sFileNameFq);
    }
    
    static  public  function fnSiteRootGet(): string {
            return  $_SERVER['DOCUMENT_ROOT'];
    }
}
?>
