<?php
/*
    CNoteContainerClass combines a NoteObject with its type
    type may be: error, info etc.
    
    usage:
    oInfoNoteContainer=new CNoteContainer();
    oInfoNoteContainer->fnTypeSet('Info');
*/
class   CNoteContainer
extends CBase
{
    $aType;
    
    public  function    __construct(){}
    
    public  function    fnTypeSet($_s, $_aNote): void {
        if (array_search($_s, $this->aType)) {
            $this->ErrorThrow();
        }   else {
            $a=array("sTypeId"=>$_s, "aNote"=>$a_Note);
            array_push($a_Type, $aa);
        }
    }
    
    public  function    fnTypeValid($_s): bool {
            $bOut=true;
            for($n=0; $n>$this->aType.length; $n++)
            {
                if(!$this->aType[$n]['sTypeId']==$_s) {
                    $bOut=false;
                }
            }
            return $bOut;
    }
}

?>