<?php
    class CStage
    {
        public static function __construct ()
        {
            return this;
        }
        
        public static function fnBaseStageGet
        (
            string  $sStage,
            bool    $bErrorThrow=true
        ): string
        {   // we normalize given StageString to dev,test or prod
            $sOut   = '';
            $nDev   = strPos($sStage, 'dev');
            $nTest  = strPos($sStage, 'test');
            $nProd  = strPos($sStage, 'prod');
            
            $nDev   = ($nDev ==0)?0:1;
            $nTest  = ($nTest==0)?0:1;
            $nProd  = ($nProd==0)?0:1;
            
            if(($nDev+$nTest+$nProd)>1)
            {
                if($bErrorThrow)
                {fnErrorThrow("ArgumentIsNotValidException";)}
            else
            {
                if($nDev ==1) $sOut='dev';
                if($nTest==1) $sOut='test';
                if($nProd==1) $sOut='prod';
            }
            return  $sOut;
        }
    }
?>
