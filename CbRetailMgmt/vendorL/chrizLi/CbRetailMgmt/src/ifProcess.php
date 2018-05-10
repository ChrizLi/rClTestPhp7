<?php

interface ifProcess{
    public function fnRunable($_oRxArg): bool;
    public function fnRun($_oRxArg): void;
}

?>
