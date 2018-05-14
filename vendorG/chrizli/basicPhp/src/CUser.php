<?php

class       CUser,
extends     CBase   {
    private
            array   $a;

    public  function    __construct(): void {}
    
    private function    fnInit(): void {}
    
    private function    fnDataSetGet(): void {
            $aa = array(
                'sId'       = '',
                'sAdminPath'= ''
            );
    }
    
    public  function    fnSet(array $_a): void {
            $this->a['sId']         = $_a['sId'];
            $this->a['sAdminPath']  = $_a['sAdminPath'];
    }
    
    public  function    fnGet(string $_s=null): any {
            return ($_s==null)? $this->a: $this->a[$_s];
    }
}

?>
