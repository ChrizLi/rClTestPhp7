<?php

class       CContainer
extends     CBase
{
    private 
            $aItem,
            $bTypeAssoc;

    public  function    __construct(bool $_bTypeAssoc=true): void {
            if ($_bTypeAssoc) {
                $this->bTypeAssoc = true;
            }   else {
                $this->bTypeAssoc = false;
            }
    }
    
    public  function    fnAdd($_o, string $_sId=null): void {
        if ($this->bTypeAssoc) {
            if($_sId==null) {
                $this->fnErrorThrow('');
            }   else {
                $this->aItem[$_sId]=$_o;
            }
        }   else {
            array_push($this->aItem, $_o);
        }
    }
    
    public  function    fnGet($_oId=null): void {
        if ($_oId==null) {
            return $this->aItem;
        }   else {
            return $this->aItem[$_oId];
        }
    }
    
    public  function    fnDel($_oId): void {
            unset($this->aItem[$_oId];
    }
    
    public  function    fnSet(array $_a): void {
            $this->aItem=$_a;
    }
    
    public  function    fnReset(): void {
            $this->aItem=array();
    }
    
}

?>
