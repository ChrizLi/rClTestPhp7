<?php
// 20180509, ListlChr, creates array of CSalesOrg based on give array of sId
// e.g. fnSet(('BIG','BAT')) will create CSalesOrg objects for BIG and BAT
class CSalesOrgFactory {
    private $aSoId  = array();
    private $aSo    = array();
    
    public function __construct() {
        $this->fnInit();
    }
    
    private function fnInit() {
        $this->fnIdInit();
    }
    
    private function fnIdInit() {
        $this->aSoId = array('BIG','BAT','BUK');
    }
    
    public function fnSet($_a) {
        forEach($_a as $sSo) {
            $o = new CSalesOrg();
            switch ($sSo) {
                case 'BIG':
                    $o->fnSet('BIG','BIG');
                    break;
                case 'BAT':
                    $o->fnSet('BAT','BAT');
                    break;
                case 'BUK':
                    $o->fnSet('BUK','BUK');
                    break;
                default:
                    $o->fnSet('NA','NA');
                    //throw \new error()
            }
            array_push($this->aSo, $o);
        }
    }
    
    public function fnGet() {
        return $this->aSo;
    }
    
    public function fnIdValid($_sId) {
        return (array_search($_sId, $this->aSoId))?true:false;
    }
}

?>
