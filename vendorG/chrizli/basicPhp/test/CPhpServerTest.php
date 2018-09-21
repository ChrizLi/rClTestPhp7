<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainer.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainerObject.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpServer.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CPhpServerTest extends TestCase
{
    /*public  function testFnValid(): void {
            $oCut   = new cPhp\CPhpServer();
            $aExp   = array('sPhpServerId'=>'php1','sName'=>'Name1','nPort'=>'8721');
            $this->assertEquals(
                true,
                $oCut->fnValid($aExp)
            );
    }*/
    
    public  function testFnSetFnGet(): void {
            $oCut   = new cPhp\CPhpServer();
            $aExp   = array('sName'=>'Name1', 'nPort'=>'8721', 'sPhpServerId'=>'server2');
            $oCut->fnSet($aExp);
            $this->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full'
            );
            $this->assertEquals(
                'server2',
                $oCut->fnGet('sPhpServerId'),
                'sPhpServerId'
            );
            $this->assertEquals(
                'Name1',
                $oCut->fnGet('sName'),
                'sName'
            );
            $this->assertEquals(
                '8721',
                $oCut->fnGet('nPort'),
                'nPort'
            );
            
    }
    
    public  function    testFnConstructSet(): void {
            $aExp   = array('sPhpServerId'=>'php1','sName'=>'Name1','nPort'=>'8721');
            $oCut   = new cPhp\CPhpServer($aExp);
            $this->assertEquals(
                $aExp,
                $oCut->fnGet()
            );
    }
}

?>
