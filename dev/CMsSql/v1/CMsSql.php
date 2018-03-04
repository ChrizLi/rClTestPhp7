<?php
class
{
    oCon = "";
    
    public function __construct()
    {
        fnInit();
    }
    
    public function fnInit(string: sSqlServer, string: sUserName, string: sPwd)
    {
        oCon = msSql_Connect(sSqlServer, sUserName, sPwd);
        if(!oCon) fnErrorThrow("","");
    }
    
    public function fnResultToArrayOfStruct()
    {
        $ar =array();
        
        //we read the resultSet row by row
        while( !isEof())
        {
            $ar = array_push($ar, msSql_as_Assoc());
        }
        return $ar;
    }
    
    
    
    public function fnColumnListGet()
    {
    }
    
    public function fnRowCntGet()
    {
    }
}
?>