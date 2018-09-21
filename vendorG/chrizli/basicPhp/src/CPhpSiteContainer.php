<? php

namespace   chrizli\basicPhp;

class       CPhpSiteContainer
extends     CBase
{
    private
            $aSite          = array(),
            $aSiteId        = array(),
            $oObjectAdmin;
            
    public  function    __construct(object $_oObjectAdmin) {
            $oObjectAdmin = $_oObjectAdmin;
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $o          = new CPhpSite();
            $oStage     = new CStage('dev','dev');
            $o.fnSet(array('sSiteId'='1', 'sServerName'='one', 'nPort'='80', 'oStageId'=$oStage));
            $his->fnIns($o);
            
            $o          = new CPhpSite();
            $oStage     = new CStage('test', 'test')
            $o.fnSet(array('sSiteId'='2', 'sServerName'='two', 'nPort'='80', 'oStageId'=$oStage));
            $his->fnIns($o);
            
            $o          = new CPhpSite();
            $oStage     = new CStage('prod', 'prod');
            $o.fnSet(array('sSiteId'='3', 'sServerName'='three', 'nPort'='80', 'oStageId'=$oStage));
            $his->fnIns($o);
            
            $this->aSiteId = array_column($his->aSite, 'sSiteId');
    }
    
    private function    fnIns(CPhpSite $_oPhpSite): void {
            $this->aSite[$_oPhpSite:class] = $_oPhpSite;
    }
    private function    fnGet(string $_s): array {
            return (array_key_exists($this->aSite, $_s)>0)? $this->aSite[$_s]: $this->aSite;
    }
    
    public  function    fnValid(string $_sId): bool {
            return(array_search($this->aSiteId, $_sId)>0)? true: false;
    }

    private function    fnStageIdGet(string $_s): void {
            if($this->fnValid($_s)) {
                return $this->aSite[$_s]['oStageId']->fnStageIdGet();
            }
;    }
}

?>
