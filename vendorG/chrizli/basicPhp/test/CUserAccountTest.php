<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CUserAccount.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CUserAccountTest extends TestCase
{
    private
            $oCut;
    
    /** 
    *   @before 
    */
    public  function    fnBeforeEach() {
            $this->oCut = new cPhp\CUserAccount();
    }
    
    public  function    testFnAccountIdGet(): void {
            $this->assertEquals(
                strToUpper('EU\\listlchr'),
                strToUpper($this->oCut->fnAccountIdGet())
            );
    }
    
    public  function    testFnAccountNameGet(): void {
            $this->assertEquals(
                strToUpper('listlchr'),
                strToUpper($this->oCut->fnAccountNameGet())
            );
    }
    
    public  function    testFnAccountDomainGet(): void {
            $this->assertEquals(
                strToUpper('EU'),
                strToUpper($this->oCut->fnAccountDomainGet())
            );
    }
    
    public  function    testFnNameGet(): void {
            $this->assertEquals(
                strToUpper('Christian Listl'),
                strToUpper($this->oCut->fnNameGet())
            );
    }
    
    public  function    testFnNameSortGet(): void {
            $this->assertEquals(
                strToUpper('Listl, Christian'),
                strToUpper($this->oCut->fnNameSortGet())
            );
    }
    
    public  function    testFnNameFirstGet(): void {
            $this->assertEquals(
                strToUpper('Christian'),
                strToUpper($this->oCut->fnNameFirstGet())
            );
    }
    
    public  function    testFnNameLastGet(): void {
            $this->assertEquals(
                strToUpper('Listl'),
                strToUpper($this->oCut->fnNameLastGet())
            );
    }
    
    public  function    testFnEmailGet(): void {
            $this->assertEquals(
                strToUpper('ListlC@brother.de'),
                strToUpper($this->oCut->fnEmailGet())
            );
    }
}
