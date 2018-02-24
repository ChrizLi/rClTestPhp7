<?php
    class fnMySql implements="ifDb"
    {
    
        private 
                $sServerName    = "",
                $sUserName      = "",
                $sPwd           = "",
                $sDbName        = "",
                $oConnection    = "";
        
        function __constructor()
        {
        }
        
        function fnConnect()
        {
            if (fnClassArgIsValid())
            {
                $oConnection    = msSql_connect($sServerName, $sUserName, $sPwd);
                fnDbNameSet($sDbName);
            }
            else
            {
                throw("ArgumentNotDefinedException");
            }
        }
        
        function fnDisconnect()
        {
            mySql_Close();
        }
        
        function fnServerNameSet($_sServerName)
        {
            $sServername = $_sServerName;
        }
        
        function fnUserSet($_sUserName, $_sPwd)
        {
            $sUserName  = $_sUserName;
            $sPwd       = $_sPwd;
        }
        
        function fnClassArgIsValid()
        {
            $bOut = true;
            if $sServerName == "" $bOut = false;
            if $sUserName   == "" $bOut = false;
            if $sDbName     == "" $bOut = false;
            return $bOut;
        }
        
        function fnDbNameSet($_sDbName)
        {
            $sDbName = $_sDbName
            if(oConnection != "")
            {
                mySql_select_db($sDbName, $oConnection);
            }
        }
        
    }
?>
