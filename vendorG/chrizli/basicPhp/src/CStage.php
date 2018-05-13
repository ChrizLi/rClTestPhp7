<?php

class       CStage      
extends     CBase       {   // single Stage item
    private
            array       $a,
            string      $a['sStageId'],
            string      $a['sStageBaseId'];
    public  function    __construct(array $_a) {
            $this->fnStageIdSet     ($_a[0]);
            $this->fnStageBaseIdSet ($_a[1]);
    }
    public  function    fnStageIdGet()          { return    $this->a['sStageId'];}
    public  function    fnStageIdSet($_sId)     {           $this->a['sStageId']        = $_sId;}
    public  function    fnStageBaseIdGet()      { return    $this->a['sStageBaseId'];}
    public  function    fnStageBaseIdSet($_sId) {           $this->a['sStageBaseId']    = $_sId;}
    public  function    fnGet($_sId): array     {
            if ($this->fnIdValid($_sId) { 
                return  $this->a;
            }   else    {
                $this->fnErrorThrow('ArgNotValid', 'ArgNotValid');
            }
    public  function    fnIdValid($_sId)        {
            return      array_search($_sId, $this->a)==false? false: true;
    }
}
?>
