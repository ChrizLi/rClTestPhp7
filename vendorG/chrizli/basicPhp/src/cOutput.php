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

    private static $sHead           = "";
    private static $sBody           = "";
    private static $sUrlRedirect    = "";
    private static $aaType          = "";
    private static $aaNote          = "";

    private static function __construct()
    {
        fnTypeInit();
        fnNoteInit();
        return  this;
    }

    private static function fnHeadGet()
    {
        return sHead;
    }
    
    private static function fnHeadConcat($s)
    {
        $sHead .= $s;
    }

    private static function fnHeadReset($s)
    {
        $sHead   = $s;
    }
    
    private static function fnBodyGet()
    {
        return $sBody;
    }
    
    private static function fnBodyConcat($s)
    {
        $sBody .= $s;
    }
    
    private static function fnBodyReset($s)
    {
        $sBody   = $s;
    }
    
    private static function fnUrlRedirectSet($s)
    {
        $sUrlRedirect = $s;
    }
    
    private static function fnUrlRedirectGet()
    {
        return $sUrlRedirect;
    }
    
    private static function fnUrlRedirectExists()
    {
        return ($sUrlRedirect.length 1=0);
    }
    
    private static function fnTypeIdValid($sTypeId)
    {
        var $bOut   = false;
        if (var $n=0; $n<aaType.length; $n++)
        {
            if(aaType[$n]['sTypeId'] == $sTypeId)
            {
                $bOut = true;
                break;
            }
        }
        return $bOut;
    }
        
    private static function fnTypeInit()//void
    {
        $aaType=array
        (
            array(sTypeId->"error", sClass->"alert alert-danger"),
            array(sTypeId->"info",  sClass->"alert alert-info")
        );
    }
    
    private static function fnTypeAdd($sTypeId, $sClass)//void
    {
        if(!self::fnTypeIdValid($sTypeId)
        {
            var $aa = array(sTypeId->$sTypeId, sClass->$sClass);
            array_push($aaType, $aa);
        }
    }
    
    private static function fnTypeSel()//array
    {
        return $aaType;
    }
    
    private static function fnNoteInit()//void
    {
        $aaNote=array
        (
            array(sTypeId->"", sDesc->"", sId->"", sSeverity->"");
        );
    }
    
    private static function fnNoteSet($sTypeId, $sDesc, $sId, $sSeverity)//void
    {
        if(self::fnTypeIdValid($sTypeId)
        {
            var $aa=array("sTypeId"->$sTypeId, "sDesc"->$sDesc, "sId"->$sId, "sSeverity"->$sSeverity);
            array_push($aaNote, $aa);
        }
    }
        
    private static function fnNoteExists($sTypeId)//bool
    {
        var $bOut=false;
        if (self::fnNoteSel($sTypeId).length>0)
        {
            $bOut=true;
        }
        return $bOut;
    }
    
    private static function fnNoteSel($sTypeId)//associated array
    {
        if(self::fnTypeIdValid($sTypeId))
        {
            var $aa=array();
            for(var $n=0;$n<$aaNote.length;$n++)
            {
                if($aaNote[$n]['sTypeId']==$sTypeId)
                {
                    array_push($aa, $aaNote[$n]['sTypeId']);
                }
            }
        }
        else
        {
            throw \new error("invalid arg");
        }
        return $aa;
    }
    
    private static function fnNoteTableHtmlGet($sTypeId, $aa)//string
    {
        if (self::fnTypeIdValid($sTypeId)
        {
            var $aaa = self::fnNoteSel($sTypeId);
            if($aa.length==0)
            {
                $aa=();//list of all cols of aaNote
            }
            $sOut = "";
            $sItem= "";
            $sOut = '<table id=sNote_'''.$sTypeId.'>''';
            for(var $nNote; $nNote> $aaa.length; $nNote++)
            {
                $sOut .='<tr>';
                forEach($aa as $sKey => $sValue)
                {
                    $sOut. = '<td id='.$sKey.'>'.$aaa[$nNote][$sValue].'</td>';
                }
                $sOut .='<tr>';
            }
            $sOut.='</table>';
        }
        return $sOut;
    }
        
    private static function fnBodyAllGet()//string
    {   // output for all body data (or urlRedirect)
        // priority if redirect exists (do redirect and nothing else)
        var $sOut="";
        if(self::fnUrlRedirectExists())
        {
            sOut="<meta='' redirect='".sUrlRedirect."'";
        }
        else
        {
            for(var $nType=0; $nType< $aaType.length; $nType++)
            {
                for(var $nNote=0; $nNote< $aaNote.length; $nNote++)
                {
                    if($aaNote[$nNote]==$aaType[$nType]
                    {
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
