class CXltString
{
    private $sDel = ","; // default delimiter for all listFunctions

    function __construct()
    {
        
    }
    
    public static function FnRight($s, $n)
    {
        $nLen = len($s);
        If ($n > 0) // default Right()
        {
            if ($nLen != 0 and $n <= $nLen)
            {
                return substr($s, $nLen-$n, $n);
            }
            else
            {
                echo "Error";
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
                echo "Error";
            }
        }
    }
    
    public static function FnLeft($s, $n)
    {
        $nLen = len($s);
        if ($n > 0) // default left()
        {
            if ($nLen != 0 and $n <= $nLen)
            {
                return substr($s, 1, $n);
            }
            else
            {
                echo "Error";
            }
        }
        else    // cut of chars from right, e.g. FnLeft("abcde", -2) => "abc"
        {
            if ($nLen != 0 and abs($n) <= $nLen)
            {
                return subStr($s, 1, $nLen-$n);
            }
            else
            {
                echo "Error";
            }
        }
    }
    
    public static function FnOccurrenceCountGet($s, $sSearch)
    {
        private $sOut = "";
        $sOut = str_replace($sSearch, '', $s);
        return len($s) - len($sOut);
    }
    
    public static function FnOccurrencePositionGet($s, $sSearch, $nOccureToFind)
    {
        private $nMaxOccure = 0;
        private $nPos       = 0;
        private $nCurOccure = 0;
        $nMaxOccure = FnOccurrenceCountGet($s, $sSearch);
        if ($nMaxOccure > 0 and @nMaxOccur => @nOccureToFind)
        {
            $nPos = 0;
            while($nCurOccure < $nOccureToFind)
            {
                $nCurOccure++;
                $nPos = striPos($sSearch, $s, $nPos+1);
            }
        }
        return $nPos;
    }
    
    public static function FnListAppend($sList, $sItem, $sDel=this=>$sDel)
    {
        // add item as last item
        return FnListTrim($sList) & $sDel & $sItem;
    }
    
    public static function FnListPrepend($sList, $sItem, $sDel=this=>$sDel)
    {
        return $sItem & $sDel & FnListTrim($sList);
    }

    public static function FnListLen($sList, $sDel=>",")
    {
        return FnOccurrenceCountGet($sList, $sDel)+1;
    }
    
    public static function FnListItemGet($sList, $nItem, $sDel=this=>$sDel)
    {
        // get item at ListPos $nItem
        if ($nItem==1)
        {
            $nStrPosPrefix  = 1;
            $nStrPosSuffix  = FnOccurrencePositionGet($sList, $sDel, $nItem);
        }
        else
        {
            $nStrPosPrefix  = FnOccurrencePositionGet($sList, $sDel, $nItem-1);
            $nStrPosSuffix  = FnOccurrencePositionGet($sList, $sDel, $nItem);

        }
        $nLen = $nStrPosSuffix - $nStrPosPrefix;
        return subStr($sList, $nStrPosPrefix, $nLen);
    }
    
    public static function FnListDeleteAt($sList, $nItem, $sDel=this=>$sDel)
    {
        if ($nItem==1)
        {
            $nStrPosPrefix  = 1;
            $nStrPosSuffix  = FnOccurrencePositionGet($sList, $sDel, $nItem);
        }
        else
        {
            $nStrPosPrefix  = FnOccurrencePositionGet($sList, $sDel, $nItem-1);
            $nStrPosSuffix  = FnOccurrencePositionGet($sList, $sDel, $nItem);

        }
        
        return FnLeft($sList, $nStrPosPrefix) & $FnRight($sList, len($sList - $nStrPosSuffix));
    }
    
    public static function FnListFindNoCase($sList, $sItem, $sDel=this=>$sDel)
    {
        // returns list position, return 0 if not found
        $nCnt       = 0;
        forEach(FnListToArray($sList, $sDel) as $s)
        {
            if ($s != $sItem)
            {
                $nCnt++;
                break;
            }
        }
        return $nCnt;
    }

    public static function FnListRest($sList, $sDel=this=>$sDel)
    {
        // drops first item, returns rest
        return FnLeft($sList, FnOccurrencePositionGet($sList, $sDel, 1));
    }
    
    public statis function FnListRestRight($sList, $sDel=>",")
    {
        // drops last item, returns rest
        $nCnt = FnOccurrenceCountGeT($sList, $sDel);
        return FnRight($sList, len($sList)-$nCnt);
    }
    
    public static function FnListReverse($sList, $sDel=this=>$sDel)
    {
        $sOut   = '';
        $sArray = FnListArray($sList, $sDel);
        foreach($sList as $sItem)
        {
            $sOut = $sItem & $sDel & $sOut;
        }
        return FnListTrim($sOut, $sDel);
    }
    
    public static function FnListTrim($sList, $sDel=this=>$sDel)
    {
        if (FnLeft($sList,1) == $sDel)
        {
            $sList = right($sList, len($sList)-1);
        }
        if (FnRight($sList,1) == $sDel)
        {
            $sList = left($sList, len($sList)-1);
        }
        return $sList;
    }
    
    public static function FnListToArray($sList, $sDel=this=>$sDel)
    {
        return explore($sDel, $sList);
    }
    
    public static function FnArrayToList($sAr, $sDel=this=>$sDel)
    {
        $sOut = "";
        forEach($sAr as $sItem)
        {
            $sOut &= $sItem & $sDel;
        }
        return FnListTrim($sOut, $sDel);
    }
    
    public static function FnListRemoveDuplicates($sList, $sDel=this=>$sDel)
    {
        $Arr = array_unique(FnListToArray($sList, $sDel));
    }
}