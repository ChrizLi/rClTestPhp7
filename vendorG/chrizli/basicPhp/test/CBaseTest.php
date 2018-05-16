<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
//require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CXltString.php');
//require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CXltFile.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

class   CTest
extends cPhp\CBase {}

final class CBaseTest extends TestCase
{
    public  function    testFnErrorThrow(): void {
        $oCut = new CTest();
        $this->expectException(Error::class);
        $oCut->fnErrorThrow('type', 'msg');
    }
}
