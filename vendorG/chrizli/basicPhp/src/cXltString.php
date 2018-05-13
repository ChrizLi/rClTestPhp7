<?php

//namespace ChrizLi/basic;

class   CXltString
extends CBase {
/*--------------------------------------
---- 20180225V1.0.0,    ListlChr, init
---- 20180311V1.0.1,    ListlChr,   drop fnRight and fnLeft usage within class
----
----------------------------------------
---- What this code does:
---- provides basic string functions like FnLeft() and FnRight()
---- 
----------------------------------------
---- known Errors/missing features:
---- 
---------------------------------------*/

    private 
            static $_sDel = ","; // default delimiter for all listFunctions

    public  function    __construct(){}
    
    public  function    fnRight(string $s, int $n): string {   
            // emulates classic string right()
            $nLen = strlen($s);
            if ($n > 0) {
                if ($nLen != 0 and $n <= $nLen) {
                    return substr($s, $nLen-$n, $n);
                }   else {
                    $this->fnErrorThrow("ArgumentNotValidException1");
                }
            }   else {
                if ($nLen != 0 and abs($n) <= $nLen) {
                    return subStr($s, abs($n), $nLen+$n);
                }   else {
                    $this->fnErrorThrow("ArgumentNotValidException2");
                }
            }
    }
    
    public  function    fnLeft(string $s, int $n) {   
            // emulates classic string left()
            $nLen = strLen($s);
            if ($n > 0) // default left() {
                if ($nLen != 0 and $n <= $nLen) {
                    return substr($s, 0, $n);
                } else {
                    $this->nErrorThrow("ArgumentNotValidException1");
                }
            } else {
                if ($nLen != 0 and abs($n) <= $nLen) {   
                    // abcdefg
                    // 0123456
                    return subStr($s, 0, $nLen-abs($n));
                }   else {
                    $this->fnErrorThrow("ArgumentNotValidException2");
                }
            }
    }
    
    public  function    fnOccurrenceCountGet(string $sList, string $sSearch) {
            // return count of occurrence for given $sSearch in $sList, returns 0 if not existing
            $sOut   = str_replace($sSearch, '', $sList);
            return  strLen($sList) - strLen($sOut);
    }
    
    public  function    fnOccurrencePositionGet(string $s, string $sSearch, int $nOccureToFind, bool $bErrorThrow=true) {
            // returns pos of given occurrence, returns 0 if not existing
            $nMaxOccure = 0,
            $nPos       = 0,
            $nCurOccure = 0;
            $nMaxOccure = $this->fnOccurrenceCountGet($s, $sSearch);
            if ($nMaxOccure > 0 and $nMaxOccure >= $nOccureToFind) {
                $nPos   = 0;
                while($nCurOccure < $nOccureToFind) {
                    $nCurOccure++;
                    $nPos = striPos($s, $sSearch, $nPos+1);
                }
                $nPos++;
            }
            elseIf ($nMaxOccure < $nOccureToFind and $bErrorThrow)
            {
                $this->fnErrorThrow("ArgumentNotValidException1");
            }
            return $nPos;
    }
    
    public  function    fnListAppend(string $sList, string $sItem, ?string $sDel=null) {
            // add item as last item
            $sDel   = $this-fnDelGet($sDel);
            if (strLen($sList)>0) {
                $sOut = $this->fnListTrim($sList) . $sDel . $sItem;
            }   else {
                $sOut = $sItem;
            }
            return $sOut;
    }
    
    public  function    fnListPrepend(string $sList, string $sItem, ?string $sDel=null) {   
            // add item at first pos in $sList
            $sDel   = $this->fnDelGet($sDel);
            if (strLen($sList)>0) {
                $sOut = $sItem . $sDel . self::fnListTrim($sList);
            }   else {
                $sOut = $sItem;
            }
            return $sOut;
    }

    public  function    fnListLen(string $sList, ?string $sDel=null) {   
            // returns qty of items in $sList
            $sDel   = $this->fnDelGet($sDel);
            if (strLen($sList) > 0) {
                $nOut = self::fnOccurrenceCountGet($sList, $sDel)+1;
            }   else {
                $nOut = 0;
            }
            return  $nOut;
    }
    
    public  function    fnListItemGet(string $sList, int $nPos, ?string $sDel=null) {   
            // returns single item at given $nPos
            $sDel   = $this->fnDelGet($sDel);
            // get item at ListPos $nPos
            if (strLen($sList)==0) {
                $sOut = "";
            }
            elseIf ($nPos<1 or $nPos>$this->fnListLen($sList, $sDel)) {
                $this->fnErrorThrow("ArgumentNotValidException1");
            }   elseif ($nPos==1) {
                $nStrPosPrefix  = 1;
                $nStrPosSuffix  = $this->fnOccurrencePositionGet($sList, $sDel, $nPos);
                $sOut = subStr($sList, $nStrPosPrefix, $nStrPosSuffix - $nStrPosPrefix);
            }   else {
                $nStrPosPrefix  = $this->fnOccurrencePositionGet($sList, $sDel, $nPos-1);
                $nStrPosSuffix  = $this->fnOccurrencePositionGet($sList, $sDel, $nPos);
                $sOut = subStr($sList, $nStrPosPrefix, $nStrPosSuffix - $nStrPosPrefix);
            }
            return  $this->fnListTrim($sOut, $sDel);
    }

    public  function    fnListFindNoCase(string $sList, $sItem, ?string $sDel=null): int {   
            //returns Pos of $sItem if found, if not found: 0
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel); 
            $nOut   = array_search($sItem, $oAr);
            if ($nOut != false)$nOut++;
            return    $nOut;
    }
    
    public  function    fnListRestRight(string $sList, ?string $sDel=null): string {   
            // drops last item, returns rest
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel);
            $sTemp  = array_pop($oAr);
            $sOut   = $this->fnArrayToList($oAr, $sDel);
            return  $sOut;
    }
    
    public  function    fnListRest(string $sList, ?string $sDel=null): string {   
            // drops first item, returns rest
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel);
            $sTemp  = array_shift($oAr);
            $sOut   = $this->fnArrayToList($oAr, $sDel);
            return  $sOut;
    }
    
    public  function    fnListReverse(
            string      $sList,
            string      $sDel = null
            ): string   {   
            // returns list items in reverse order
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = array_reverse($this->fnListToArray($sList, $sDel));
            $sOut   = $this->fnArrayToList($oAr, $sDel);
            return  $sOut;
    }
    
    public  function    fnListTrim(
            string      $sList,
            string      $sDel   = null
            ): string   {   
            // trims delimiter on both sides (and drops empty items at begining and ending)
            $sDel   = $this->fnDelGet($sDel);
            if (strLen($sList)!=0) {
                if (self::fnLeft($sList,1) == $sDel) {
                    $sList = this->fnRight($sList, strLen($sList)-1);
                }
                if ($this->fnRight($sList,1) == $sDel) {
                    $sList = $this->fnLeft($sList, strLen($sList)-1);
                }
            }
            return $sList;
    }
    
    public  function    fnListToArray(
            string      $sList,
            string      $sDel   = null
            ): array    {   
            // returns array of items from given list
            $sDel   = $this->fnDelGet($sDel);
            return  explode($sDel, $sList);
    }
    
    public  function    fnArrayToList(
            array       $oAr,
            string      $sDel = null
            ): string   {   
            //returns stringList from given array (values, not keys)
            $sDel   = $this->fnDelGet($sDel);
            return  implode($sDel, $oAr);
    }
    
    public  function    fnListRemoveDuplicates(
            string      $sList,
            string      $sDel = null
            ): string   {   
            // dels duplicate items from list
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = array_unique($this->fnListToArray($sList, $sDel));
            return  $this->fnArrayToList($oAr, $sDel);
    }
    
    public  function    fnListFirstGet(
            string      $sList,
            string      $sDel   = null
            ): string   {   
            // returns first item in list
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel);
            return  array_shift($oAr);
    }
    
    public  function    fnListLastGet(
            string      $sList,
            string      $sDel   = null
            ): string   {   
            // returns last item in list
            $sDel   = $tihs->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel);
            return  array_pop($oAr);
    }
    
    public  function    fnListSort(
            string      $sList, 
            string      $sDel   = null
            ): string   {   
            // returns list as sorted
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel);
            $bTemp  = aSort($oAr, SORT_STRING);
            return  $this->fnArrayToList($oAr, $sDel);
    }
    
    public  function    fnListReplace(
            string      $sList, 
            string      $sSource, 
            string      $sTarget, 
            string      $sDel       = null
            ): string   {   
            // -    we replace full listItems only (no parts of it e.g. FnListReplace("rother", "x", "Brother,rother") => "Brother,x"
            //      to ensure this behaviour we add the delimiter to the search and replace string
            $sDel   = $this->fnDelGet($sDel);
            $sList  = $sDel.$sList.$sDel;
            return  $this->fnListTrim(str_iReplace($sDel.$sSource.$sDel, $sDel.$sTarget.$sDel, $sList), $sDel);
    }
    
    public  function    fnListDelimiterChange(
            string      $sList,
            string      $sSource, 
            string      $sTarget,
            bool        $bStrict=true
            ): string   {
            // changes existing delimiter ($sSource) to $sTarget
            // $bStrict throws exception if target char already existing
            if(strLen($sTarget)!=1) {
                $this->fnErrorThrow("ArgumentNotValidException1");
            }   else {
                if($this->fnOccurrenceCountGet($sList, $sTarget)> 0 and $bStrict) {
                    $this->fnErrorThrow("ArgumentNotValidException2");
                }   else {
                    $sOut = str_iReplace($sSource, $sTarget, $sList);
                }
            }
            return  $sOut;
    }
    
    public  function    fnListItemEmptyDel(string $sList, string $sDel=null): string {   
            // deletes empty List entries
            $sDel   = $this->fnDelGet($sDel);
            $oAr    = $this->fnListToArray($sList, $sDel);
            $oAr2   = array_filter($oAr, function($value){return $value !== '';});
            return  $this->fnArrayToList($oAr2,$sDel);
    }
    
    public  function    fnListIns(
            string      $sList, 
            string      $sItem, 
            int         $nPos, 
            string      $sDel   = null
            ): string {   
            // insert $sItem int $sList at $nPos
            $sDel   = $this->fnDelGet($sDel);
            if ($nPos == 1) {   // add at first pos
                $sOut = $this->fnListPrepend($sList, $sItem, $sDel);
            }  else {
                if($nPos > $this->fnListLen($sList, $sDel)) {   // add at last pos
                    $sOut       = $this->fnListAppend($sList, $sItem, $sDel);
                }   else {   // add in between
                    $oItemAr    = array($sItem);
                    $oAr        = $this->fnListToArray($sList, $sDel);
                    $oPre       = array_slice($oAr, 0, $nPos-1);
                    $oSuf       = array_slice($oAr, $nPos-1);
                    $oAr        = array_merge($oPre, $oItemAr, $oSuf);
                    $sOut       = $this->fnArrayToList($oAr, $sDel);
                }
            }
            return  $sOut;
    }
    
    public  function    fnListDel(
            string      $sList, 
            int         $nPos, 
            int         $nCnt   = 1, 
            string      $sDel   = null
            ): string {   
            // deletes $nCnt items in $sList beginning at $nPos
            $sDel   = $this->fnDelGet($sDel);
            if ($nCnt < 1) $this->fnErrorThrow("", "ArgumentNotValidException1");
            if ($nPos < 1 or $nPos > $this->fnListLen($sList, $sDel)) $this->fnErrorThrow("ArgumentNotValidException2");
            if($nPos == 1 and $nCnt==1) {   // del at first pos
                $sOut = $this->fnListRest($sList, $sDel);
            }   else {   // del in between
                // 12345    2,2 => del 2 & 3
                // 01234    1,2
                $oAr    = $this->fnListToArray($sList, $sDel);
                $oPre   = array_slice($oAr, 0, $nPos-1);
                $oSuf   = array_slice($oAr, $nPos-1+$nCnt);
                $oAr    = array_merge($oPre,$oSuf);
                $sOut   = $this->fnArrayToList($oAr, $sDel);
            }
            return  $sOut;
    }

    public  function    fnDelGet(string $sDel=null): string {   
            // getter for Default delimiter, may be overwritten by argument
            if($sDel==null) $sDel=$this->_sDel;
            return  $sDel;
    }
    
    public  function    fnDelSet(string $sDel): void {
        // setter for default delimiter
        if (strLen($sDel)<>1) {
            $this->fnErrorThrow("ArgumentNotValidException1");
        }
        $_sDel = $sDel; 
    }
    
}
?>
