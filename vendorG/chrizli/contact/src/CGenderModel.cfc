<?php
    class   CGenderModel
    extends CModelIdKeyAbstract
    {
        private
                    $oDsn,
                    $aData;
                
        public      function    __construct (CDsn $_oDsn) {
                    $this->oDsn = $_oDsn;
        }
        
        private     function    fnPersistentSel(){
            var     $aaRow;
            $aaRow['nId']       = 1;
            $aaRow['sKey']      = 'male';
            $aaRow['sLabel']    = 'male';
            $this->aData[0]     = $aaRow;
            $aaRow['nId']       = 2;
            $aaRow['sKey']      = 'female';
            $aaRow['sLabel']    = 'female';
            $this->aData[1]     = $aaRow;
        }
    }
?>
