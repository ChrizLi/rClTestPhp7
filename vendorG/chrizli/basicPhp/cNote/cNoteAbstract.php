<?php

abstract class CNote
{   // abstract class
    var $ar=array();

    function __construct()//this
    {
        return this;
    }
        
    function fnSet($sMsg)//void
    {
        var $aa=array("sMsg"=>$sMsg);
        array_push($aa, $ar);
    }
    
    function fnGet()//array
    {
        return  $ar;
    }
    
    function fnExists()//bool
    {
        var $bOut=true;
        if($ar.length=0)
        {
            $bOut=false;
        }
        return $bOut;
    }
    
    function fnTableGet()//string
    {
        var $sOut='';
        var $sItem='';
        forEach($ar as $sItem)
        {
            $sOut.='<tr><td'.$sItem.'</td></tr>';
        }
        return $sOut;
    }
    
    function fnListGet()//string
    {
        var $sOut='';
        var $sItem='';
        forEach($ar as $sItem)
        {
            $sOut.='<li>'.$sItem.'</li>';
        }
        return $sOut;
    }
}

?>