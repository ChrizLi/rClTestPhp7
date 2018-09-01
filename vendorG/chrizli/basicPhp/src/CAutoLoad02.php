<?php
/*----------------------------------------------------------
---- 20180508V1.0.0,    ListlChr,   Init
---- 
------------------------------------------------------------
---- what this code does:
---- V2 of Autoloader
---- how to use:
---- require '\inetpub\p8721rClTestPhp7dev\vendorG\chrizli\basicPhp\src\CAutoLoad02.php';
---- $autoload=new CAutoLoad;
---- $autoload->fnFolderAdd('/vendorG/chrizli/basicPh/src')
---- $autoload->fnRegister();
---- CXltString::fnRight("abc",1);
------------------------------------------------------------
---- known errors/missing features:
---- 
----------------------------------------------------------*/
class   CAutoLoad
//extends CBase   
                {
    protected   
            $aPath      = array(),
            $sSource    = 'src',
            $sExtension = '.php';
    
    public  function    __construct() {
    }
    
    public  function    fnRegister(): void {
            spl_autoload_register(array($this, 'fnClassLoad'));
    }
    
    public  function    fnFolderAdd(
                    $_xPathFq,
            bool    $_bPrepend=false
            ):  void   {
            if (is_string($_xPathFq)) {
                $aPath = array($_xPathFq);
            }   else {
                $aPath = $_xPathFq;
            }
            forEach($aPath as &$sPath) {
                $sPath = $this->fnPathNormalize($sPath);
            }
            if ($_bPrepend) {
                forEach($aPath as $sPath) {
                    array_unshift($this->aPath, $sPath);
                }
            }   else {
                forEach($aPath as $sPath) {
                    array_push($this->aPath, $sPath);
                }
            }
            $this->aPath = array_unique($this->aPath);
    }
    
    public  function    fnClassLoad(string $sClass): bool {
            // e.g. fnClassLoad("CXltString") loads \vendor\chrizli\basicPhp\src\CXltString
            forEach($this->aPath as $sPath) {
                $sClassFileFq = $this->fnClassRootGet().$this->fnDirSeparatorAdd($sPath).$sClass.$this->sExtension;
                if($this->fnFileRequire($sClassFileFq)) {
                    return true;
                }
            }
            return  false;
    }
    
    protected function  fnFileRequire(string $sFile): bool {
            if (file_exists($sFile)) {
                //echo 'try to require|'.$sFile.'|';
                require $sFile;
                return  true;
            }   else {
                //echo 'file does not exist|'.$sFile.'|';
                return  false;
            }
    }
    
    protected function  fnClassRootGet(): string {
            return $_SERVER['DOCUMENT_ROOT'];
    }
    
    public  function    fnGet(): array {
            return  $this->aPath;
    }
    
    /*protected function  fnPathValid(string $_sPathFq): string {
            return $this->fnDirSeparatorAdd($this->fnSrcFolderValid($_sPathFq));
    }*/
    
    protected function  fnPathNormalize(string $_sPathFq): string {
            //return $this->fnDirSeparatorAdd($this->fnSrcFolderValid($_sPathFq));
            return $this->fnDirSeparatorAdd($_sPathFq);
    }
    
    /*protected function fnSrcFolderValid(string $_sPathFq): string {
            //add source folder if missing -> path/to/class.php -> path/to/SRC/class.php
            $aFolderPart    =  explode(DIRECTORY_SEPARATOR, $_sPathFq);
            $sFolderLast    =  array_pop($aFolderPart);
            if($sFolderLast == $this->sSource) {
                $sOut   = $_sPathFq;
            }   else    {
                $sOut   = $_sPathFq.DIRECTORY_SEPARATOR.$this->sSource;
            }
            return  $sOut;
    }*/
    
    private function    fnDirSeparatorAdd(string $s): string {
            return (subStr($s, -1) != DIRECTORY_SEPARATOR)? $s.=DIRECTORY_SEPARATOR: $s;
    }
    
    /*private function fnDirSepDrop(string $s):string {
        if(subStr($s, -1) == DIRECTORY_SEPARATOR) {
            $s = left($s,0,-1);
        }
        return $s;
    }*/

}

?>
