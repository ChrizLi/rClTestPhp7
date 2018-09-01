// ajax Standardisierung

function fnSqlAjax(sSqlCmd, nRs2Use)
{   // add all given SqlParameter
    // by adding quotes and a comma as delimiter
    var sSqlParam = ""
    for (var i = 3; i <= arguments.length; i++)
    {
        sSqlParam += "'"+ argument[i] + "',"
    }
    // drop last comma
    sSqlParam = substr(sSqlParam, 0, sSqlParam.Length - 1);
    sSqlCmd = sSqlCmd + " " + sSqlParam;
    jsnRs = fnExecSqlAjax(sSqlCmd, nRs2Use)
}

function fnExecSqlAjax(sSqlCmd, nRs2Use)
{
    jsnRs = DoFancyAjax(sSqlCmd,nRs2Use)

    return jsnRs
}

