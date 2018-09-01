<?php

class   CNoteAssy
extends CBase
{   // combination of CNote and NoteType

    $sTypeId,
    $oNote;

    public  function    __construct() {
            $oNote=new CNote();
            return this;
    }
    
    private function    fnTypeSet($_s): void {
            $this->sTypeId=$_s;
    }
    
    public  function    fnTypeGet(): array {
            return $sTypeId;
    }
    
    public  function    fnNoteObjectSet($_o) {
            $this->oNote=$_o;
    }
    
    public  function    fnNoteSet($x): void {
            $oNote
    }
    
    public  function    fnNoteGet(): array {
    }
    
    public  function    fnNoteExists(): bool {
    }
}
?>
