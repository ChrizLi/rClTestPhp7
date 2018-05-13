<?php

//namespace ChrizLi/basic;

class   CXltFile
extends CBase   {
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

    private 
            $sSlash         = "/",
            $sBackSlash     = "\\",
            $sDelimiterRev  = "";
    
    public  function    __construct(
            object      $_oObjectAdmin, 
            object      $_oXltString     = null) {
            require_once("CObjectAdmin");
            require_once("CXltString");
    }

    private function    fnInit(): void {
            if (DIRECTORY_SEPARATOR == $this->$sSlash) {
                $this->sDelimiterRev = $this->sBackSlash;
            }   else {
                $this->sDelimiterRev = $this->sSlash;
            }
    }
    
    public  function    fnDelimiterGet(): string {
            return DIRECTORY_SEPARATOR;
    }
    
    public  function    fnDelimiterRevGet(): string {
            return $this->sDelimiterRev;
    }
    
    public  function    fnNormalize(
            string  $s, 
            bool    $bSuffixAdd = false
            ): string {
            $sOut = str_replace($this->sDelimiterRev, DIRECTORY_SEPARATOR, $s);
        
            // add suffix
            if ($bSuffixAdd and (subStr($sOut, -1) != DIRECTORY_SEPARATOR)) {
                $sOut .= DIRECTORY_SEPARATOR;
            }
            // drop suffix
            if (!$bSuffixAdd and (subStr($sOut, -1) == DIRECTORY_SEPARATOR)) {
                $sOut = subStr($sOut, 0, strLen($sOut)-1);
            }
            return  $sOut;
    }
    
    public  function    fnFileNameFullGet(string $sFileNameFq): string {
            // return filename of the FqPath C:\folder\filename.txt -> filename.txt
            $nExtLen    = 0;
            $sOut       = $this->fnNormalize($sFileNameFq);
            // cut path, if path only is given => (right(1)=delimiter) then output len(0)
            if (subStr($sOut, -1) == DIRECTORY_SEPARATOR) {
                $sOut = ""; // path without file was given, so output=""
            }   else {
                $sOut = $this->oXltString->fnListLastGet($sOut, DIRECTORY_SEPARATOR);
            }
            //$sOut = CXltString::FnListLastGet($sOut, DIRECTORY_SEPARATOR);
            return  $sOut;
    }
    
    public  function    fnFileExtensionGet(string $sFileNameFq): string {
            // return fileExtension, e.g. //host/share/folder/filename.ext -> ext
            $oAr    = pathInfo($this->fnNormalize($sFileNameFq));
            return  $oAr['extension'];
    }
    
    public  function    fnFileNameGet(string $sFileNameFq): string {
            // return fileName only e.g. filename.ext -> filename
            $oAr        = pathInfo($this->fnNormalize($sFileNameFq));
            return      $oAr['filename'];
    }
    
    public  function    fnFilePathGet(string $sFileNameFq): string {
            // return path only, e.g. \\host\share\folder\filename.ext -> \\host\share\folder\
            $oAr        = pathInfo($this->fnNormalize($sFileNameFq));
            $sOut       = $oAr['dirname'].DIRECTORY_SEPARATOR;
            return      $sOut;
    }
    
    public  function    fnFileExtensionUpd(string $sFileNameFq, string $sNew): string {
            // return given path while extension replace. E.g  /folder/filename.ext -> /folder/filename.new
            return      $this->fnFilePathGet($sFileNameFq).$this->fnFileNameGet($sFileNameFq) .".". $sNew;
    }
    
    public  function    fnFilePrefixUpd(string $sFileNameFq, string $sPrefix, string $sSuffix): string {
            // we add prefix before filename and suffix behind filename
            return $this->fnFilePathGet($sFileNameFq).$sPrefix.$this->fnFileNameGet($sFileNameFq).$sSuffix.".".$this->fnFileExtensionGet($sFileNameFq);
    }
    
    public  function    fnSiteRootGet(): string {
            return      $_SERVER['DOCUMENT_ROOT'];
    }
}
?>
