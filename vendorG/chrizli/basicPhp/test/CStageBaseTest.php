<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CEnum.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStageBase.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CStageBaseTest extends TestCase
{
    public  function    testFnSetGet(): void {
            $aEnum  = array('dev', 'test', 'prod');
            $oCut   = new cPhp\CStageBase($aEnum);
            $oCut->fnSet('dev');
            $this->assertEquals(
                'dev',
                $oCut->fnGet(),
                'dev'
            );
            $this->assertEquals(
                $aEnum,
                $oCut->fnEnumGet(),
                'fnEnumGet'
            );
    }
    
    public  function    testFnValid(): void {
            $aEnum  = array('dev', 'test', 'prod');
            $oCut   = new cPhp\CStageBase($aEnum);
            $oCut->fnSet('dev');
            $this->assertTrue(
                $oCut->fnValid('dev'),
                'true'
            );
            $this->assertFalse(
                $oCut->fnValid('not',false),
                'false'
            );
            $this->expectException(exception::class);
            $this->assertFalse(
                $oCut->fnValid('not'),
                'Exception'
            );
    }
    
}
?>

