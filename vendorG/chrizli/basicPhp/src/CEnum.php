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
            $this->aEnum = $_a;
    }
    
    public  function    fnSet($_x) {
            if (array_search($_x, $aEnum)===false) {
                $this->fnErrorThrow('ArgIsNotValid');
            }   else {
                $this->sEnum=$_x;
            }
    }
    
    public  function    fnGet() {
            return $this->sEnum;
    }
    
    public  function    fnValid($_x) {
            return (array_search($_x, $aEnum)===false)? false: true;
    }
}

function fnTest() {

    $oStage = new CEnum(array('dev','test','prod'));
    print $oStage->fnGet();     // null
    $oStage->fnSet('dev');
    print $oStage->fnGet();     // dev
    $oStage->fnSet('not');      // exception
    $oStage->fnValid('dev');    // true
    $oStage->fnValid('test');   // false

}

?>
