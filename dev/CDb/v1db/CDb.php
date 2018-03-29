<?php
    class CDb
    {
        $ar = "";
        
        public static function __construct ()
        {
            $ar=CDb::fnInit();
            return this;
        }
        
        private static fnInit()
        {
            $ar =array();
            $ar[0]=("sDbName"=>"BigDaten",   "sServer"=>"s1","sType"=>"BigDaten",   "sStageId"=>"dev");
            $ar[0]=("sDbName"=>"BigDaten",   "sServer"=>"s2","sType"=>"BigDaten",   "sStageId"=>"prod");
            $ar[0]=("sDbName"=>"BeipDefault","sServer"=>"s1","sType"=>"BeipDefault","sStageId"=>"dev");
            $ar[0]=("sDbName"=>"BeipDefault","sServer"=>"s1","sType"=>"BeipDefault","sStageId"=>"prod");    
        }
        
        public static fnSel(){return $ar;}
        
        public static fnValid(string $sDb, bool $bErrorThrow=true): bool
        {
            $bOut=false;
            forEach($ar as $arItem)
            {
                if($sDb==$arItem['sDbName'])
                {$bOut=true;}
                else
                {
                    if($bErrorThrow)
                    {fnErrorThrow('ArgumentNotValidException');}
                }
            }
            return $bOut;
        }
    }
?>
