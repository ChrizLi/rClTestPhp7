<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRecordSet.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteType.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStageBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CStage.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSiteType.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CPhpSite.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CPhpSiteTest extends TestCase
{
    public  function testFnSetGet(): void {
            $oStageBase = new   cPhp\CStageBase();
            $oStageBase ->fnSet(array('sStageBaseId'=>'dev', 'sNameShort'=>'Dev'));
            
            $oStage     = new   cPhp\CStage();
            $oStage     ->fnSet(array('sStageId'=>'dev', 'sNameShort'=>'Dev', 'oStageBase'=>$oStageBase));
            
            $oSiteType  = new   cPhp\CPhpSiteType();
            $oSiteType  ->fnSet(array('sPhpSiteTypeId'=>'siteType2', 'sNameShort'=>'name2'));
            
            $oCut       = new cPhp\CPhpSite();
            $aExp       = array('sPhpSiteId'=>'siteId2', 'sServerName'=>'server2', 'nPort'=>'port2', 'oStage'=>$oStage, 'oPhpSiteType'=>$oSiteType);
            $oCut       ->fnSet($aExp);
            
            $this->assertEquals(
                $aExp,
                $oCut->fnGet(),
                'full'
            );
    }
    
}
?>
