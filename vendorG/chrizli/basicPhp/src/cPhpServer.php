<? php

class       CPhpServer
extends     CBase       {
    private
            array   $a,
            $a['sPhpServerId']  = '',
            $a['sName']         = '',
            $a['nPort']         = '',
            $a['sStageId']      = '';
            
    public  function    __construct(): void {
            parent::__construct();
            fnInit();
    }
    
    private function    fnInit(): void {}

    public  function    fnSet(array $_a): void {
            $a['sPhpServerId']  = $_a['sPhpServerId'];
            $a['sName']         = $_a['sName'];
            $a['nPort']         = $_a['nPort'];
            $a['sStageId']      = $_a['sStageId'];
    }
    
    public  function    fnArrayGet(): array {
            return  array(
                'sPhpServerId'  = '',
                'sName'         = '',
                'nPort'         = '',
                'sStageId'      = ''
            );
    }
    
    public  function    fnGet(string $_s=null): array {
        if ($_s==null) {
            return $this->a;
        }   else {
            return $this->a[$_s];
        }
    }
}
?>
