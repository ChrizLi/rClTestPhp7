<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CRecordSetTest extends TestCase
{
    public  function testFnSetGet(): void {
            $aCol   = array('sPhpServerId','sName','nPort');
            $oCut   = new cPhp\CRecordSet($aCol);
            $aExp   = array('sPhpServerId'=>'php1', 'sName'=>'Name1', 'nPort'=>'8721');
            $oCut->fnSet($aExp);
            $this->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full'
            );
            $this->assertEquals(
                'php1',
                $oCut->fnGet('sPhpServerId'),
                'phpServer'
            );
            $this->assertEquals(
                'Name1',
                $oCut->fnGet('sName'),
                'name'
            );
            $this->assertEquals(
                '8721',
                $oCut->fnGet('nPort'),
                'port'
            );
            $aExp   = array('sPhpServerId'=>'php2', 'sName'=>'Name2', 'nPort'=>'8722');
            $oCut->fnSet($aExp);
            $this->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full2'
            );
    }
    
    public  function    testFnSetTooMany(): void {
            $aCol   = array('sPhpServerId','sName');
            $oCut   = new cPhp\CRecordSet($aCol);
            $aExp   = array('sPhpServerId'=>'php1', 'sName'=>'Name1', 'nPort'=>'8721');
            $oCut->fnSet($aExp);
            $this->assertEquals(
                array('sPhpServerId'=>'php1', 'sName'=>'Name1'),
                $oCut->fnGet(),
                'full'
            );
    }
    
}

?>
