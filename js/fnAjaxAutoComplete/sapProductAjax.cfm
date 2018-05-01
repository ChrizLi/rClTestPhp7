    <cfOutput>#fnMain(url)#</cfOutput>
    
    <cfFunction     name="fnMain"                   output="false" access="public" returnType="string">
        <cfArgument name="stUrl"                    type="struct"  required="true" default="#url#">
        <cfParam    name="arguments.stUrl.sSearch"  default="000">
        <cfSet  var sOut="">
        <cfSet  var qu  =fnProductAutoComplete(arguments.stUrl.sSearch)>
        <cfSaveContent  variable="sOut">
            <cfOutput   query="qu">
                #sProductId# #sProductDesc#;<br>
            </cfOutput>
        </cfSaveContent>
        <cfReturn  sOut>
    </cfFunction>
    
    <cfFunction     name="fnProductAutoComplete"    output="false" access="public"  returnType="query">
        <cfArgument name="sSearch"                  type="string"  required="false" default="">
        <cfSet  var qu  ="">
        <cfIf       arguments.sSearch eq "">
            <cfSet  arguments.sSearch = "0000">
        </cfIf>
        <cfSet  var sDsn=application.dsn_www>
        <cfStoredProc       procedure="dbo._spSapProductAjax"       dataSource="#sDsn#">
            <cfProcParam    type= "in"  cfSqlType="cf_Sql_varchar"  value="#arguments.sSearch#">
            <cfProcResult   name="qu"   resultSet="1">
        </cfStoredProc>
        <cfReturn   qu>
    </cfFunction>