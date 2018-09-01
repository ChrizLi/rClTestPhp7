<?php

namespace brotherNet\big\dsn;

class   CDsnRclTestPhp7Dev
extends CBase
{
    private
            $oDsnList,
            $aDsn,
            $sDsnId;
            
    public  function    __construct($_oDsnList=null) {
            if ($_oDsnList==null) {
                $this->oDsnList = new CDsnList;
            }   else {
                $this->oDsnList = $_oDsnList;
            }
            $this->sDsnId = 'rClTestPhp7dev';
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $this->aDsn = $this->oDsnList($this->sDsnId);
    }
}

?>
