<?php
    class CFile
    {
        public static function __construct ()
        {
            return this;
        }
        
        public static function fnFileExists(string: $sFqFileName): boolean
        {
            return file_exists(self::FnNormalize($sFqFileName));
        }
        
        public static function fnFileDel(string $sFqFileName): boolean
        {
            return unlink(self::FnNormalize($sFqFileName));
        }
        
        public static function fnFileTxtWrite
        (
            string  $sFqFileName,
            string  $sContent,
            boolean $bAppend
        )
        {
            $sFqFileName = self::FnNormalize($sFqFileName);
            if($bAppend)
            {
                $sMode = "a";
            }
            else
            {
                $sMode = "w";
            }
            $oFs = fOpen($sFqFileName, $sMode);
            fWrite($oFs, $sContent);
            fClose($oFs);
        }
        
        public static function fnFileTxtRead
        (
            string  $sFqFileName
        ):  string
        {
            $sFqFileName = self::FnNormalize($sFqFileName);
            $oFs    = fOpen($sFqFileName, "r");
            $sOut   = fRead($oFs, Size($sFqFileName));
            return  $sOut;
        }
        
        public static function fnFolderCreate(string $sFqFileName): boolean
        {
            $sFqFileName = self::FnNormalize($sFqFileName);
            return mkDir($sFqFileName);
        }
        
        public static function fnFileHandleUniqueGet(string sPath, string sPrefix): string
        {   // returns FileHandle to uniqueFile
            // windows can handle ony left($sPrefix,3)
            return tempNam($sPath, $sPrefix);
        }
        
        public static function fnFolderListGet(string $sPath): array
        {
            
        }
        
        public static function fnFileListGet(string $sPath): array
        {
        }
        
        /*public static function fnFileAttributeSel()
        {
        }
        
        public static function fnFileAttributeSet()
        {
        }
        */
        
    }
?>
