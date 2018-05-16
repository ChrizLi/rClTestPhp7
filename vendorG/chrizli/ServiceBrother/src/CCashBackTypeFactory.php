<?php
// 20180509, ListlChr, creates array of CCashBackTypes based on give array of sId
// e.g. fnSet(('MPS','CBVM')) will create CCashBackType objects for MPS and CBVM

class       CCashBackTypeFactory 
extends     CBase
{
    use chrizli/basePhp as cPhp;
    
    private 
            $aCbId  = array(),
            $aCb    = array();
    
    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->fnIdInit();
    }
    
    private function    fnIdInit(): void {
            $this->aCbId = array('Aip','Epp','Epf','Ppp','CbHw','CbVm','Mps','Mstp','Pp','CbRetail');
    }
    
    public  function    fnSet(array $_a): void {
            forEach($_a as $sCb) {
                $o = new CCashBackType();
                switch ($sCb) {
                    case 'Aip':
                        $o->fnSet('Aip',        'Aip',      'Epp');
                        break;
                    case 'Epp':
                        $o->fnSet('Epp',        'Epp',      'Epp');
                        break;
                    case 'Epf':
                        $o->fnSet('Epf',        'Epf',      'Epp');
                        break;
                    case 'Ppp':
                        $o->fnSet('Ppp',        'Ppp',      'Epp');
                        break;
                    case 'CbHw':
                        $o->fnSet('CbHw',       'CbHw',     'CbHw');
                        break;
                    case 'CbVm':
                        $o->fnSet('CbVm',       'CbVm',     'CbVm');
                        break;
                    case 'Mps':
                        $o->fnSet('Mps',        'Mps',      'Mps');
                        break;
                    case 'Mstp':
                        $o->fnSet('Mstp',       'Mstp',     'Mstp');
                        break;
                    case 'Pp':
                        $o->fnSet('Pp',         'Pp',       'Pp');
                        break;
                    case 'CbRetail':
                        $o->fnSet('CbRetail',   'CbRetail', 'CbRetail');
                        break;
                    default:
                        $o->fnSet('NA',     'NA',   'NA');
                        //throw \new error()
                }
                array_push($this->aCb, $o);
        }
    }
    
    public  function    fnGet() {
            return $this->aCb;
    }
    
    public  function    fnIdValid($_sId) {
            return (array_search($_sId, $this->aCbId))?true:false;
    }
}

?>
