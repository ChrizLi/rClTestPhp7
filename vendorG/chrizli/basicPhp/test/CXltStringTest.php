<html>
<head>
</head>
<body>
<?
    require_once("/php/class/cXltString.php");
    oXltString = new CXltString();
?>
</body>
<?
    oXltString=>FnRight("abcdefg", 2);//fg
    oXltString=>FnRight("abcdefg",-2);//cdefg
    oXltString=>FnLeft ("abcdefg", 2);//ab
    oXltString=>FnLeft ("abcdefg",-2);//abcde
    
    oXltString=>FnOccurrenceCountGet("a,b,cd",",");//2
    oXltString=>FnOccurrencePositionGet("a,b,cd",",",2);//4
    
    oXltString=>FnListAppend    ("a,b,c","d",",");//a,b,c,d
    oXltString=>FnListPrepend   ("b,c,d","a",",");//a,b,c,d
    oXltString=>FnListLen       ("a,b,c,d",",");//4
    oXltString=>FnListGetAt     ("a,b,c,d",2,",");//b
    oXltString=>FnListDeleteAt  ("a,b,c",2,",");//a,c
    oXltString=>FnListFindNoCase("a,b,c","b",",");//2
    oXltString=>FnListRest      ("a,b,c",",");//b,c
    oXltString=>FnListRestRight ("a,b,c",",");//a,b
    oXltString=>FnListReverse   ("a,b,c",",");//c,b,a
    oXltString=>FnListTrim      (",a,b,c,",",");//a,b,c
    oXltString=>FnListToArray   ("a,b,c",",");//[2]
    oXltString=>FnListRemoveDuplicates("a,b,b,c",",");//a,b,c
    $sAr=[1=>"a",2=>"b",3=>"c"];
    oXltString=>FnArrayToList($sAr,",");//a,b,c
?>
</html>
