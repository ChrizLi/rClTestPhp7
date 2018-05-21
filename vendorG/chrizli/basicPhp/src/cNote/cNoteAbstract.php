<?php

abstract 
class       CNote
extends     CBase
{   // abstract class
    private
            $aNote;

    public  function    __construct() {
    }
        
    public  function    fnSet(array $_a): void {
            array_push($this->aNote, $_a);
            return count($this->aNote);
    }
    
    public  function    fnGet(int $_n=null): array {
            if ($_n==null) {
                return  $this->aNote;
            }   else {
                if ($this->fnExists($_n)) {
                    return $this->aNote[$_n];
                }   else {
                    $this->fnErrorThrow('ArgIsNotValid');
                }
            }
    }
    
    public  function    fnExists(): bool {
            if (count($this->aNote)=0) {
                return false;
            }
            return true;
    }
    
    public  function    fnTableGet(): string {
            $sOut   = '';
            $sItem  = '';
            forEach($this->aNote as $sItem) {
                $sOut.='<tr><td'. $sItem .'</td></tr>';
            }
            return $sOut;
    }
    
    public  function    fnListGet(): string {
            $sOut   = '';
            $sItem  = '';
            forEach($this->aNote as $sItem) {
                $sOut.='<li>'. $sItem .'</li>';
            }
            return $sOut;
    }
}

?>