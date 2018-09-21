<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStageBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStage.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CStageTest extends TestCase
{
    public  function testFnSetGet(): void {
            $oStageBase = new cPhp\CStageBase();
            $oStageBase ->fnSet(array('sStageBaseId'=>'dev', 'sNameShort'=>'Dev'));
            $aCol       = array('sStageId', 'sNameShort', 'oStageBase');
            $oCut       = new cPhp\CStage($aCol);
            $aExp       = array('sStageId'=>'dev', 'sNameShort'=>'Dev', 'oStageBase'=>$oStageBase);
            $oCut       ->fnSet($aExp);
            $this       ->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full'
            );
    }
}
?>

