<?php

namespace chrizli\basicPhp;

class C1 {
        
    public function __construct() {}
    
    public function fnGet($s="x") {
        return $s.$s;
    }

    public function fnPrint($_s='x') {
        print $_s;
    }
    
}

?>
