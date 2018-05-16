<?php

namespace   chrizli\basicPhp;

class       CContainer
extends     CBase
{
    protected
            $aItem      = array(),
            $bTypeAssoc;

    public  function    __construct(bool $_bTypeAssoc=true) {
            if ($_bTypeAssoc) {
                $this->bTypeAssoc = true;
            }   else {
                $this->bTypeAssoc = false;
            }
    }
    
    public  function    fnAdd($_o, string $_sId=null) {
            if ($this->bTypeAssoc) {
                if($_sId==null) {
                    $this->fnErrorThrow('ArgNotValid');
                }   else {
                    $this->aItem[$_sId]=$_o;
                }
            }   else {
                $this->aItem[]=$_o;
                return count($this->aItem)-1;
            }
    }
    
    public  function    fnGet($_oId=null) {
            if ($_oId==null) {
                return $this->aItem;
            }   else {
                return $this->aItem[$_oId];
            }
    }
    
    public  function    fnDel($_oId): void {
            unset($this->aItem[$_oId]);
    }
    
    public  function    fnSet(array $_a): void {
            $this->aItem=$_a;
    }
    
    public  function    fnReset(): void {
            $this->aItem=array();
    }
    
    public  function    fnValid($_o): bool {
            return array_key_exists($_o, $this->aItem);
    }
    
}

?>
