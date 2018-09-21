<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainer.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainerObject.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteType.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteTypeModel.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteTypeContainer.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CPhpSiteTypeContainerTest extends TestCase
{
    public  function testFnSelDefault(): void {
            $oCut   = new cPhp\CPhpSiteTypeContainer();
            $o      = $oCut->fnGet();
            //print_r($o[0]);
            $this->assertEquals(
                2,
                count($o),
                'countRow'
            );
            $this->assertEquals(
                array('sPhpSiteTypeId'=>'BigINet','sNameShort'=>'BigINet'),
                $o[0]->fnGet(),
                'content'
            );
            $this->assertEquals(
                'BigINet',
                $o[0]->fnGet('sNameShort'), //CPhpSiteType
                'key'
            );
            $this->assertEquals(
                'BigINet',
                $oCut->fnGet()[0]->fnGet('sNameShort'),
                'deep'
            );
    }
    
}
?>
