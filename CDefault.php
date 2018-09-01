<?php

class   CDefault
{
    public  function    __construct() {
        
    }
    
    private function    fnHeadGet(): string {
            return  <<<sId//>>>
                <title>Default.php</title>
                <style>
                    * {
                        font-family:    Lucida Console, Courier New, Monospace, Verdana;
                        font-size:      14px;
                        line-height:    130%;
                    }
                    
                    table.outer {
                        border:     1px solid red;
                        padding:    1px;
                        margin:     1px 1px 1px 1px;
                    }
                    
                    table.inner {
                        border:     1px solid lightgrey;
                    }

                    th, td {
                        border:     1px solid white;
                        padding:    5px;
                        margin:     1px 1px 1px 1px;
                    }

                    td.inner:hover, td.inner:active {background-color: #c5c5c5;}
                </style>
sId;            
    }
    
    private function    fnBodyGet() {
            $sOut   =  '';
            $sPath  = fnPathGet();
            $aDir   = fnLinkSet(fnDirSel($sPath,'dir');
            $aFile  = fnLinkSet(fnDirSel($sPath,'file');
            $aDirUp = fnDirUpLinkGet($_Get);
            return <<<sId//>>>
            fnFileHtmlGet($aDirUp)
            fnFileHtmlGet($aDir)
            fnFileHtmlGet($aFile)
            fnLinkListHtmlGet()
    }    
    
    private function    fnLinkSet() {
            $this->fnLinkListStructHtmlGet();
    }
    
    private function    fnLinkListStructHtmlGet(array $_a): string {
            $sOut = '<table class="outer"><tr>';
            forEach($_a as $sKey => $sValue) {
                $sOut .= '<td valign="top"><table class="inner"><td valign="top"><h1>'. $sKey . '</h1></td></tr>';
                forEach($_a[$sKey] as $sKey2 = $sValue2) {
                    $sOut .='<tr><td class="inner">' . $sKey2 . '</td></tr>';
                }
                $sOut .= '</table></td>';
            }
            return $sOut . '</tr></table>';
    }
    
    private function    fnQueryToStructOfArray(): array {}
    
    <cfFunction     name="fnQueryToStructOfArray"   output="false"  access="private"    returnType="struct">
        <cfArgument name="qu"                       type="query"    required="true">
        <cfSet  var st  =structNew()>
        <cfOutput   query="arguments.qu" group="sGroupId">
            <cfSet  structInsert(st, arguments.qu.sGroupId, arrayNew(1))>
            <cfOutput>
                <cfSet  arrayAppend(st[arguments.qu.sGroupId], fnLinkListLinkGet(arguments.qu.sUrl, arguments.qu.sLabel))>
            </cfOutput>
        </cfOutput>
        <cfReturn   st>
    </cfFunction>
    
    private function    fnLinkListLinkGet(string $sUrl, string $sLabel=null): string {
            if( $sLabel==null) {
                $sLabel = $sUrl;
            }
            return  '<a href="' . $sUrl . '">' . $sLabel . '</a>';
    }
    
    private function    fnLinkListInit(): array {
            $aCol       = array('sGroupId', 'sUrl', 'sLabel');
            $aLink      = array();
            $sGroupId   = 'BigINet';
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost8611',  'sLabel'=>'8611dev'));
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost8611/cashback/mxTest',  'sLabel'=>'8611dev:mxTest');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost8611/cashback/dev',     'sLabel'=>'8611dev:dev');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost8611',  'sLabel'=>'8613test');
            array_push($aLink, rray('sGroupId'=>$sGroupId, 'sUrl'=>'http://BigINet',        'sLabel'=>'BigINet');
            $sGroupId   = 'Beip2'
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost:8601', 'sLabel'=>'localhost:8601');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost:8602', 'sLabel'=>'localhost:8602');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://TestMyBeip',     'sLabel'=>'TestMyBeip');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://MyBeip',         'sLabel'=>'MyBeip');
            $sGroupId   = 'Cf10'
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost:8511', 'sLabel'=>'localhost:8511');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost:8513', 'sLabel'=>'localhost:8513');
            array_push($aLink, array('sGroupId'=>$sGroupId, 'sUrl'=>'http://localhost:8515', 'sLabel'=>'localhost:8515');
            return $aLink;
    }
 
    private function    fnLinkSet(array $_a, $string $_sUrl=null) {
        $sOut = '';
        $aOut = array();
        forEach($_a as $sKey=>$sValue) {
            if ($sKey == 'dir') {
                $sOut.'<a href="' . fnFileQueryStringGet($sValue,) $sKey, $_sUrl . '">' . $_a[$sKey]['Name'] . '</a>';
            }   else {
                $sOut.'<a href="' . fnFileQueryStringGet($sValue,) & '" target="_bank">'. $_a[$sKey]['Name'  . '</a>';
            }
            array_push($aOut, $sOut);
        }
        return $aOut;
    }
    
    <cfFunction     name="fnLinkSet"                output="false"  access="private"    returnType="array">
        <cfArgument name="qu"                       type="query"    required="true">
        <cfArgument name="sUrl"                     type="string"   required="false"    default="">
        <cfSet  var sOut="">
        <cfSet  var ar  =arrayNew(1)>
        <cfOutput   query="arguments.qu">
            <cfIf   arguments.qu.type eq "dir">
                <cfSet  sOut="<a href='" & fnFileQueryStringGet(qu.Name,qu.type,arguments.sUrl) &                 "'>"&arguments.qu.Name&"</a>">
            <cfElse><!--- file --->
                <cfSet  sOut="<a href='" & fnFileQueryStringGet(qu.Name,qu.type,arguments.sUrl) & "' target='_blank'>"&arguments.qu.Name&"</a>">
            </cfIf>
            <cfSet  arrayAppend(ar, sOut)>
        </cfOutput>
        <cfReturn   ar>
    </cfFunction>
    
    private function    fnDirUpLinkGet(string $_sUrl=nul): array {
            $a          = array(),
            $sWebRoot   = SERVER['DOCUMEN_ROOT'],
            $sCurDir    = $this->fnPathGet();
            if (strLen($sWebRoot) lt strLen($sCurDir)) {
                array_push($a, '<a href="' . $this->fnFileQueryStringGet('..', 'dir', $_sUrl) . '">Dir</a>');
            }
            return $a;
    }
    
    private function    fnFileQueryStringGet(
            string  $_sName,
            string  $_sType,
            string  $_sUrl          = null,
            string  $_sUrlDefault   = null
    ):  string {
        if (  str_search('1=1', $_sUrlDefault) {
            $sOut = '?1=1';
        }   else {
            $sOut = '';
        }
        if  ( $_sType == 'file') {
            $sOut = $_sName . $sOut;
        }   else {
            $sOut = $_sName . '/' . '/' . $sOut;
        }
        if ($_sUrlDefault == '') {
            $_sUrl = $_sUrlDefault;
        }   else {
            $_sUrl = '&' . $ $_sUrl;
        }
        if ($_sType == 'file') {
            if (strLen($_sName) >= 8) {
                if( substr($_sName,4) eq 'test') {
                    $sOut .= '&method=RunTestRemote';
                }
            }
        }
        return $sOut . $_sUrl;
    }
    
    private function    fnFileHtmlGet(array $_a): string {
            $sOut='',
            $sIdx='';
            forEach($_a as $sKey => $sValue) {
                $sOut.='<li>'.$sValue.'</li>';
            }
            return '<ul>'.$sOut.'</ul>';
    }
    
    private function    fnDirSel(string sPathFq, string sType=null): array {
            if ()
    }

    <cfFunction     name="fnDirSel"                 output="false"  access="private"    returnType="query">
        <cfArgument name="sPathFq"                  type="string"   required="true">
        <cfArgument name="sType"                    type="string"   required="false"    default="all"><!--- [all|file|dir] --->
        <cfIf       not listFindNoCase("all,file,dir", arguments.sType)>
            <cfThrow type="invalidArgument" message="arg.sType not valid">
        </cfIf>
        <cfSet  var qu  ="">
        <cfSet  var arguments.sPathFq = fnNormalize(arguments.sPathFq)>
        <cfDirectory    action="list" directory="#arguments.sPathFq#" name="qu" type="#arguments.sType#">
        <cfReturn   qu>
    </cfFunction>
    
    private function    fnPathGet(string $_sPath): string {
            return ($_sPath=='')? 'currentPath': $_sPath;
    }
    
    private function    fnNormalize(string $_sIn, bool $_bIsSuffixAdd, bool $_bSuffixSet) {
            $sOut       = str_replace($_sIn, $this->sDelimiterRev, $this->sDelimiter);
            $sDupDel    = $this->sDelimiter . $this->sDelimiter;
            $sOut       = str_replace($sOut, $sDupDl, $this->sDelimiter);
            if (substr($sOut,2) == $sDupDel) {
                $sOut = $sDupDel . substr($sOut, len($sOut)-1);
            }
            if ($_bSuffixSet) {
                if ($_bIsSuffixAdd) {
                    if (substr($sOut,-1) != $this->sDelimiter) {
                        $sOut .= $this->sDelimiter;
                    }
                }   else {
                    if (substr($sOut, -1) == $this->sDelimiter) {
                        $sOut = substr($sOut, strLen($sOut)-strLen($this->sDelimiter));
                    }
                }
            }
            return $sOut;
    }
    
}

?>
