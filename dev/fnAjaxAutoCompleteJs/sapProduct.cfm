<!DOCTYPE html>
<html>
<head>
<!----------------------------------------------------------
---- 20180329V1.0.0,    ListlChr,   Init
----
------------------------------------------------------------
---- what this code does:
---- 
------------------------------------------------------------
---- known errors /missing features:
---- 
----------------------------------------------------------->

    <!---cfSet  oObjectAdmin    = createObject("component", "/cashback/cfc/fnObjectAdmin").fnConstructor()>
    <cfSet  o = oObjectAdmin,fnObjectGet("", "fn"--->
    <script src="sapProduct.js"></script>
</head>
<body onload="fnMain()">
    <!---cfOutput></cfOutput--->
    <!---input  id="sProductSearch" type="text" onkeyup="fnHintShow(this.value)"--->
    <input  id="sProductSearch" type="text">
    <div    id="sFileCalled"></div><hr>
    <div    id="sD1"></div>
</body>
</html>
 