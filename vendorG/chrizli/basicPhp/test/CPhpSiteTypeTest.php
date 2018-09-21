<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteType.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CPhpSiteTypeTest extends TestCase
{
    public  function testFnSetGet(): void {
            $aCol   = array('sPhpSiteTypeId', 'sNameShort');
            $oCut   = new cPhp\CPhpSiteType($aCol);
            $aExp   = array('sPhpSiteTypeId'=>'php1', 'sNameShort'=>'Name1');
            $oCut->fnSet($aExp);
            $this->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full'
            );
    }
    
}
?>
