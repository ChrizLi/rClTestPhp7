<?php
class CQuery
{
    $ar         = array();
    $sColList   = "";
    $sColCnt    = 0;
    $sDel       = ",";// default delimiter
    $bStrict    = true;// requires full col set as arg else error
    
    public function __construct(){}
    
    public function fnDelSet(string: $_sDel)
    {
        $sDel = $_sDel;
    }
    
    private function fnDelGet(string: $_sDel)
    {
        if($_sDel=="")
        {$sOut = $sDel;}
        else
        {$sOut = $_sDel;}
        return $sOut;
    }
    
    public function fnColNameSet
    (
        string  $_sColList, 
        string  $_sDel=",",
        bool    $_bStrict=true
    )
    {
        $sDel       = this=>fnDelGet($_sDel);
        $sColList   = $_sColList;
        $sColCnt    = oXltString::fnListLen($_sColList, $sDel);
        $bStrict    = $_bStrict;
    }
    
    public function fnRowAdd
    (
        string  $sDataList, 
        string  $_sDel=",", 
        bool    $_bStrict=true
    )
    {   $in="value1;value2";
        $sDel       = this=>fnDelGet($_sDel);
        $bStrict    = $_bStrict;
        $ar         = explode($sDataList, $sDel);
        forEach($ar as $sItem)
        {
            
        }
    }
    
    public function fnKeyValueListAdd
    (
        string  $sKeyValueList, 
        string  $_sDel,
        string  $_bStrict=true
    )
    {   //$in="key1=value1;key2=value2";
        $bStrict    =$_bStrict;
    }
    
    public function fnSel(int $n=0)
    {
        if $n==0 return $ar;
    }
}

?>
