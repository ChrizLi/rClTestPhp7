<html>
<head>
</head>
<body>
<?php
    function fnMain() {
        include $_SERVER['DOCUMENT_ROOT'].'/vendorG/chrizli/basicPhp/src/autoLoad03Sub.php';
        fnAutoLoadSetup();
        
        //$oUser = new chrizli\basicPhp\CUser();
        //$oUser->fnSet(array('sId'=>'listlchr', 'sAdminPath'=>'\\BigW10N61014\tempCB$'));
        // samples
        //$oC1 = new chrizli\basicPhp\C1();
        //$oC1->fnPrint('xy');
    }
    fnMain();

    //require_once("/php/class/cXltString.php");
    //oXltString = new CXltString();
?>
</body>
<?php
    print \chrizli\basicPhp\CXltString::FnRight("abcdefg", 2).PHP_EOL;//fg
    print \chrizli\basicPhp\CXltString::FnRight("abcdefg",-2).PHP_EOL;//cdefg
    print \chrizli\basicPhp\CXltString::FnLeft ("abcdefg", 2).PHP_EOL;//ab
    print \chrizli\basicPhp\CXltString::FnLeft ("abcdefg",-2).PHP_EOL;//abcde
    
    //\chrizli\basicPhp\CXltString::FnOccurrenceCountGet("a,b,cd",",");//2
    //\chrizli\basicPhp\CXltString::FnOccurrencePositionGet("a,b,cd",",",2);//4
    
    //\chrizli\basicPhp\CXltString::FnListAppend    ("a,b,c","d",",");//a,b,c,d
    //\chrizli\basicPhp\CXltString::FnListPrepend   ("b,c,d","a",",");//a,b,c,d
    //\chrizli\basicPhp\CXltString::FnListLen       ("a,b,c,d",",");//4
    
    //\chrizli\basicPhp\CXltString::FnListGetAt     ("a,b,c,d",2,",");//b
    //\chrizli\basicPhp\CXltString::FnListDeleteAt  ("a,b,c",2,",");//a,c
    //\chrizli\basicPhp\CXltString::FnListFindNoCase("a,b,c","b",",");//2
    //\chrizli\basicPhp\CXltString::FnListRest      ("a,b,c",",");//b,c
    //\chrizli\basicPhp\CXltString::FnListRestRight ("a,b,c",",");//a,b
    //\chrizli\basicPhp\CXltString::FnListReverse   ("a,b,c",",");//c,b,a
    //\chrizli\basicPhp\CXltString::FnListTrim      (",a,b,c,",",");//a,b,c
    //\chrizli\basicPhp\CXltString::FnListToArray   ("a,b,c",",");//[2]
    //\chrizli\basicPhp\CXltString::FnListRemoveDuplicates("a,b,b,c",",");//a,b,c
    //$sAr=[1=>"a",2=>"b",3=>"c"];
    //\chrizli\basicPhp\CXltString::FnArrayToList($sAr,",");//a,b,c
?>
</html>
