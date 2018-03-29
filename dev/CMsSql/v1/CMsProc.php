<?php
class CMsProc
{
    $sProcName  = "";
    $arParam    = array();
    $oRs        = "";
    
    public function __construct()
    {
    }
    
    public function fnProcNameSet(string: $s)
    {
        $sProcName = $s;
    }
    
    public function fnExec()
    {
        $sSql   = fnProcPrep()
        $oRs    = msSql_Exec($sSql);
    }
    
    public function fnSel()
    {
        return $oRs;
    }
    
    private function fnProcPrep()
    {
        $sOut = $sProcParam;
        forEach($arParam as $arItem)
        {
            $sOut .= ' '.$arItem['sName']."=".fnValuePrep($arItem['sValue'], $arItem['sType']);
            if(! $arItem['bIn'])
            {
                $sOut.=' output'; // error here: how to get var out?
            }
            $sOut .=.",";
        }
        if $sOut[str_len($sOut)]==','
        {
            FnLeft($sOut, -1);
        }
        return $sOut;
    }
    
    private function fnValuePrep(string $sValue, string $sType):string
    {
        $sOut = '';
        switch ($sType)
        {
            case 'varchar':
            case 'char':
            case 'nvarchar':
            case 'nchar':
            case 'datetime':
                $sOut = "'".$sValue."'";
                break;
            case 'bit':
            case 'int':
            case 'integer':
            case 'float':
                $sOut = $sValue
                break:
            default:
                fnErrorThrow("","");
        }
        return $sOut;
    }
    
    public function fnParamAdd
    (
        string: $sName,
        string: $sType,
        string: $sValue,
        bool:   $bIn    = true    // in or out 
    )
    {
        $arItem = array();
        $arItem['sName'] = $sName;
        $arItem['sType'] = $sType;
        $arItem['sValue']= $sValue;
        $arItem['bIn']   = $bIn;
        $arParam = array_Push($arParam, $arItem);
    }
}
?>
