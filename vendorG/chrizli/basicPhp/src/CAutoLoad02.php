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
class CAutoLoad{
    
    protected   $aPath      = array();  //folder array to search for ClassFiles
    protected   $sSource    = 'src';
    protected   $sExtension = '.php';
    
    public function __construct() {
    }
    
    public function fnRegister() {
        spl_autoload_register(array($this, 'fnClassLoad'));
    }
    
    public function fnFolderAdd(string $_sPathFq, bool $_bPrepend=false):string {
        $_sPathFq = $this->fnPathValid($_sPathFq);
        if($_bPrepend) {
            array_unshift($this->aPath, $_sPathFq);
        } else {
            array_push($this->aPath, $_sPathFq);
        }
        $this->aPath = array_unique($this->aPath);
        return $_sPathFq;
    }
    
    public function fnClassLoad($oClass):bool {
        // e.g. fnClassLoad("CXltString") loads \vendor\chrizli\basicPhp\src\CXltString
        forEach($this->aPath as $sPath) {
            $sClassFileFq = $this->fnSiteRootGet().$this->fnDirSepAdd($sPath).$oClass.$this->sExtension;
            if($this->fnFileRequire($sClassFileFq)) {
                return true;
            }
        }
        return false;
    }
    
    protected function fnFileRequire(string $sFile):bool {
        if(file_exists($sFile)) {
            //echo 'try to require|'.$sFile.'|';
            require $sFile;
            return true;
        } else {
            //echo 'file does not exist|'.$sFile.'|';
            return false;
        }
    }
    
    protected function fnSiteRootGet():string {
        return $_SERVER['DOCUMENT_ROOT'];
    }
    
    public function fnGet():array {
        return $this->aPath;
    }
    
    protected function fnPathValid(string $_sPathFq):string {
        $_sPathFq = $this->fnSrcFolderValid($_sPathFq);
        $_sPathFq = $this->fnDirSepAdd($_sPathFq);
        return $_sPathFq;
    }
    
    protected function fnSrcFolderValid(string $_sPathFq):string {
        //add source folder if missing -> path/to/class.php -> path/to/SRC/class.php
        $aFolderPart    = explode(DIRECTORY_SEPARATOR, $_sPathFq);
        $sFolderLast    = array_pop($aFolderPart);
        if($sFolderLast ==$this->sSource) {
            $sOut = $_sPathFq;
        }   else {
            $sOut = $_sPathFq.DIRECTORY_SEPARATOR.$this->sSource;
        }
        return $sOut;
    }
    
    private function fnDirSepAdd(string $s):string {
        if(subStr($s, -1) != DIRECTORY_SEPARATOR) {
            $s .= DIRECTORY_SEPARATOR;
        }
        return $s;
    }
    
    /*private function fnDirSepDrop(string $s):string {
        if(subStr($s, -1) == DIRECTORY_SEPARATOR) {
            $s = left($s,0,-1);
        }
        return $s;
    }*/
       
}

?>
