<?php

class CNoteAssy
{   // combination of CNote and NoteType

    var $sTypeId='';
    var $oNote='';

    function __construct()
    {
        $oNote=new CNote();
        return this;
    }
    
    function fnTypeSet($s)//void
    {
        $sTypeId=$s;
    }
    
    function fnTypeGet()//array
    {
        return $sTypeId;
    }
    
    function fnNoteObjectSet($o)
    {
        $oNote=$o;
    }
    
    function fnNoteSet()//void
    {
        $oNote=>
    }
    
    function fnNoteGet()//ar
    {
    }
    
    function fnNoteExists()//bool
    {
    }
}
?>
