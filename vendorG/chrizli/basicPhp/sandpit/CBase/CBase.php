<?php
    class CBase
    {   // baseClass for all classes
        public function __construct ()
        {
            return this;
        }
        
        private function fnErrorThrow(string $sType, string $sMsg='')
        {
            $sTypeOut   = '';
            $sMsgOut    = '';
            
            switch($sType)
            {
                case 'ArgNotValid':
                    $sTypeOut='ArgumentNotValidException';
                    break;
                default:
                    $sTypeOut='UndefinedException';
                    break;
             }   
             throw new\Exception($sTypeOut;);  
        }
    }
?>
