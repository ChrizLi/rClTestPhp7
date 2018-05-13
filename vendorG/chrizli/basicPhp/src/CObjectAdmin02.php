<?php
class       CObjectAdmin 
extends     CBase {
    private 
            object      $oObjectFactory,
            object      $oObjectCollection,
            $aObject    = array();

    public  function    __construct(
            $_oObjectFactory            = null,
            $_oObjectCollection         = null
            ): void     {
            if ($_oObjectFactory        == null) {
            $this->oObjectFactory       =  new CObjectFactory02;
            }   else {
                $this->oObjectFactory   = $_oObjectFactory;
            }
            if ($_oObjectCollection     == null) {
                $this->oObjectCollection = newCObjectCollection02;
            }   else {
                $this->oObjectCollection = $_oObjectCollection;
            }
            $this->fnInit();
    }
    
    private function    fnInit(): void {}
    
    public  function    fnObjectGet(
            string      $_sClass,
            object      $_o         = null,
            string      $_sId       = '',
            array       $_aArg      = array()
            ): object   {
            $o          =  null;
            if ($_sId   == '') {
                $sId    =  $_sClass;
            }
            if ($_o     == null) {
                if($_sId    == '') {
                    return fnValidateAndGet($_sClass, $_aArg);
                }   else {
                    return fnValidateAndGet($_sId, $_aArg);
                }
            }   else {
                if ($_o instanceOf($_sClass)) {
                    if($_sId == '') {
                        if ($this->oObjectCollection->fnObjectExists($_o)) { 
                            return $_o;
                        }   else {
                            return $this->fnCreateAndAdd($_sClass, $_aArg);
                        }
                    }   else {
                        return fnValidateAndGet($_sId, $_aArg);
                    }
                }   else {
                    $this->fnErrorThrow("ObjectTypeError", "Given object is not of given Class");
                }
            }
    }
    
    private function    fnValidateAndGet($_sClass,  $_aArg) {
        if ($this->oObjectCollection->fnIdExists(   $_sClass) {
            return  $this->oObjectCollection->fnGet($_sClass);
        }   else {
            return  $this->fnCreateAndAdd($_sClass, $_aArg);
        }
    }

    private function    fnCreateAndAdd($_sClass, $_aArg) {
            $o = $this->oObjectFactory->fnCreate($_sClass, $_aArg);
            $this->oObjectCollection->fnAdd($o, $_sClass);
            return  $o;
    } 
}
?>
