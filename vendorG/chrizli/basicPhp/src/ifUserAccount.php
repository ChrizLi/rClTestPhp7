<?php

namespace   chrizli\basicPhp;

interface ifUserAccount {
    public function fnUserAccountList   ():             array;
    
    public function fnUserAccountExists (string $_sId): bool;
    
    public function fnUserAccountGet    (string $_sId): CUserAccount;
    
    public function fnUserNameGet       (string $_sId): string;
}

?>
