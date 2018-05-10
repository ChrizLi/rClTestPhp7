<?php

//namespace ChrizLi/basic;

class CXltString
{
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

    private static $_sDel = ","; // default delimiter for all listFunctions

    //public static function __construct(){}
    
    public static function FnRight(string $s, int $n): string
    {   // emulates classic string right()
        $nLen = strlen($s);
        If ($n > 0) // default Right()
        {
            if ($nLen != 0 and $n <= $nLen)
            {
                return substr($s, $nLen-$n, $n);
            }
            else
            {
                self::FnErrorThrow("ArgumentNotValidException1");
            }
        }
        else    // cut of chars from left, e.g. FnRight("abcde",-2) => "cde"
        {
            if ($nLen != 0 and abs($n) <= $nLen)
            {
                return subStr($s, abs($n), $nLen+$n);
            }
            else
            {
                self::FnErrorThrow("ArgumentNotValidException2");
            }
        }
    }
    
    public static function FnLeft(string $s, int $n)
    {   // emulates classic string left()
        $nLen = strLen($s);
        if ($n > 0) // default left()
        {
            if ($nLen != 0 and $n <= $nLen)
            {
                return substr($s, 0, $n);
            }
            else
            {
                self::FnErrorThrow("ArgumentNotValidException1");
            }
        }
        else    // cut of chars from right, e.g. FnLeft("abcde", -2) => "abc"
        {
            if ($nLen != 0 and abs($n) <= $nLen)
            {   
                // abcdefg
                // 0123456
                return subStr($s, 0, $nLen-abs($n));
            }
            else
            {
                self::FnErrorThrow("ArgumentNotValidException2");
            }
        }
    }
    
    public static function fnOccurrenceCountGet(string $sList, string $sSearch)
    {   // return count of occurrence for given $sSearch in $sList, returns 0 if not existing
        $sOut   = str_replace($sSearch, '', $sList);
        return  strLen($sList) - strLen($sOut);
    }
    
    public static function FnOccurrencePositionGet(string $s, string $sSearch, int $nOccureToFind, bool $bErrorThrow=true)
    {   // returns pos of given occurrence, returns 0 if not existing
        $nMaxOccure = 0;
        $nPos       = 0;
        $nCurOccure = 0;
        $nMaxOccure = self::fnOccurrenceCountGet($s, $sSearch);
        if ($nMaxOccure > 0 and $nMaxOccure >= $nOccureToFind)
        {
            $nPos   = 0;
            while($nCurOccure < $nOccureToFind)
            {
                $nCurOccure++;
                $nPos = striPos($s, $sSearch, $nPos+1);
            }
            $nPos++;
        }
        elseIf ($nMaxOccure < $nOccureToFind and $bErrorThrow)
        {
            self::fnErrorThrow("ArgumentNotValidException1");
        }
        return $nPos;
    }
    
    

    public static function fnListAppend(string $sList, string $sItem, ?string $sDel=null)
    {   // add item as last item
        $sDel   = self::FnDelGet($sDel);
        if (strLen($sList)>0)
        {
            $sOut = self::fnListTrim($sList) . $sDel . $sItem;
        }
        else
        {
            $sOut = $sItem;
        }
        return $sOut;
    }
    
    public static function fnListPrepend(string $sList, string $sItem, ?string $sDel=null)
    {   // add item at first pos in $sList
        $sDel   = self::fnDelGet($sDel);
        if (strLen($sList)>0)
        {
            $sOut = $sItem . $sDel . self::fnListTrim($sList);
        }
        else
        {
            $sOut = $sItem;
        }
        return $sOut;
    }

    public static function fnListLen(string $sList, ?string $sDel=null)
    {   // returns qty of items in $sList
        $sDel   = self::fnDelGet($sDel);
        if (strLen($sList) > 0)
        {
            $nOut = self::fnOccurrenceCountGet($sList, $sDel)+1;
        }
        else
        {
            $nOut = 0;
        }
        return  $nOut;
    }
    
    public static function FnListItemGet(string $sList, int $nPos, ?string $sDel=null)
    {   // returns single item at given $nPos
        $sDel   = self::fnDelGet($sDel);
        // get item at ListPos $nPos
        if (strLen($sList)==0)
        {
            $sOut = "";
        }
        elseIf ($nPos<1 or $nPos>self::fnListLen($sList, $sDel))
        {
            self::fnErrorThrow("ArgumentNotValidException1");
        }
        elseif ($nPos==1)
        {
            $nStrPosPrefix  = 1;
            $nStrPosSuffix  = self::fnOccurrencePositionGet($sList, $sDel, $nPos);
            $sOut = subStr($sList, $nStrPosPrefix, $nStrPosSuffix - $nStrPosPrefix);
        }
        else
        {
            $nStrPosPrefix  = self::fnOccurrencePositionGet($sList, $sDel, $nPos-1);
            $nStrPosSuffix  = self::fnOccurrencePositionGet($sList, $sDel, $nPos);
            $sOut = subStr($sList, $nStrPosPrefix, $nStrPosSuffix - $nStrPosPrefix);
        }
        return  self::fnListTrim($sOut, $sDel);
    }

    public static function fnListFindNoCase(string $sList, $sItem, ?string $sDel=null): int
    {   //returns Pos of $sItem if found, if not found: 0
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel); 
        $nOut   = array_search($sItem, $oAr);
        if ($nOut != false)$nOut++;
        return    $nOut;
    }
    
    public static function fnListRestRight(string $sList, ?string $sDel=null): string
    {   // drops last item, returns rest
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel);
        $sTemp  = array_pop($oAr);
        $sOut   = self::fnArrayToList($oAr, $sDel);
        return  $sOut;
    }
    
    public static function fnListRest(string $sList, ?string $sDel=null): string
    {   // drops first item, returns rest
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel);
        $sTemp  = array_shift($oAr);
        $sOut   = self::fnArrayToList($oAr, $sDel);
        return  $sOut;
    }
    
    public static function fnListReverse(string $sList, ?string $sDel=null): string
    {   // returns list items in reverse order
        $sDel   = self::fnDelGet($sDel);
        $oAr    = array_reverse(self::fnListToArray($sList, $sDel));
        $sOut   = self::fnArrayToList($oAr, $sDel);
        return  $sOut;
    }
    
    public static function fnListTrim(string $sList, ?string $sDel=null): string
    {   // trims delimiter on both sides (and drops empty items at begining and ending)
        $sDel   = self::fnDelGet($sDel);
        if (strLen($sList)!=0)
        {
            if (self::fnLeft($sList,1) == $sDel)
            {
                $sList = self::fnRight($sList, strLen($sList)-1);
            }
            if (self::fnRight($sList,1) == $sDel)
            {
                $sList = self::fnLeft($sList, strLen($sList)-1);
            }
        }
        return $sList;
    }
    
    public static function fnListToArray(string $sList, ?string $sDel=null): array
    {   // returns array of items from given list
        $sDel   = self::fnDelGet($sDel);
        return  explode($sDel, $sList);
    }
    
    public static function fnArrayToList(array $oAr, ?string $sDel=null): string
    {   //returns stringList from given array (values, not keys)
        $sDel   = self::fnDelGet($sDel);
        return  implode($sDel, $oAr);
    }
    
    public static function fnListRemoveDuplicates(string $sList, ?string $sDel=null): string
    {   // dels duplicate items from list
        $sDel   = self::fnDelGet($sDel);
        $oAr    = array_unique(self::fnListToArray($sList, $sDel));
        return  self::fnArrayToList($oAr, $sDel);
    }
    
    public static function fnListFirstGet(string $sList, ?string $sDel=null): string
    {   // returns first item in list
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel);
        return  array_shift($oAr);
    }
    
    public static function fnListLastGet(string $sList, ?string $sDel=null): string
    {   // returns last item in list
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel);
        return  array_pop($oAr);
    }
    
    public static function fnListSort(string $sList, ?string $sDel=null)
    {   // returns list as sorted
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel);
        $bTemp  = aSort($oAr, SORT_STRING);
        return  self::fnArrayToList($oAr, $sDel);
    }
    
    public static function fnListReplace(string $sList, string $sSource, string $sTarget, ?string $sDel=null)
    {   // -    we replace full listItems only (no parts of it e.g. FnListReplace("rother", "x", "Brother,rother") => "Brother,x"
        //      to ensure this behaviour we add the delimiter to the search and replace string
        $sDel   = self::fnDelGet($sDel);
        $sList  = $sDel.$sList.$sDel;
        return  self::fnListTrim(str_iReplace($sDel.$sSource.$sDel, $sDel.$sTarget.$sDel, $sList), $sDel);
    }
    
    public static function fnListDelimiterChange(string $sList, string $sSource, string $sTarget, ?bool $bStrict=true)
    {   // changes existing delimiter ($sSource) to $sTarget
        // $bStrict throws exception if target char already existing
        if(strLen($sTarget)!=1)
        {
            self::fnErrorThrow("ArgumentNotValidException1");
        }
        else
        {
            if(self::fnOccurrenceCountGet($sList, $sTarget)> 0 and $bStrict)
            {
                self::fnErrorThrow("ArgumentNotValidException2");
            }
            else
            {
                $sOut = str_iReplace($sSource, $sTarget, $sList);
            }
        }
        return  $sOut;
    }
    
    public static function fnListItemEmptyDel(string $sList, ?string $sDel=null)
    {   // deletes empty List entries
        $sDel   = self::fnDelGet($sDel);
        $oAr    = self::fnListToArray($sList, $sDel);
        $oAr2   = array_filter($oAr, function($value){return $value !== '';});
        return  self::fnArrayToList($oAr2,$sDel);
    }
    
    public static function fnListIns(string $sList, string $sItem, int $nPos, ?string $sDel=null)
    {   // insert $sItem int $sList at $nPos
        $sDel   = self::fnDelGet($sDel);
        if ($nPos == 1)
        {   // add at first pos
            $sOut = self::fnListPrepend($sList, $sItem, $sDel);
        }
        else
        {
            if($nPos > self::fnListLen($sList, $sDel))
            {   // add at last pos
                $sOut       = self::fnListAppend($sList, $sItem, $sDel);
            }
            else
            {   // add in between
                $oItemAr    = array($sItem);
                $oAr        = self::fnListToArray($sList, $sDel);
                $oPre       = array_slice($oAr, 0, $nPos-1);
                $oSuf       = array_slice($oAr, $nPos-1);
                $oAr        = array_merge($oPre, $oItemAr, $oSuf);
                $sOut       = self::fnArrayToList($oAr, $sDel);
            }
        }
        return  $sOut;
    }
    
    public static function fnListDel(string $sList, int $nPos, int $nCnt=1, ?string $sDel=null)
    {   // deletes $nCnt items in $sList beginning at $nPos
        $sDel   = self::fnDelGet($sDel);
        if ($nCnt < 1) throw new \Exception("ArgumentNotValidException1");
        if ($nPos < 1 or $nPos > self::fnListLen($sList, $sDel)) self::fnErrorThrow("ArgumentNotValidException2");
        
        if($nPos == 1 and $nCnt==1)
        {   // del at first pos
            $sOut = self::fnListRest($sList, $sDel);
        }
        else
        {   // del in between
            // 12345    2,2 => del 2 & 3
            // 01234    1,2
            $oAr    = self::fnListToArray($sList, $sDel);
            $oPre   = array_slice($oAr, 0, $nPos-1);
            $oSuf   = array_slice($oAr, $nPos-1+$nCnt);
            $oAr    = array_merge($oPre,$oSuf);
            $sOut   = self::fnArrayToList($oAr, $sDel);
        }
        return  $sOut;
    }


    
    public static function FnDelGet(?string $sDel=null)
    {   // getter for Default delimiter, may be overwritten by argument
        if($sDel==null) $sDel=self::$_sDel;
        return  $sDel;
    }
    
    public static function FnDelSet(string $sDel)
    {   // setter for default delimiter
        if(strLen($sDel)<>1)
        {
            self::fnErrorThrow("ArgumentNotValidException1");
        }
        $_sDel = $sDel; 
    }
    
    
    private static function fnErrorThrow($s)
    {   
        throw new \exception($s);
    }
}
?>