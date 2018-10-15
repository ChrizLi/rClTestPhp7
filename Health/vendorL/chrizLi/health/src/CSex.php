<?php

namespace chrizLi/health

class CSex
{
    private
            CSexModel   oModel;
            
    public  function    __constructor(CSexModel _oModel){
            oModel  =   _oModel;
    }
    
    private function    fnDataInit(){}
    
    public  function    fnSel(){
            return      oModel->fnSel();
    }
    
    public  function    fnIns(
            string      sLabel
    ):numeric{
            private     numeric nSexId;
            return      oModel->fnIns(sLabel);
    }
    
    public  function    fnUpd(
            numeric     nSexId,
            string      sLabel
    ){
            oModel->fnUpd(nSexId, sLabel);
    }
    
    public  function    fnDel(
            numeric     nSexId
    ){
            oModel->fnDel(nSexId);
    }
}

?>