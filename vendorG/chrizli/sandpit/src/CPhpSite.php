<?php

namespace   chrizli\basicPhp;

class       CPhpSite
extends     CBaseData
{
    private
            $oStageBase;
            
    public  function    __construct($_oStageBase=null) {
            if ($_oStageBase==null) {
                $this->oStageBase = new CStageBase();
            }   else {
                $this->oStageBase = $_oStageBase;
            }
            parent::__construct(array('sPhpSiteId','sServerName', 'nPort', 'sSiteTypeId', 'sStageId', 'sStageBaseId'));
    }
    
    public  function    fnSet(array $_a(
            'sPhpSiteId'    =>'rClTestPhp7_tal13_8721',// siteTypeId_ServerName_Port
            'sServerName'   =>'tal13', 
            'nPort'         =>'8721', 
            'sSiteTypeId'   =>'rClTestPhp7', 
            'sStageId'      =>'testUat',
            'sStageBaseId   =>'')
            ) {
            $a = array();
            $a['sPhpSiteId']    = $_a['sPhpSiteId'];
            $a['sStageBaseId']  = ($this->oStageBase->fnValid($_a['sStageBaseId'],true)===true)? $_a['sStageBaseId']: false;
            }
}

class       CStage
extends     CBase
{
    private
            $aStage;
    private function    fnInit() {
            $this->aStage['sStageId']       ='';
            $this->aStage['sStageBaseId']   ='';
    }
}

class       CStageId
extends     CEnum
{
    public  function    __construct() {
            $aMerge     = array_merge(
                $this->oStageBase->fnEnumGet(), 
                array('testUat', 'testUnit')
            );
            parent::__construct(array_unique($aMerge));
    }
}

class       CStageBase
extends     CEnum
{
    public  function    __construct() {
            parent::__construct(array('dev','test','prod'));
    }
    
    public  function    fnValid($_o, $_bErrorThrow=false){}
}

?>