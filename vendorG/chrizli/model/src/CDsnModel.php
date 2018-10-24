<?php
    class   CDsnModel
    extends CBase
    {
        private
                    $aData;
        public      function    __construct () {
        }

        private     function    fnDataInit(){
        }
        
        private     function    fnPersistentSel(){
            var     $aRecord    = new CDsnModel;
            $aRecord->fnIdSet               (1);
            $aRecord->fnKeySet              ('MySqlDev');
            $aRecord->fnCodeStageBaseIdSet  (1);
            arrayPush($this->aData, $aRecord);
            var     $aRecord    = new CDsnModel;
            $aRecord->fnIdSet               (2);
            $aRecord->fnKeySet              ('MySqlTest');
            $aRecord->fnCodeStageBaseIdSet  (2)
            arrayPush($this->aData, $aRecord);
        }
    }
?>
