<?php

namespace   chrizli\basicPhp;

class       CUserAccount 
extends     CBase 
{
    private
            $aUser          = array(),
            $sDelimiter     = '\\';
        
    public  function    __construct() {
            $this->fnInit();
    }
    
    private function    fnInit(): void {
            $a= array('sDomain'=>getenv('USERDOMAIN'), 'sUserName'=>getenv('USERNAME'), 'sNameLast'=>'Listl', 'sNameFirst'=>'Christian', 'sEmail'=>'ListlC@brother.de');
            $this->aUser=$a;
    }
    
    public  function    fnAccountIdGet():           string {    // EU\listlchr
            return      $this->aUser['sDomain'].$this->sDelimiter.$this->aUser['sUserName'];
    }
    
    public  function    fnAccountNameGet():         string {    // listlchr
            return      $this->aUser['sUserName'];
    }
    
    public  function    fnAccountDomainGet():       string {    // EU
            return      $this->aUser['sDomain'];
    }
    
    public  function    fnNameGet():                string {    // Christian Listl
            return      $this->aUser['sNameFirst'].' '.$this->aUser['sNameLast'];
    }
    
    public  function    fnNameSortGet():            string {    // Listl, Christian
            return      $this->aUser['sNameLast'].', '.$this->aUser['sNameFirst'];
    }
    
    public  function    fnNameFirstGet():           string {    // Christian
            return      $this->aUser['sNameFirst'];
    }
    
    public  function    fnNameLastGet():            string {    // Listl
            return      $this->aUser['sNameLast'];
    }
    
    public  function    fnEmailGet():               string {    // listlc@brother.de
            return      $this->aUser['sEmail'];
    }
    
}
?>
