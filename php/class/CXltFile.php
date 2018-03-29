<?php
    class CXltFile
    {
        private $sSlash         = "/";
        private $sBackSlash     = "\\";
        private $sDelimiter     = $sSlash;
        private $sDelimiterRev  = $sBackSlash;
    
        public static function __construct ()
        {
            return this;
        }
        
        public static function fnDelimiterGet()
        {
            return $sDelimiter;
        }
        
        public static function fnDelimiterRevGet()
        {
            return $sDelimiterRev;
        }
        
        public static function fnNormalize(string $sIn, bool $bIsSuffixAdd=false): string
        {
            //   normalizes given Path
            //   - / will be replaced as \
            //    - last char will be \ (for path)
            //    arguments:
            //    sIn:            Path to normalize, e.g. c:\folder\file.txt, \\host\share\folder\file.txt
            //    bIsSuffixAdd:   tells if folder-delimiter (/|\) should be added at the end of the string
        
            sOut = strReplace($sIn, $sDelimiterRev, $sDelimiter);
        
            // add suffix
            if ($bIsSuffixAdd and oXltString::FnRight($sOut,1) != $sDelimiter)
                $sOut .= $sDelimiter;
            
            return $sOut;
        }
        
        public static function fnFileFullNameGet(string $sFqFileName): string
        {
            // return Filename of the FqPath c:\folder\filename.txt -> filename.txt
            
            // normalize given Path
            $sOut = self::FnNormalize($sFqFileName);
            
            return basename($sFqFilename);
        }
        
        public static function fnFileExtensionGet(string $sFqFileName): string
        {
            // returns the filename extension (right string of the rightest "." (dot)
            // if file has no extension an empty string is returned
            return substr($sFqFileName, 0, strrpos($sFqFileName, '.'));
            return pathInfo($sFqFileName)["extension"];
        }
        
        public static function fnFileNameGet(string $sFqFileName): string
        {
            // we return FileName only:
            // e.g. [c:\folder\filename.txt] -> [filename]
            // how we do it:
            // - cut off path
            // - cut off extension
            $sOut       = self::fnFileFullNameGet($sFqFileName);
            $sExt       = self::fnFileExtensionGet($sOut);
            $nExtLen    = strLen(sExt);
            if($nExtLen > 0)
                $sOut = oXltString::FnLeft($sOut, strLen($sOut)-$nExtLen-1);
            return  $sOut;
            
            $ar = pathInfo('$sFqFileName');
            return left($ar['baseName'],len($ar['baseName']-$ar['extension'])
        }
        
        public static function fnFilePathGet(string $sFqFileName): string
        {
            // we output path only
            // e.g. [c:\folder\filename.txt] -> [c:\folder\]
            // how we do it:
            // - get fnFileFileNameGet()
            // - cut off from given FqFileName
            
            return dirName($sFqFilename);
        }
        
        public static function fnFileExtensionUpd(string $sFqFileName, string $sExtNew): string
        {
            // we upd the FileExtension
            // e.g. [c:\folder\filename.txt] -> [c:\folder\filename.csv]
            // how we do it:
            // - get path
            // - get filename
            // - add path + filename and ExtNew
            return self::FnFilePathGet($sFqFileName).self::fnFileNameGet($sFqFileName) .".". $sExtNew;
        }
        
        public static function fnFilePrefixUpd
        (string $sFqFileName, string $sPrefix, string $sSuffix): string
        {
            // we add Prefix before filename and suffix behind filename
            // e.g. [c:\folder\FileName.txt](Pre,Suf) -> [c:\folder\PreFileNameSuf.txt]
            // how we do it:
            // - get path fnFilePathGet()
            // - get FileName fnFileNameGet()
            // - fet Ext fnFileExtensionGet()
            // - add path+pre+filename+suf+ext
            $sPath = self::FnFilePathGet($sFqFileName);
            $sFile = self::FnFileNameGet($sFqFileName);
            $sExt  = self::FnFileExtensionGet($sFqFileName);
            $sOut  = $sPath . $sPrefix . $sFile . $sSuffix . "." . $sExt;
            return $sOut;
        }
        
        public static function fnScriptFqFileNameGet()
        {
            return __FILE__;
        }
    }
?>
