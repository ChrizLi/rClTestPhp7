<?php

$oProc = new CMsProc();
$oProc->fnProcNameSet('dbo.spDoIt');
$oProc->fnParamAdd('sOption', 'varchar', 'CandidateList');
$oProc->fnExec();
$oRs    = $oProc->fnSel();
$ar     = $oMsSql->fnResultToArrayOfStruct($oRs);

?>
