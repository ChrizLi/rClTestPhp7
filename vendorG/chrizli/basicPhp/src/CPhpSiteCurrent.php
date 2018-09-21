<?php

namespace   chrizli\basicPhp;

class       CPhpSiteCurrent
extends     CPhpSite
{
    private
            $sServerName,
            $nPort,
            $oStage,
            $oPhpSiteType,
            $oPhpSite;

    public  function    __construct() {
            parent::__construct();
            $this->fnInit();
    }
    
    public  function    fnInit() {
            $this->fnServerNameGet();
            $this->fnPortGet();
            $this->oStage       = $this->fnStageGet();
            $this->fnSet(array(
                'sPhpSiteId'    => '',
                'sServerName'   => $this->sServerName, 
                'nPort'         => $this->nPort, 
                'oStage'        => $this->oStage, 
                'oPhpSiteType'  => $this->oPhpSiteType
                )
            );
    }
    
    public  function    fnServerNameSet() {
            $this->sServerName  = $_SERVER['SERVER_NAME'];
    }
    
    public  function    fnPortSet() {
            $this->nPort        = $_Server['SERVER_PORT'];
    }
    
    private function    fnStageSiteTypeSet() {
            $aMeta      = $this->fnStageMetaGet();
            $oStageBase = new cPhp\CStageBase();
            $oStageBase ->fnSet(array('sStageBaseId'=>$aMeta['sStage'], 'sNameShort'=>$aMeta['sStage']));
            $oStage     = new cPhp\CStage();
            $oStage     ->fnSet(array('sStageId'=>$aMeta['sStage'], 'sNameShort'=>$aMeta['sStage'], 'oStageBase'=>$oStageBase));
            $this->oStage       = $oStage;
            $this->sSiteType    = $aMeta['sSiteType'];
    }
    
    private function    fnSiteMetaGet() {
            $a = array();
            switch ($this->sServerName){
                case 'BigW10N61014':
                    switch ($this->nPort) {
                        case    8721:
                            $a['sStage']    ='dev';
                            $a['sSiteType'] ='TestPhp';
                            break;
                        case    8722:
                            $a['sStage']    ='test';
                            $a['sSiteType'] ='TestPhp';
                            break;
                        case    8723:
                            $a['sStage']    ='prod';
                            $a['sSiteType'] ='TestPhp';
                            break;
                    }
                    break;
                case 'tal13':
                    switch ($this->nPort) {
                        case    8721:
                            $a['sStage']    ='dev';
                            $a['sSiteType'] ='TestPhp';
                            break;
                        case    8722:
                            $a['sStage']    ='test';
                            $a['sSiteType'] ='TestPhp';
                            break;
                        case    8723:
                            $a['sStage']    ='prod';
                            $a['sSiteType'] ='TestPhp';
                            break;
                    }
            }
    }
}

?>
 