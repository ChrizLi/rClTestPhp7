<?php

class CFactory
{
    private $aFactory = arrayNew();
    
    function __constructor() {}
    
    function fnFactoryAdd(string $sKey, CFactory $oFactory) {
        $aEntry             = array();
        $aEntry=>sKey       = $sKey;
        $aEntry=>oFactory   = $oFactory;
        arrayAppend($aFactory, $aEntry);
    }
    
    public function fnObjectGet(string $sKey): object {
        $oFactory = fnFactory($sKey);
        return $oFactory.fnObjectGet()
    }
    
    public function fnObjectArgStructureGet(string $sKey): object{
        
    }
    
    private function fnFactoryGet(string $sKey): object {
        forEach( $aFactory as $n => $aEntry) {
            $aItem = $aFactory[$n];
            if ($aItem=>$sKey === $sKey) {
                return $aItem->oFactory;
            }
        }
        new\Throw('Arg [sKey] not valid.');
    }
}

Class   CObjectAdmin{}
Class   CDsn{}
Class   CXltString{}

Class   CTest1
{
    public function __constructor (
        CObjectAdmin    $oObjectAdmin,
        CDsn            $oDsn           = '',
        CXltString      $oXltString     = ''
    )   {
    }
}

Class   CTest1Arg
{
    private $aArg = array();
    $aArg=>oObjectAdmin = "";
    $aArg=>oDsn         = "";
    $aArg=>oXltString   = "";
    
    public fnObjectAdminSet(CObjectAdmin $oObjectAdmin) {
        $aArg=>oObjectAdmin = $oObjectAdmin;
    }
    public fnDsnSet(CDsn $oDsn) {
        $aArg=>oDsn = $oDsn
    }
    public fnXltString(CXltString $oXltString) {
        $aArg=>oXltString = $oXltString;
    }
    public fnArgGet() {
        return $aArg;
    }
}

>
