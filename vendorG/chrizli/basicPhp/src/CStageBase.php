<?php

class       CStageBase
extends     CBase {
    private
            $aStage     CStage[],
            $aStageId   string[];

    public  function    __construct(CObjectAdmin $_oObjectAdmin): void {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $a  = new CStage(array('dev',   'dev');
            array_push($this->aStage, $a);
            $a  = new CStage(array('test',  'test');
            array_push($this->aStage, $a);
            $a  = new CStage(array('prod',  'prod');
            array_push($this->aStage, $a);
            $this->aStageId = array_column($this->aStage, 'sStageId')
    }
    
    public  function    fnIdValid($_sId): bool {
            return array_search($_sId, $this->aStageId)==false ? false:true;
    }
    
    public  function    fnGet($_sId=null): array {
            if($_sId == null) {
                return $aStage;
            }   else    {
                if($this->fnIdValid($_sId) {
                    return $this->aStage[$_sId];
                }   else    {
                    $this-fnErrorThrow("ArgNotValid");
                }
            }
    }
}

?>
