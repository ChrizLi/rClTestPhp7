<? php

class       CPhpSiteContainer
extends     CBase   {
    private
            array   $a=array(),
            array   $aSiteId = array(),
            object  $oObjectAdmin;
            
    public  function    __construct(object $_oObjectAdmin): void {
            $oObjectAdmin = $_oObjectAdmin;
        
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $o      = new CPhpSite();
            $oStage = new CStage('dev','dev');
            $o.fnSet(array('sSiteId'='1', 'sServerName'='one', 'nPort'='80', 'oStageId'=$oStage));
            $his->fnIns($aa);
            
            $o      = new CPhpSite();
            $oStage = new CStage('test', 'test')
            $o.fnSet(array('sSiteId'='2', 'sServerName'='two', 'nPort'='80', 'oStageId'=$oStage));
            $his->fnIns($aa);
            
            $o      = new CPhpSite();
            $oStage = new CStage('prod', 'prod');
            $o.fnSet(array('sSiteId'='3', 'sServerName'='three', 'nPort'='80', 'oStageId'=$oStage));
            $his->fnIns($aa);
            
            $this->aSiteId = array_column($his->a, 'sSiteId');
    }
    
    private function    fnIns(CPhpSite $_oPhpSite): void {
            $this->a[$_oPhpSite:class]=$_oPhpSite;
    }
    private function    fnGet(string $_s): any {
            return (array_key_exists($this->a, $_s)>0)? $this->a[$_s]: $this->a;
    }
    
    public  function    fnValid(string $_sId): bool {
            return(array_search($this->aSiteId, $_sId)>0)? true: false;
    }

    private function    fnStageIdGet(string $_s): void {
            if($this->fnValid($_s)) {
                return $this->a[$_s]['oStageId'].fnStageIdGet();
            }
;    }
}

?>
