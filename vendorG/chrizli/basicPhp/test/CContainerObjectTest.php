<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainer.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CContainerObject.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CContainerObjectTest extends TestCase
{

    public  function    testFnValueValidNum(): void {
            $oCut   = new cPhp\CContainerObject(false);
            $a1     = array('sId'=>'d1','sName'=>'n1');
            $a2     = array('sId'=>'d2','sName'=>'n2');
            $oCut->fnAdd($a1);
            $oCut->fnAdd($a2);
            $this->assertEquals(
                true,
                $oCut->fnValueValid('d2', 'sId')
            );
    }
    
    public  function    testFnValueValidAssoc(): void {
            $oCut   = new cPhp\CContainerObject(true);
            $a1     = array('sId'=>'d1','sName'=>'n1');
            $a2     = array('sId'=>'d2','sName'=>'n2');
            $oCut->fnAdd($a1,'n11');
            $oCut->fnAdd($a2,'n12');
            $this->assertEquals(
                true,
                $oCut->fnValueValid('d2', 'sId')
            );
    }
    
    public  function    testFnObjectGetAssocSingle(): void {
            $oCut   = new cPhp\CContainerObject(true);
            $a1     = array('sId'=>'d1','sName'=>'n1');
            $a2     = array('sId'=>'d2','sName'=>'n2');
            $a3     = array('sId'=>'d3','sName'=>'n3');
            $oCut->fnAdd($a1,'n11');
            $oCut->fnAdd($a2,'n12');
            $oCut->fnAdd($a3,'n13');
            $this->assertEquals(
                $a2,
                $oCut->fnObjectGet('n2', 'sName')
            );
    }

    public  function    testFnObjectGetAssocMulti(): void {
            $oCut   = new cPhp\CContainerObject(true);
            $a1     = array('sId'=>'d1','sName'=>'n1');
            $a2     = array('sId'=>'d2','sName'=>'n2');
            $a3     = array('sId'=>'d3','sName'=>'n2');
            $oCut->fnAdd($a1,'n11');
            $oCut->fnAdd($a2,'n12');
            $oCut->fnAdd($a3,'n13');
            $this->assertEquals(
                array($a2, $a3),
                $oCut->fnObjectGet('n2', 'sName')
            );
    }
    
}

?>

