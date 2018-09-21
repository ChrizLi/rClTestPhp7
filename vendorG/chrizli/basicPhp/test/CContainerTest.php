<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainer.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CContainerTest extends TestCase
{
    
    public  function testFnAddDefault(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object', 'Id');
            $this->assertEquals(
                'Object',
                $oCut->fnGet('Id')
            );
    }
    
    public  function testFnAddNamed(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object', 'Id');
            $this->assertEquals(
                'Object',
                $oCut->fnGet('Id')
            );
    }
    
    public  function testFnAddNamedException(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object', 'Id');
            $this->expectException(Exception::class);
            $oCut->fnAdd('Object2');
    }
    
    public  function testFnAddNumAll(): void {
            $oCut = new cPhp\CContainer(false);
            $oCut->fnAdd('Object');
            $this->assertEquals(
                array('Object'),
                $oCut->fnGet()
            );
    }
    
    public  function testFnAddNum(): void {
            $oCut   = new cPhp\CContainer(false);
            $n      = $oCut->fnAdd('Object');
            $this->assertEquals(
                0,
                $n
            );
            $this->assertEquals(
                array('Object'),
                $oCut->fnGet($n)
            );
            
    }
    
    public  function testFnGetAll(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object1', 'Id1');
            $oCut->fnAdd('Object2', 'Id2');
            $this->assertEquals(
                array('Id1'=>'Object1', 'Id2'=>'Object2'),
                $oCut->fnGet()
            );
    }
    
    public  function testFnDel(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object1', 'Id1');
            $oCut->fnDel('Id1');
            $this->assertEquals(
                array(),
                $oCut->fnGet()
            );
    }
    
    public  function testFnResetNew(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object1', 'Id1');
            $a      = array('id2'=>'Object2');
            $oCut->fnReset($a);
            $this->assertEquals(
                $a,
                $oCut->fnGet()
            );
    }
    
    public  function testFnResetClean(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object1', 'Id1');
            $oCut->fnReset();
            $this->assertEquals(
                array(),
                $oCut->fnGet()
            );
    }
    
    public  function testFnValid(): void {
            $oCut = new cPhp\CContainer(true);
            $oCut->fnAdd('Object1', 'Id1');
            $this->assertTrue(
                $oCut->fnValid('Id1')
            );
            $this->assertFalse(
                $oCut->fnValid('Not')
            );
    }
}

?>
