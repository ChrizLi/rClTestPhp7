<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CEnum.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CEnumTest extends TestCase
{
    public  function testFnSetGet(): void {
            $oCut   = new cPhp\CEnum(array('a', 'b', 'c'));
            $this   ->assertEquals(
                null,
                $oCut->fnGet(),
                'null'
            );
            $oCut   ->fnSet('a');
            $this   ->assertEquals(
                'a',
                $oCut->fnGet(),
                'default'
            );
            $this   ->expectException(exception::class);
            $oCut->fnSet('not');
            $this   ->assertTrue(
                $oCut->fnValid('a')
            );
            $this   ->assertTrue(
                $oCut->fnValid('b')
            );
            $this   ->assertFalse(
                $oCut->fnValid('not')
            );
            
    }
}
?>
