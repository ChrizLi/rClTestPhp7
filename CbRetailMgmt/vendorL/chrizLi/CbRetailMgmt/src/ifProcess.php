<?php

namespace   brotherDe\cashback;

interface   ifProcess{
    public  function fnRunable($_oRxArg): bool;
    public  function fnRun($_oRxArg): void;
}

?>
