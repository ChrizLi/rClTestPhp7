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
class   COutput
extends CBase   {
    private 
            $sHead           = "",
            $sBody           = "",
            $sUrlRedirect    = "",
            $aaType          = "",
            $aaNote          = "";

    public  function __construct(): void {
            $this->fnTypeInit();
            $this->fnNoteInit();
    }

    private function fnHeadGet(): string {
            return sHead;
    }
    
    private function fnHeadConcat(string $s): void{
            $sHead .= $s;
    }

    private function fnHeadReset(string $s): void {
            $sHead   = $s;
    }
    
    private function fnBodyGet(): string {
            return  $sBody;
    }
    
    private function fnBodyConcat(string $s): void {
            $sBody .= $s;
    }
    
    private function fnBodyReset(string $s): void {
            $sBody   = $s;
    }
    
    private function fnUrlRedirectSet(string $s): void {
            $sUrlRedirect = $s;
    }
    
    private function fnUrlRedirectGet(): string {
            return $sUrlRedirect;
    }
    
    private function fnUrlRedirectExists(): bool {
            return $sUrlRedirect.length=0? false: true;
    }
    
    private function fnTypeIdValid(string $sTypeId): bool {
            $bOut   = false;
        if (var $n=0; $n<aaType.length; $n++) {
            if(aaType[$n]['sTypeId'] == $sTypeId) {
                $bOut = true;
                break;
            }
        }
        return $bOut;
    }
        
    private function fnTypeInit(): void {
            $aaType=array (
                array(sTypeId->"error", sClass->"alert alert-danger"),
                array(sTypeId->"info",  sClass->"alert alert-info")
            );
    }
    
    private function fnTypeAdd(string $sTypeId, string $sClass): void {
            if(!self::fnTypeIdValid($sTypeId) {
                var $aa = array(sTypeId->$sTypeId, sClass->$sClass);
                array_push($aaType, $aa);
            }
    }
    
    private function fnTypeSel(): array {
            return $aaType;
    }
    
    private function fnNoteInit(): void {
            $aaNote=array (
                array(sTypeId->"", sDesc->"", sId->"", sSeverity->"");
            );
    }
    
    private function fnNoteSet(
            string  $sTypeId, 
            string  $sDesc, 
            string  $sId, 
            string  $sSeverity
            ): void {
            if(self::fnTypeIdValid($sTypeId) {
                var $aa=array("sTypeId"->$sTypeId, "sDesc"->$sDesc, "sId"->$sId, "sSeverity"->$sSeverity);
                array_push($aaNote, $aa);
            }
    }
        
    private function fnNoteExists(string $sTypeId): bool {
            $bOut=false;
            if (self::fnNoteSel($sTypeId).length>0)
            {
                $bOut=true;
            }
            return $bOut;
    }
    
    private function fnNoteSel(string $sTypeId): array {
            if(self::fnTypeIdValid($sTypeId)) {
                var $aa=array();
                for(var $n=0;$n<$aaNote.length;$n++) {
                    if($aaNote[$n]['sTypeId']==$sTypeId)
                    {
                        array_push($aa, $aaNote[$n]['sTypeId']);
                    }
                }
            }   else    {
                throw \new error("invalid arg");
            }
            return $aa;
    }
    
    private function fnNoteTableHtmlGet(string $sTypeId, array $aa): string {
            if (self::fnTypeIdValid($sTypeId) {
                var $aaa = self::fnNoteSel($sTypeId);
                if($aa.length==0) {
                    $aa=();//list of all cols of aaNote
                }
                $sOut = "";
                $sItem= "";
                $sOut = '<table id=sNote_'''.$sTypeId.'>''';
                for(var $nNote; $nNote> $aaa.length; $nNote++) {
                    $sOut .='<tr>';
                    forEach($aa as $sKey => $sValue) {
                        $sOut. = '<td id='.$sKey.'>'.$aaa[$nNote][$sValue].'</td>';
                    }
                    $sOut .='<tr>';
                }
                $sOut.='</table>';
            }
            return $sOut;
    }
        
    private function fnBodyAllGet(): string {   
            // output for all body data (or urlRedirect)
            // priority if redirect exists (do redirect and nothing else)
            $sOut="";
            if(self::fnUrlRedirectExists()) {
                sOut="<meta='' redirect='".sUrlRedirect."'";
            }   else    {
                for(var $nType=0; $nType< $aaType.length; $nType++) {
                    for(var $nNote=0; $nNote< $aaNote.length; $nNote++) {
                        if($aaNote[$nNote]==$aaType[$nType] {
                            $sOut.='<div class='.$aaNote[$nNote]['sClass'].'>'.self::fnNoteTableHtmlGet($aaNote[$nNote]['sTypeId']);
                        }
                        $sOut.='<br>';
                    }
                }
                $sOut.=self::fnBodyGet();
            }
            return $sOut;
    }
    
?>
