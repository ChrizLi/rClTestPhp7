<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CUserAccount.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CUser.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CUserTest extends TestCase
{
    private
            $oCut,
            $oUserAccount;
    
    /** 
    *   @before 
    */
    public  function    fnBeforeEach() {
            $this->oUserAccount = new cPhp\CUserAccount();
            $this->oCut = new cPhp\CUser($this->oUserAccount);
    }
    
    public  function    testFnGetId(): void {
            $this->assertEquals(
                strToUpper('eu\listlchr'),
                strToUpper($this->oCut->fnGet('sId'))
            );
    }
    
    public  function    testFnGetAdminPath(): void {
            $this->assertEquals(
                strToUpper('\\BigW10N61014\\tempCB$'),
                strToUpper($this->oCut->fnGet('sAdminPath'))
            );
    }
    
    public  function    testFnGetAdmin(): void {
            $this->assertTrue(
                $this->oCut->fnGet('bAdmin')
            );
    }
}
?>
