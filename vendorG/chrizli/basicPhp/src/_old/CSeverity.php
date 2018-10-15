<?php

class   CSeverity
extends CEnum
{   //Severity based on RFC5424
    public  function    __construct() {
        $a  = array(
            'Emergency', 
            'Alert', 
            'Critical', 
            'Error', 
            'Warning', 
            'Notice', 
            'Informational', 
            'Debug'
        );
        parent::__construct($a);
    }
}

?>
