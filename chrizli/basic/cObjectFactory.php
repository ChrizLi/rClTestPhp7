<?php

//----------------------------------------------------------
---- 20180305V1.0.0,    ListlChr,   Init
---- 
------------------------------------------------------------
---- what this code does:
---- -  create all types of objects (factory) contained in candidateList [fnInit()]  
---- -  always calls fnConstructor(oObjectAdmin=oObjectAdmin)
---- -  should be called by fnObjectAdmin
---- 
------------------------------------------------------------
---- known errors /missing features:
---- 
----------------------------------------------------------//

    private static $_aaClass=array();
    private static $_oObjectAdmin="";

    function __construct(oObjectAdmin)//object
    {
        self::fnInit();
        self::fnObjectAdminSet(oObjectAdmin);
        return this;
    }

    private static function fnCreate($sId, $aaArg)//object
    {
        if(!self::fnArgSetValid())
        {
            self::fnErrorThrow("");
        }
        var $sPathFq = self:fnPathGet($sId);
        if(self::fnClassNameValid($sId)
        {
            self::fnErrorThrow("");
        }
        if(!$aaArg.length==0)
        {
            $aaArg['oObjectAdmin']= $oObjectAdmin;
        }
        return \new $sPathFq($aaArg);
    }
    
    private static fnInit()//assoricated array
    {
        var sPath='/chrisli/basic/';
        //array_push($_aaClass, 'fnXltString', sPath);
        //array_push($_aaClass, 'fnXltFile',   sPath);
        //array_push($_aaClass, 'fnFile',      sPath);
        //array_push($_aaClass, 'fnOutput',    sPath);
        return $_aaClass;
    }
    
    private static fnObjectAdminSet($oObjectAdmin, $bErrorThrow)//bool
    {
        var $bOut=true;
        if(isInstanceOf($oObjectAdmin, self::fnPathGet('fnObjectAdmin'))
        {
            $_oObjectAdmin = $sObjectAdmin;
        }
        else
        {
            $bOut=false;
        }
        return $bOut;
    }
    
    private static fnArgSetValid(bErrorThrow)//bool
    {   //chk if all required args are set and done
        var $bOut = true;
        if(!isInstanceOf($_oObjectAdmin, self::fnPathGet('fnObjectAdmin');
        {
            $bOut=false;
        }
        return $bOut;
    }
    
    private static fnPathGet($sId)//string
    {
        return $_aaClass[$sId] & $sId;
    }
    
    private static fnClassNameValid($s)//bool
    {
        var $bOut = false;
        if(array_key_exists($s, $_aaClass))
        {
            $bOut=true;
        }
        return $bOut;
    }
        
    <cfFunction     name="fnErrorThrow"     output="false"  access="private"    returnType="void">
        <cfArgument name="sType"            type="string"   required="false"    default="">
        <cfArgument name="sMsg"             type="string"   required="false"    default="">
        <cfThrow    type="#arguments.sType#" message="#arguments.sMsg#">
    </cfFunction>
</cfComponent>