<?php
class       CBase {   
    // baseClass for all classes
    protected function fnErrorThrow(
            string $_sType  = '', 
            string $_sMsg   = ''
            ): void {
            $sTypeOut       = '';
            $sMsgOut        = '';
            switch($_sType) {
                case 'ArgNotValid':
                    $sTypeOut='ArgumentNotValidException';
                    break;
                default:
                    $sTypeOut='UndefinedException';
                    break;
            }   
            throw new\Exception($sTypeOut, $_sMsg);  
    }
}
?>
