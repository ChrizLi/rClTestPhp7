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
    
    public  function    testFnSetGet(): void {
        $aKey   = array('s1', 's2');
        $oCut   = new cPhp\CRecordSet($aKey);
        $aValue = array('s1'=>'v1', 's2'=>'v2');
        $oCut->fnSet($aValue);
        $this->assertEquals(
            'v1',
            $oCut->fnGet('s1'),
            'default'
        );
        $this->assertEquals(
            $aValue,
            $oCut->fnGet(),
            'full'
        );
        $this->expectException(exception::class);
        $this->assertEquals(
            'not',
            $oCut->fnGet('not'),
            'not'
        );
    }
    
    public  function    testFnSetExists(): void {
        $aKey   = array('s1', 's2');
        $oCut   = new cPhp\CRecordSet($aKey);
        $aValue = array('s1'=>'v1', 's2'=>'v2');
        $oCut->fnSet($aValue);
        $this->assertEquals(
            true,
            $oCut->fnKeyExists('s1'),
            'keyTrue'
        );
        $this->assertEquals(
            false,
            $oCut->fnKeyExists('not'),
            'keyFalse'
        );
        $this->assertEquals(
            true,
            $oCut->fnValueExists(array('s1'=>'v1')),
            'valueTrue'
        );
        $this->assertEquals(
            false,
            $oCut->fnValueExists(array('s1'=>'v3')),
            'valueFalse'
        );
        $this->expectException(exception::class);
        $this->assertEquals(
            false,
            $oCut->fnValueExists(array('not'=>'v1')),
            'keyFalse2'
        );
    }
}
?>


    
    