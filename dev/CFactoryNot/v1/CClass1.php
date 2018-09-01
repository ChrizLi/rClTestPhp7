<? php

class CClass1{

    function __construct($_oClass1Provider){
        $oXltString = $_oClass1In.fnXltStringGet();
        $data1      = $_oClass1In.fnData1Get();
        $data2      = $_oClass1In.fnData2Get();
    }

    function __construct_OLD($_oXltString){
        $oXltString = $_oXltString;
        $data1=1;
        $data2=fnData2Get();
    }
    
    function fnData2Get(){
        return "s";
    }
}

class CClass1Provider{
    function __construct(){}
    
    function fnXltStringGet(){
        return new fnXltString();   
    }
    
    function fnData1Get(){
        return 1
    }
    
    function fnData2Get(){
        return "s";
    }
}

?>
