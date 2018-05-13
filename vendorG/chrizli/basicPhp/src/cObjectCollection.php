<? php
    // 20180401,    ListlChr,   init
    // class holds collection of all provided objects (no object will be created)
    // provides option to easily get list of same instances
    // provides option to return singletons
        
class   CObjectCollection
extends CBase   {
        private
            $aObject=array();

    public  function    __construct() {
            fnAdd(this);
            return this;
    }

    public  function    fnAdd(object $oObject, string $sId) {
            $bOut=$this->fnOjectAdd(
                $oObject,
                $sId
            );
            return $bOut;
    }    
     
    private function    fnObjectAdd(object $oObject, string $sId)
    {
            $bOut=true;
            if($sId=='') {
                $sId=$this->fnClassNameGet($oObject)
            }
            if(! $this->fnIdExists($sId) {
                $this->aClass[$sId]=$oObject;
            } else {
                $bOut=false;
            }
            $aClass[$sId]=$oObject;
            return $bOut;
    }

    public  function    fnDel(string $sId) {
            array_delete($aa, $sId);
    }
        
    public  function    fnUpd(string $sId, object $oObject): void {
            $aa[$sId]=$oObject;
    }
    
    public  function fnIdExists(string $sId): bool {
            if(array_key_exists($aaClass, $sId)) {
                return true;
            }
            return false;
    }

    public  function    fnSel(): array {
            return $aClass;
    }

    public  function    fnGet(string $sId): array {
            return $aClass[$sId];
    }

    private function    fnIdGet(object $oObject): string {
            return array_search($aaClass, $oObject);
    }
    
    private function    fnClassNameGet(object $oObject): array {
            $sOut=getPathToClass($oObject);
            $aa=explode($sOut, '/');
            return array_popr($aa);
    }

    protected function getDir(): string {
            $reflector = new ReflectionClass(get_class($this));
            return dirname($reflector->getFileName());
    }

?>
