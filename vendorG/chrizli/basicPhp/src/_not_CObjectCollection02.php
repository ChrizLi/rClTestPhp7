<?php
    // 20180401,    ListlChr,   init
    // class holds collection of all provided objects (no object will be created)
    // provides option to easily get list of same instances

namespace   chrizli\basicPhp;

class       CObjectCollection02
extends     CBase
{
    private 
            $aObject    = array();

    public  function    __construct() {
            $this->fnAdd($this);
    }
    
    public  function    fnGet(string $_sId): any {
            if ($this.fnIdExists($_sId)) {
                return $this->aObject[$_sId];
            }   else {
                return false;
            }
    }
     
    public  function    fnAdd(
            object      $_oObject,
            string      $_sId       = null
            ):  object {
            if ($_sId   ==  null) {
                $_sId   =   $this->fnClassNameGet($_oObject);
            }
            if ($this->fnIdExists($_sId) {
                $_oObject = $this->aObject[$_sId];
            }   else {
                $this->aObject[$_sId]=$_oObject;
            }
            return      $_oObject;
    }

    private function    fnIdExists(string $_sId): bool {
            return      array_key_exists($this->aObject, $_sId)? true: false;
    }
    
    private function    fnClassNameGet(object $_oObject): string {
            return      array_popr(explode(getPathToClass($_oObject), '/'));
    }
    public  function    fnObjectExists(object $_oObject): bool {
            return      array_search($_oObject, $this->aObject)==false? false: true; 
    }
}
?>
