<?php

namespace   chrizli\basicPhp;

class       CEnum
extends     CBase
{   
/*--------------------------------------
---- 20180517V1.0.0,  ListlChr,   init
----
----------------------------------------
---- what this code does:
---- -  holds single value based on given Enum
---- -  sample:
---- new CEnum(array('a','b','c'); fnSet('a'); fnValid('a');
----
----------------------------------------
---- missing feature/known errors:
---- 
--------------------------------------*/
    private
            $xEnum,
            $aEnum;
            
    public  function    __construct(array $_a) {
            //classic array, non-Associated
            $this->aEnum = $_a;
    }
    
    public  function    fnSet($_x): void {
            if (array_search($_x, $this->aEnum)===false) {
                $this->fnErrorThrow('ArgNotValid');
            }   else {
                $this->xEnum=$_x;
            }
    }
    
    public  function    fnGet() {
            return  $this->xEnum;
    }
    
    public  function    fnValid($_x, $_bErrorThrow=true): bool {
            if (array_search($_x, $this->aEnum)===false) {
                if ($_bErrorThrow) {
                    $this->fnErrorThrow('ArgNotValid');
                }   else {
                    return false;
                }
            }   else {
                return true;
            }
    }
    
    public  function    fnEnumGet(): array {
            return  $this->aEnum;
    }
}
?>
