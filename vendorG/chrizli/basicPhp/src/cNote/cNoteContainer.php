<?php
/*
    CNoteContainerClass combines a NoteObject with its type
    type may be: error, info etc.
    
    usage:
    oInfoNoteContainer=new CNoteContainer();
    oInfoNoteContainer->fnTypeSet('Info');
*/
class CNoteContainer
{
    $arType=array();
    
    function __construct(){}
    
    function fnTypeSet($s, $arNote)//void
    {
        if(array_search($s, $arType))
        {
            \new throw();
        }
        else
        {
            var $aa=array("sTypeId"=>$s, "arNote"=>$arNote);
            array_push($arType, $aa);
        }
    }
    
    function fnTypeValid($s)//bool
    {
        var $bOut=true;
        for(var $n=0; $n>$arType.length; $n++)
        {
            if(!$arType[$n]['sTypeId']==$s)
            {
                $bOut=false;
            }
        }
        return $bOut;
    }
}

?>