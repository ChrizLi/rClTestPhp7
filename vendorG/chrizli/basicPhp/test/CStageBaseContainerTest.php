<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainer.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainerObject.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStageBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStageBaseContainer.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CStageBaseContainerTest extends TestCase
{
    public  function testFnSetGet(): void {
            $aCol   = array('sStageBaseId','sNameShort');
            $oCut   = new cPhp\CStageBase($aCol);
            $aExp   = array('sStageBaseId'=>'dev', 'sNameShort'=>'Dev');
            $oCut->fnSet($aExp);
            $this->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full'
            );
    }
    
    public  function testFnSelDefault(): void {
            $oCut   = new cPhp\CStageBaseContainer();
            $o      = $oCut->fnGet();
            //print_r($o[0]);
            $this->assertEquals(
                3,
                count($o),
                'countRow'
            );
            
            $this->assertEquals(
                array('sStageBaseId'=>'dev','sNameShort'=>'Dev'),
                $o[0]->fnGet(),
                'content'
            );
            $this->assertEquals(
                'Dev',
                $o[0]->fnGet('sNameShort'), //CStageBase
                'key'
            );
            $this->assertEquals(
                'Dev',
                $oCut->fnGet()[0]->fnGet('sNameShort'),
                'deep'
            );
    }
}
?>

