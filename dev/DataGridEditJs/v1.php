<html>
<head>

<?php
    $oDsn   = new CDsn;
    $oDsn->fnSet("dev");
    $oModel = new CData(oDsn);
    $aaArg  = fnRxArg();
    fnProcSelector($aaArg);
    $sOut   = '';
    
    public function    fnProcSelector(array $_aa){
        if          ($_aa['sProcess'] = 'list'){
            fnProcList($_aa);
        }   elseIf  ($_aa['sProcess'] = 'ins'){
            fnProcIns($_aa);
        }   elseIf  ($_aa['sProcess'] = 'upd'){
            fnProcUpd($_aa);
        }   elseIf  ($_aa['sProcess'] = 'del'){
            fnProcDel($_aa);
        }
    }
    
    private function    fnProcList(array $_aa){
        $aData  = fnSel();
        var     $aColName=['nId'=>'Id', 'sKey'=>'Key', 'sLabel'=>'Label'];
        $sOut   = fnTableHtmlGet($aColName, $aData);
        $sOut  .= fnFormHtmlGet($aColName);
    }
    private function    fnProcIns (array $_aa){
        $sUrl   = fnUrlParam($_aa);
        location= $sUrl;
    }
    private function    fnProcUpd (array $_aa){
        $sUrl   = fnUrlParam($_aa);
        location= $sUrl;
    }
    private function    fnProcDel (array $_aa){
        $sUrl   = fnUrlParam($_aa);
        location= $sUrl;
    }
    
    private function    fnTableHeadHtmlGet(array $_aColName){
        var $sKey,
            $sValue,
            $sOut='<tr>';
            
        forEach($_aColName as $sKey => $sValue){
            $sOut .='<td>'. $sValue .'</td>';
        }
        return  $sOut . '</tr>';
    }
    
    private function    fnTableHtmlGet(array $_aColName, array $_aData){
        var $sOut='<table id="sDataTable">' . fnTableHeadHtmlGet($_aColName);
        forEach ($_aData as $aRow){
            $sOut .= '<tr>'
                    .'<td>'. $aRow['nId']   .'</td>'
                    .'<td>'. $aRow['sKey']  .'</td>'
                    .'<td>'. $aRow['sLabel'].'</td>'
                    .'</tr>'
        }
        $sOut   .= '</table>';
        return  $sOut;
    }
    
    private function    fnFormHtmlGet(array $_aa){
        var $sKey,
            $sValue,
            $sOut       ='';
        $sOut .='<form>';
        forEach($_aa as $sKey => $sValue){
            $sOut .='<label for="'. $sKey .'">'. $sValue .':</label>';
            $sOut .='<input type="text" name="'. $sKey .'" id="'. $sKey .'">';
        }
        $sOut .='</form>';
        /*
        $sOut .='<form>';
        $sOut .='<label for="nId">Id:</label>';
        $sOut .='<input type="text" name="nId"      id="nId">';
        $sOut .='<label for="sKey">Key:</label>';
        $sOut .='<input type="text" name="sKey"     id="sKey">';
        $sOut .='<label for="sLabel">Label:</label>';
        $sOut .='<input type="text" name="sLabel"   id="sLabel">';
        $sOut .='</form>';
        */
        return  $sOut;
    }
    
    function    fnRxArg(array $_aaUrl, array $_aaForm): array{
        var $aaArg,
            $sKey;
        $sKey='sProcess';
        if ($_aaForm[$sKey]){
            $aaArg[$sKey]=$_aaForm[$sKey];
        }   elseIf  ($_aaUrl[$sKey]){
            $aaArg[$sKey]=$_aaUrl[$sKey];
        }   else    {
            fnErrorThrow('ArgNotValid');
        }
        $sKey='nId';
        if ($_aaForm[$sKey]){
            $aaArg[$sKey]=$_aaForm[$sKey];
        }   elseIf  ($_aaUrl[$sKey]){
            $aaArg[$sKey]=$_aaUrl[$sKey];
        }   else    {
            fnErrorThrow('ArgNotValid');
        }
        return  $aaArg;
    }
?>

<script>
    function    fnMain(){
        fnRowOnClickAdd();
    }
    
    function    fnRowOnClickAdd(){
        var oTable  = getElementById('sDataTable');
        var oTr     = oTable.getElementByType('tr');
        forEach(){
            oTr[nLoop].attachEvent();
        }
    }
    
    function    fnTrOnClick(int nId){
        
    }
    
    
</script>

</head>
<body onLoad="fnMain()">
<?php
    %sOut%
?>
</body>
</html>
