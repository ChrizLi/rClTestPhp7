<? php
    // 20180401,    ListlChr,   init
    // class holds collection of all provided objects (no object will be created)
    // provides option to easily get list of same instances
    // provides option to return singletons
    
    var $aaObject=array();

    function __construct()
    {
        fnAdd(this);
        return this;
    }

    function fnAdd($oObject, $sId)
    {
        $bOut=fnOjectAdd
        (
            $oObject,
            $sId
        )
        return $bOut;
    }    
     
    function fnObjectAdd($oObject, $sId)
    {
        var $bOut=true;
        if($sId=='')
        {
            $sId=fnClassNameGet($oObject)
        }
        if(!fnIdExists($sId)
        {
            $aaClass[$sId]=$oObject;
        }
        else
        {
            $bOut=false;
        }
        $aaClass[$sId]=$oObject;
        return $bOut;
    }

    function fnDel($sId)
    {
        array_delete($aa, $sId);
    }
        
    function fnUpd($sId, $oObject)
    {
        $aa[$sId]=$oObject;
    }
    
    function fnIdExists($sId)
    {
        var $bOut=false;
        if(array_key_exists($aaClass, $sId))
        {
            $bOut=true;
        }
        return $bOut;
    }

    function fnSel()
    {
        return $aaClass;
    }

    function fnGet($sId)
    {
        return $aaClass[$sId];
    }

    function fnIdGet($oObject)
    {
        return array_search($aaClass, $oObject);
    }
    
    function fnClassNameGet($oObject)
    {
        var $sOut=getPathToClass($oObject);
        var $aa=explode($sOut, '/');
        return array_popr($aa);
    }

    protected function getDir()
    {
         $reflector = new ReflectionClass(get_class($this));
         return dirname($reflector->getFileName());
    }

?>
