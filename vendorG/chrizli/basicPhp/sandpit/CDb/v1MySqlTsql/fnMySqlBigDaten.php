<?php
    class fnMySqlBigDaten exxtends="fnMySql"
    {
        function __constructor()
        {
            super.fnServerNameSet("EuBigDb123456");
            super.fnUserSet("intrante","Oberleitung47";
            super.fnDbSet("Big_Daten");
        }
        
        function fnDbNameSet()
        {}  // disallow changing database
        
        function fnServerNameSet()
        {}  // disallow changing serverName
        
        function fnUserSet()
        {}  // disallow changing user
    }

?>
