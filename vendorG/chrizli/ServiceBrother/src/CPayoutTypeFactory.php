<?php
// 20180509, ListlChr, creates array of CPayoutTypes based on give array of sId
// e.g. fnSet(('MPS','CBVM')) will create CPayoutType objects for MPS and CBVM
class       CPayoutTypeFactory 
extends     CBase
{
    private 
            $aPoId  = array(),
            $aPo    = array();
    
    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->fnIdInit();
    }
    
    private function    fnIdInit(): void {
            $this->aPoId = array('Epp','CbHw','CbVm','Mps','Mstp','Pp','CbRetail');
    }
    
    public  function    fnSet(array $_a): void {
            forEach($_a as $sPo) {
                $o = new CPayoutType();
                switch ($sPo) {
                    case 'Epp':
                        $o->fnSet('Epp',        'Epp');
                        break;
                    case 'CbHw':
                        $o->fnSet('CbHw',       'CbHw');
                        break;
                    case 'CbVm':
                        $o->fnSet('CbVm',       'CbVm');
                        break;
                    case 'Mps':
                        $o->fnSet('Mps',        'Mps');
                        break;
                    case 'Mstp':
                        $o->fnSet('Mstp',       'Mstp');
                        break;
                    case 'Pp':
                        $o->fnSet('Pp',         'Pp');
                        break;
                    case 'CbRetail':
                        $o->fnSet('CbRetail',   'CbRetail');
                        break;
                    default:
                        $o->fnSet('NA',         'NA');
                        //throw \new error()
                }
                array_push($this->aPo, $o);
            }
    }
    
    public  function    fnGet(): array {
            return $this->aPo;
    }
    
    public  function    fnIdValid(string $_sId): string {
            return (array_search($_sId, $this->aPoId))?true:false;
    }
}

?>
