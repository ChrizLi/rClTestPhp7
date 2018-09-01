fnLoadAppConfigData
	- fnLoadPersistentRawAppConfigData
	- fnIsPersistentRawAppConfigDataCompatible()
	- fnTransformPersistentAppConfigDataToAppFormat()
	- fnCreateDefaultAppConfigData


function fnSelectAppConfigData(){
    // load AppConfigData
    // if not possible create default values
    try {
    fnLoadPersistentRawAppConfigData();
    }   catch (exception){
        // error while loading RawAppConfigData
        throw "Error:Loading  AppConfigData was not successful"
        }
    // we will not get here if an error occurred before
    try {
        fnIsPersistentRawAppConfigDataCompatible();
    }   catch (exception){
        // data format is not compatible
        throw "Error: AppConfigData not compatible";
        }
    try {
        fnTransformPersistentAppConfigDataToAppFormat();
    }   catch(exception){
        // data transformation failed
        throw "Error: DataTransformation of RawAppConfigData failed";   
    }
}

function fnTransformPersistentAppConfigDataToAppFormat(){
    // split given string into
    // arPanel
    // arItem
    
}

function fnSelectPanelArray(oAppConfig){
    var arOut = [];
    for (oInner in oAppConfig){
        
    }
}

function fnCreateDefaultAppConfigData(){
    var oAppConfig = {
        Panel = {
            PanelId = "1",
            PanelOrderVertical="1",
            PanelOrderHorizontal="1",
            PanelLabel = "DefaultPanelTitle"
        },
        Item = {
            ItemId="1",
            ItemOrderVertical="1",
            ItemOrderHorizontal="1",
            ItemLable="ItemDefaultLable",
            ItemLink="http://www.google.de"
        },
        Item = {
            ItemId="2",
            ItemOrderVertical="2",
            ItemOrderHorizontal="1",
            ItemLable="ItemDefaulLable2"
            ItemLink="http://localhost:80"
        }
    }
} 

function fnGetLineType(sLine){
    // output will be:
    // Comment if("//","/","#",";")
    // Header  if("[")
    // everything else will be "Data"
    var s2=sLine.slice(0,2);
    if  (s2=="//"){return "Comment"};
    var s1=sLine.slice(0,1);
    if  (s1=="/" or s1=="#" or s1=";"){return "Comment"};
    if  (s1=="["){return "Header"};
    return "Data";
}


// data structure
table: array of tabs
tab columns:id,lable, hpos
table: array of panels
panel column:id, lable, hpos, vpos
table: array of items
item column:id, lable, hpos, vpos

// data sample
oAppData = 
{
    arTab   = [{id="1",lable="tabLable1",  hpos="1"},
               {id="2",lable="tabLable2",  hpos="2"}],
    arPanel = [{id="1",lable="panelLable1",hpos="1",vpos="1"},
               {id="2",lable="panelLable2",hpos="2",vpos="1"}],
    arItem  = [{id="1",lable="itemLable1", hpos="1",vpos="1"},
               {id="2",lable="itemLable2", hpos="1",vpos="2"}]
}

function fnCreateTabList(aarTab){
    // create the html output string for the tab menu
    var sOut="";
    for(var nLoop=0;nLoop<aarTab.length;nLoop++){
        sOut+="<li><a id='"+aarTab[nLoop].id+"' href='#'>"+aarTab[nLoop].lable+"</a></li>";
        var sOut = arTab[nLoop].lable
    }
    sOut = '<nav class="navbar navbar-default"><div class="container-fluid"><div><ul class="nav navbar-nav">'+ sOut;
    sOut += '</ul></div></div></nav>';
}

function fnCreatePanelHeader(aarPanel){
    var sOut ="";
    for(var nLoop=0;nLoop<aarPanel.length;nLoop++){
        nHpos = aarPanel[nLoop].hpos;
        nVpos = aarPanel[nLoop].vpos;
        
    }
}

function fnGetTabArray(ooAppData){
    // check if arTab exists, if so create an array
    if (ooAppData hasOwnProperty("arTab")){
    // now take the property and make an array
        arOut = ooAppData.arTab;
    }
    else
    {   // no arTab was given
        throw "Error: no arTab in AppConfigData was given";
    }
}

function fnFillPanelGrid(){
    for(nLoop){
        aarPanel[nLoop].hpos
        aarPanel[nLoop].vpos
    }
}

function fnCreateBaseGrid(){
    var sOut[0][0]=""
    var sOut[1][0]=""
    var sOut[2][0]=""
}
