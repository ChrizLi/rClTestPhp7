<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteTypeModel.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CPhpSiteTypeModelTest extends TestCase
{
    public  function testFnSelDefault(): void {
            $oCut   = new cPhp\CPhpSiteTypeModel();
            $this->assertEquals(
                2,
                count($oCut->fnSel())
            );
    }
    
    public  function testFnSelCol(): void {
            $oCut   = new cPhp\CPhpSiteTypeModel();
            $aExpCol= array('sPhpSiteTypeId','sNameShort');
            $aAct   = $oCut->fnSel();
            $aActCol= array_keys($aAct[0]);
            $this->assertEquals(
                $aExpCol,
                $aActCol
            );
    }
}