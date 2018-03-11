<html>
<head>
    <title>cXltStringTest.php</title>
</head>
<body>
<?php
    //declare(strict_types=1);
    require_once($_SERVER['DOCUMENT_ROOT']."\php\class\cXltString.php");
    $sRowEnd = "|<br>";
    
    echo "FnRight():"                   . CXltString::FnRight                  ("abcdefg", 2) .            $sRowEnd;//fg
    echo "FnRight():"                   . CXltString::FnRight                  ("abcdefg",-2) .            $sRowEnd;//cdefg
    echo "FnLeft():"                    . CXltString::FnLeft                   ("abcdefg", 2) .            $sRowEnd;//ab
    echo "FnLeft():"                    . CXltString::FnLeft                   ("abcdefg",-2) .            $sRowEnd;//abcde
    echo "FnOccurrenceCountGet:"        . CXltString::FnOccurrenceCountGet     ("a,b,cd", ",")    .        $sRowEnd;//2
    echo "FnOccurrenceCountGet:"        . CXltString::FnOccurrencePositionGet  ("a,b,cd", ",", 1) .        $sRowEnd;//2
    echo "FnOccurrencePositionGet:"     . CXltString::FnOccurrencePositionGet  ("a,b,cd", ",", 2) .        $sRowEnd;//4
    echo "FnOccurrencePositionGet:"     . CXltString::FnOccurrencePositionGet  ("a,b,cd", ",", 3, false) . $sRowEnd;//0
    echo "fnListAppend():"              . CXltString::FnListAppend             ("a,b,c","d",",").          $sRowEnd;//a,b,c,d
    echo "fnListAppend():"              . CXltString::FnListAppend             ("a,b,c,","d",",").         $sRowEnd;//a,b,c,d
    echo "fnListAppend():"              . CXltString::FnListAppend             ("", "d", ",").             $sRowEnd;//d
    echo "fnListPrepend():"             . CXltString::FnListPrepend            ("b,c,d","a",",").          $sRowEnd;//a,b,c,d
    echo "fnListLen():"                 . CXltString::FnListLen                ("a,b,c,d",",").            $sRowEnd;//4
    echo "fnListLen():"                 . CXltString::FnListLen                ("",",").                   $sRowEnd;//0
    echo "fnListLen():"                 . CXltString::FnListLen                ("a",",").                  $sRowEnd;//1
    //echo "fnListItemGet():"             . CXltString::FnListItemGet            ("a,b,c,d", 0, ",") .       $sRowEnd;//Exception1
    echo "fnListItemGet():"             . CXltString::FnListItemGet            ("a,b,c,d", 1, ",") .       $sRowEnd;//b
    echo "fnListItemGet():"             . CXltString::FnListItemGet            ("a,b,c,d", 2, ",") .       $sRowEnd;//b
    //echo "fnListItemGet():"             . CXltString::FnListItemGet            ("a,b,c,d", 5, ",") .       $sRowEnd;//Exception1
    echo "fnListFirstGet():"            . CXltString::FnListFirstGet           ("a,b,c").                  $sRowEnd;//a
    echo "fnListFirstGet():"            . CXltString::FnListFirstGet           ("a").                      $sRowEnd;//a
    echo "fnListFirstGet():"            . CXltString::FnListFirstGet           (",a").                     $sRowEnd;//emptyString
    echo "fnListFirstGet():"            . CXltString::FnListFirstGet           ("").                       $sRowEnd;//emptyString
    echo "fnListLastGet():"             . CXltString::FnListLastGet            ("a,b,c").                  $sRowEnd;//c
    echo "fnListLastGet():"             . CXltString::FnListLastGet            ("").                       $sRowEnd;//emptyString
    echo "fnListFindNoCase():"          . CXltString::FnListFindNoCase         ("a,b,c", "b", ",").        $sRowEnd;//2
    echo "fnListFindNoCase():"          . CXltString::FnListFindNoCase         ("a,b,c", "z", ",").        $sRowEnd;//false
    echo "fnListRestRight():"           . CXltString::FnListRestRight          ("a,b,c",",").              $sRowEnd;//a,b
    echo "fnListRest():"                . CXltString::FnListRest               ("a,b,c",",").              $sRowEnd;//b,c
    echo "fnListReverse():"             . CXltString::FnListReverse            ("a,b,c",",").              $sRowEnd;//c,b,a
    echo "fnListTrim():"                . CXltString::FnListTrim               (",a,b,c,",",").            $sRowEnd;//a,b,c
    echo "fnListTrim():"                . CXltString::FnListTrim               ("a,b,c",",").              $sRowEnd;//a,b,c
    echo "fnListTrim():"                . CXltString::FnListTrim               ("abc",",").                $sRowEnd;//abc
    echo "fnListTrim():"                . CXltString::FnListTrim               ("abc").                    $sRowEnd;//abc
    echo "fnListTrim():"                . CXltString::FnListTrim               ("").                       $sRowEnd;//abc
    echo "fnListRemoveDuplicates():"    . CXltString::FnListRemoveDuplicates   ("a,b,b,c",",").            $sRowEnd;//a,b,c
    echo "fnListSort():"                . CXltString::FnListSort               ("c,a,b", ",").             $sRowEnd;//a,b,c
    echo "fnListReplace():"             . CXltString::FnListReplace            ("a,b,c", "c", "d", ",").   $sRowEnd;//a,b,d
    //echo "fnListDelimiterChange():"     . CXltString::FnListDelimiterChange    ("a,b,c", ",", "").         $sRowEnd;//Exception1
    //echo "fnListDelimiterChange():"     . CXltString::FnListDelimiterChange    ("a,b|c", ",", "|").        $sRowEnd;//Exception2
    echo "fnListDelimiterChange():"     . CXltString::FnListDelimiterChange    ("a,b,c", ",", "|").        $sRowEnd;//a|b|d
    echo "fnListItemEmptyDel():"        . CXltString::FnListItemEmptyDel       ("a,,,c", ",").             $sRowEnd;//a,c
    echo "fnListIns():"                 . CXltString::FnListIns                ("a,c,d", "b", 2).          $sRowEnd;//a,b,c,d
    echo "fnListIns():"                 . CXltString::FnListIns                ("b,c,d", "a", 1).          $sRowEnd;//a,b,c,d
    echo "fnListIns():"                 . CXltString::FnListIns                ("a,b,c", "d", 5).          $sRowEnd;//a,b,c,d
    echo "fnListDel():"                 . CXltString::FnListDel                ("a,b,c", 2, 2).            $sRowEnd;//a
    echo "fnListDel():"                 . CXltString::FnListDel                ("a,b,c", 1, 1).            $sRowEnd;//b,c
    echo "fnListDel():"                 . CXltString::FnListDel                ("a,b,c", 3, 2).            $sRowEnd;//a,b
?>

</body>
</html>
