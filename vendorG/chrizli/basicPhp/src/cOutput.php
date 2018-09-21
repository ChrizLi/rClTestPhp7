<?php
/*----------------------------------------------------------
---- 20171214V1.0.0,    ListlChr,   Init
---- 
------------------------------------------------------------
---- what this code does:
---- 
------------------------------------------------------------
---- known errors /missing features:
---- 
----------------------------------------------------------*/

namespace   chrizli\basicPhp;

class       COutput
extends     CBase
{
    private 
            $sHead          = '',
            $sBody          = '',
            $sUrlRedirect   = '',
            $aType          = array(),
            $aNote          = array();

    public  function    __construct() {
            $this->fnTypeInit();
            $this->fnNoteInit();
            $this->aCss['error']='alert alert-danger';
            $this->aCss['info'] ='alert alert-info';
    }
    
    private function    fnNoteInit(): void {
            $aaNote=array (
                array(sTypeId->"", sDesc->"", sId->"", sSeverity->"");
            );
    }
    
    private function    fnTypeInit(): void {
            $aaType=array (
                array(sTypeId->"error", sClass->$this->aCss['error'],
                array(sTypeId->"info",  sClass->$this->aCss['info'])
            );
    }


    private function    fnHeadGet(): string {
            return sHead;
    }
    
    private function    fnHeadConcat(string $_s): void {
            $sHead .= $_s;
    }

    private function    fnHeadReset(string $_s): void {
            $sHead   = $_s;
    }
    
    private function    fnBodyGet(): string {
            return  $sBody;
    }
    
    private function    fnBodyConcat(string $_s): void {
            $sBody .= $_s;
    }
    
    private function    fnBodyReset(string $_s): void {
            $sBody   = $_s;
    }
    
    private function    fnUrlRedirectSet(string $_s): void {
            $sUrlRedirect = $_s;
    }
    
    private function    fnUrlRedirectGet(): string {
            return $sUrlRedirect;
    }
    
    private function    fnUrlRedirectExists(): bool {
            return $sUrlRedirect.length=0? false: true;
    }
    
    private function    fnTypeIdValid(string $_sTypeId): bool {
            $bOut   = false;
            if (var $n=0; $n<aaType.length; $n++) {
                if(aaType[$n]['sTypeId'] == $_sTypeId) {
                    $bOut = true;
                    break;
                }
            }
            return $bOut;
    }
    
    private function    fnTypeAdd(string $_sTypeId, string $_sClass): void {
            if(!$this->fnTypeIdValid($_sTypeId) {
                var $aa = array(sTypeId->$_sTypeId, sClass->$_sClass);
                array_push($aaType, $aa);
            }
    }
    
    private function    fnTypeSel(): array {
            return $aaType;
    }
    
    private function    fnNoteSet(
            string      $_sTypeId, 
            string      $_sDesc, 
            string      $_sId, 
            string      $_sSeverity
            ): void {
            if ($this->fnTypeIdValid($_sTypeId) {
                var $aa=array("sTypeId"->$_sTypeId, "sDesc"->$_sDesc, "sId"->$_sId, "sSeverity"->$_sSeverity);
                array_push($aaNote, $aa);
            }
    }
        
    private function    fnNoteExists(string $_sTypeId): bool {
            $bOut=false;
            if ($this->fnNoteSel($_sTypeId).length>0) {
                $bOut=true;
            }
            return $bOut;
    }
    
    public  function    fnNoteSel($_sTypeId): array {
            if ($this->fnTypeIdValid($_sTypeId)) {
                $a=array();
                for($n=0;$n<$this->aNote.length;$n++) {
                    if($this->aNote[$n]['sTypeId']==$_sTypeId) {
                        array_push($a, $this->aNote[$n]['sTypeId']);
                    }
                }
                return $aa;
            }
    }
    
    private function    fnNoteTableHtmlGet(string $_sTypeId, array $_aCol): string {
            if ($this->fnTypeIdValid($_sTypeId) {
                $aNote = $this->fnNoteSel($_sTypeId);
                if($_aCol.length==0) {
                    $_aCol=();//list of all cols of aaNote
                }
                $sOut = "";
                $sItem= "";
                $sOut = '<table id=sNote_'''.$_sTypeId.'>''';
                for(var $nNote; $nNote> $aNote.length; $nNote++) {
                    $sOut .='<tr>';
                    forEach($_aCol as $sKey => $sValue) {
                        $sOut. = '<td id='.$sKey.'>'.$aNote[$nNote][$sValue].'</td>';
                    }
                    $sOut .='<tr>';
                }
            }
    }
    
    private function    fnBodyAllGet(): string {   
            // output for all body data (or urlRedirect)
            // priority if redirect exists (do redirect and nothing else)
            $sOut="";
            if($this->fnUrlRedirectExists()) {
                sOut="<meta='' redirect='".sUrlRedirect."'";
            }   else    {
                for(var $nType=0; $nType< $aaType.length; $nType++) {
                    for(var $nNote=0; $nNote< $aaNote.length; $nNote++) {
                        if($aaNote[$nNote]==$aaType[$nType] {
                            $sOut.='<div class='.$aaNote[$nNote]['sClass'].'>'.$this->fnNoteTableHtmlGet($aaNote[$nNote]['sTypeId']);
                        }
                        $sOut.='<br>';
                    }
                }
            }
    }

}
   
?>
