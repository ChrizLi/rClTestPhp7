<!---
-- what the code does:
-- adds attributes to html elements
-- adds values to attributes
--->

<cffunction name="fnModifyHtmlElementModel">
    <!--- mod attributes of given element (which is not displayed already but exists as a string only)
    -- if attribute does not exist, create it
    -- if attribute exists but sValue is "" then drop attribute
    -- if attribute exists and sValue is not "" then add attribute
    -- missing code: if after drop value of attrib the attrib is blank then drop attribute
    --->
    <cfArgument name="sElement"   type="string" required="true"  default="">
    <cfArgument name="sAttribute" type="string" required="false" default="id=''">
    <cfArgument name="sValue"     type="string" required="true"  default="">
    
    <!--- search attribute --->
    <cfset nAttributePos = FindNoCase(sAttribute, sElement)>
    <cfif nAttributePos = 0>
        <!--- insert attribute at end of Element --->
        <cfset sOut = left(sElement, len(sElement)-1) & " " & sAttribute & "='" & sValue & "'>"
    <cfelse>
        <!--- add value to existing attribute --->
        <!--- search attribute pos, search for "" or ''
              insert value, add single space --->
              
        <!--- check which type of quote is used --->
        <cfset nAttributeQuote1PosDouble = FindNoCase("'", sElement, nAttributePos+len(nAttributePos))
        <cfset nAttributeQuote1PosSingle = FindNoCase('"', sElement, nAttributePos+len(nAttributePos))
        <!--- find the qoute which if found earliest after attribute --->
        <cfif  nAttributeQuote1PosDouble lt nAttributeQuote1PosSingle>
            <!--- DoubleQuote is first--->
            <cfset nAttributeQuote1Pos = nAttributeQuote1PosDouble>
            <cfset sQuoteType = '"'>
        <cfelse>
            <!--- SingleQuote is first --->
            <cfset nAttributeQuote1Pos = nAttributeQuote1PosSingle>
            <cfset sQuoteType = "'">
        </cfif>
        <!--- now search for 2nd Quote --->
            <cfset nAttributeQuote2Pos = FindNoCase(sQuoteType, sElement, nAttributeQuote1Pos+1)
        <!--- now we have both position to add value or delete attribute>
        <if sValue eq "">
            <!--- delete attribute and its values from given Element --->
            <cfset sOut = left(sElememt, nAttributePos) & right(sElement, len(sElement)-nAttributeQuote2Pos)
        <cfelse>
            <!--- search attrib pos and following " or ' and then next occurrence of this char
              now drop from pos a of attrib to 2nd " or ' --->
            <cfset sAttributeValue = mid(sElement, nAttributeQuote1Pos, nAttributeQuote2Pos-nAttributeQuote1Pos)
            <cfset sAttributeValueStripped = replace(sElement, sValue, "")
            <cfset sOut = left(sElement, nAttributePos) & sAttributeValueStripped & right(sElement, nAttributeQuote2Pos - nAttributeQuote1Pos)
        </cfif>
    </cfif>
    <cfReturn sOut>
    
</cffunction>


<cffunction name="fnModifyHtmlElementModel">
    <cfargument name="">
</cffunction>

<cffunction name="fnSetHmtl5BaseAttributes" access="intern">
    <cfargument name="sClass"  type="string" required="false" default"">
    <cfargument name="sHidden" type="string" required="false" default"">
    <cfargument name="sId"     type="string" required="false" default"">
    <cfargument name="sStyle"  type="string" required="false" default"">
    <cfargument name="sTitle"  type="string" required="false" default"">

    <cfset sOut = "">
    <cfif sId neq = "">
        <cfset sOut = sOut & " id='" & sId & "'">
    </cfif>
    <cfif sClass neq = "">
        <cfset sOut = sOut & " class='" & sClass & "'">
    </cfif>
    <cfif sHidden neq "">
        <cfset sOut = sOut & " disabled">
    </cfif>
    <cfif sStyle neq "">
        <cfset sOut = sOut & " style='" & sStyle & "'">
    </cfif>
    <cfif sTitle neq "">
        <cfset sOut = sOut & " title='" & sTitle & "'">
    </cfif>
    
    <cfreturn sOut>
</cffunction>