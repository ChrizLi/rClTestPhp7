<html>
<head>
    <title>cXltStringTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once("C:/inetpub/rClTestPhp7Dev8721/php/class/cXltString.php");
    $oXltString = new CXltString();
    $sRowEnd = "|<br>";
    
    echo "FnRight():"                   . $oXltString::FnRight                  ("abcdefg", 2) .            $sRowEnd;//fg
    echo "FnRight():"                   . $oXltString::FnRight                  ("abcdefg",-2) .            $sRowEnd;//cdefg
    echo "FnLeft():"                    . $oXltString::FnLeft                   ("abcdefg", 2) .            $sRowEnd;//ab
    echo "FnLeft():"                    . $oXltString::FnLeft                   ("abcdefg",-2) .            $sRowEnd;//abcde
    echo "FnOccurrenceCountGet:"        . $oXltString::FnOccurrenceCountGet     ("a,b,cd", ",")    .        $sRowEnd;//2
    echo "FnOccurrenceCountGet:"        . $oXltString::FnOccurrencePositionGet  ("a,b,cd", ",", 1) .        $sRowEnd;//2
    echo "FnOccurrencePositionGet:"     . $oXltString::FnOccurrencePositionGet  ("a,b,cd", ",", 2) .        $sRowEnd;//4
    echo "FnOccurrencePositionGet:"     . $oXltString::FnOccurrencePositionGet  ("a,b,cd", ",", 3, false) . $sRowEnd;//0
    echo "fnListAppend():"              . $oXltString::FnListAppend             ("a,b,c","d",",").          $sRowEnd;//a,b,c,d
    echo "fnListAppend():"              . $oXltString::FnListAppend             ("a,b,c,","d",",").         $sRowEnd;//a,b,c,d
    echo "fnListAppend():"              . $oXltString::FnListAppend             ("", "d", ",").             $sRowEnd;//d
    echo "fnListPrepend():"             . $oXltString::FnListPrepend            ("b,c,d","a",",").          $sRowEnd;//a,b,c,d
    echo "fnListLen():"                 . $oXltString::FnListLen                ("a,b,c,d",",").            $sRowEnd;//4
    echo "fnListLen():"                 . $oXltString::FnListLen                ("",",").                   $sRowEnd;//0
    echo "fnListLen():"                 . $oXltString::FnListLen                ("a",",").                  $sRowEnd;//1
    //echo "fnListItemGet():"             . $oXltString::FnListItemGet            ("a,b,c,d", 0, ",") .       $sRowEnd;//Exception1
    echo "fnListItemGet():"             . $oXltString::FnListItemGet            ("a,b,c,d", 1, ",") .       $sRowEnd;//b
    echo "fnListItemGet():"             . $oXltString::FnListItemGet            ("a,b,c,d", 2, ",") .       $sRowEnd;//b
    //echo "fnListItemGet():"             . $oXltString::FnListItemGet            ("a,b,c,d", 5, ",") .       $sRowEnd;//Exception1
    echo "fnListFirstGet():"            . $oXltString::FnListFirstGet           ("a,b,c").                  $sRowEnd;//a
    echo "fnListFirstGet():"            . $oXltString::FnListFirstGet           ("a").                      $sRowEnd;//a
    echo "fnListFirstGet():"            . $oXltString::FnListFirstGet           (",a").                     $sRowEnd;//emptyString
    echo "fnListFirstGet():"            . $oXltString::FnListFirstGet           ("").                       $sRowEnd;//emptyString
    echo "fnListLastGet():"             . $oXltString::FnListLastGet            ("a,b,c").                  $sRowEnd;//c
    echo "fnListLastGet():"             . $oXltString::FnListLastGet            ("").                       $sRowEnd;//emptyString
    echo "fnListFindNoCase():"          . $oXltString::FnListFindNoCase         ("a,b,c", "b", ",").        $sRowEnd;//2
    echo "fnListFindNoCase():"          . $oXltString::FnListFindNoCase         ("a,b,c", "z", ",").        $sRowEnd;//false
    echo "fnListRestRight():"           . $oXltString::FnListRestRight          ("a,b,c",",").              $sRowEnd;//a,b
    echo "fnListRest():"                . $oXltString::FnListRest               ("a,b,c",",").              $sRowEnd;//b,c
    echo "fnListReverse():"             . $oXltString::FnListReverse            ("a,b,c",",").              $sRowEnd;//c,b,a
    echo "fnListTrim():"                . $oXltString::FnListTrim               (",a,b,c,",",").            $sRowEnd;//a,b,c
    echo "fnListTrim():"                . $oXltString::FnListTrim               ("a,b,c",",").              $sRowEnd;//a,b,c
    echo "fnListTrim():"                . $oXltString::FnListTrim               ("abc",",").                $sRowEnd;//abc
    echo "fnListTrim():"                . $oXltString::FnListTrim               ("abc").                    $sRowEnd;//abc
    echo "fnListTrim():"                . $oXltString::FnListTrim               ("").                       $sRowEnd;//abc
    echo "fnListRemoveDuplicates():"    . $oXltString::FnListRemoveDuplicates   ("a,b,b,c",",").            $sRowEnd;//a,b,c
    echo "fnListSort():"                . $oXltString::FnListSort               ("c,a,b", ",").             $sRowEnd;//a,b,c
    echo "fnListReplace():"             . $oXltString::FnListReplace            ("a,b,c", "c", "d", ",").   $sRowEnd;//a,b,d
    //echo "fnListDelimiterChange():"     . $oXltString::FnListDelimiterChange    ("a,b,c", ",", "").         $sRowEnd;//Exception1
    //echo "fnListDelimiterChange():"     . $oXltString::FnListDelimiterChange    ("a,b|c", ",", "|").        $sRowEnd;//Exception2
    echo "fnListDelimiterChange():"     . $oXltString::FnListDelimiterChange    ("a,b,c", ",", "|").        $sRowEnd;//a|b|d
    echo "fnListItemEmptyDel():"        . $oXltString::FnListItemEmptyDel       ("a,,,c", ",").             $sRowEnd;//a,c
    echo "fnListIns():"                 . $oXltString::FnListIns                ("a,c,d", "b", 2).          $sRowEnd;//a,b,c,d
    echo "fnListIns():"                 . $oXltString::FnListIns                ("b,c,d", "a", 1).          $sRowEnd;//a,b,c,d
    echo "fnListIns():"                 . $oXltString::FnListIns                ("a,b,c", "d", 5).          $sRowEnd;//a,b,c,d
    echo "fnListDel():"                 . $oXltString::FnListDel                ("a,b,c", 2, 2).            $sRowEnd;//a
    echo "fnListDel():"                 . $oXltString::FnListDel                ("a,b,c", 1, 1).            $sRowEnd;//b,c
    echo "fnListDel():"                 . $oXltString::FnListDel                ("a,b,c", 3, 2).            $sRowEnd;//a,b
      
?>

</body>
</html>
