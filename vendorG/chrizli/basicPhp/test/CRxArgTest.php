<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
//require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CXltString.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CRxArg.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CRxArgTest extends TestCase
{
    public  function    testFnXGet(): void {
        $aUrl = array('sProcess'=>'Url');
        $aForm= array('sProcess'=>'Form');
        $aRest= array('sProcess'=>'Rest');
        $oCut = new cPhp\CRxArg($aUrl, $aForm, $aRest);
        //$oCut->fnUrlSet($aUrl);
        $this->assertEquals(
            array('sProcess'=>'Url'),
            $oCut->fnUrlGet(),
            'ConstructorUrl'
        );
        $this->assertEquals(
            array('sProcess'=>'Form'),
            $oCut->fnFormGet(),
            'ConstructorForm'
        );
        $this->assertEquals(
            array('sProcess'=>'Rest'),
            $oCut->fnRestGet(),
            'ConstructorRest'
        );
        $oCut->fnUrlSet(array('sProcess'=>'UrlSetLater'));
        $this->assertEquals(
            array('sProcess'=>'UrlSetLater'),
            $oCut->fnUrlGet(),
            'SetLaterUrl'
        );
        $oCut->fnFormSet(array('sProcess'=>'FormSetLater'));
        $this->assertEquals(
            array('sProcess'=>'FormSetLater'),
            $oCut->fnFormGet(),
            'SetLaterForm'
        );
        $oCut->fnRestSet(array('sProcess'=>'RestSetLater'));
        $this->assertEquals(
            array('sProcess'=>'RestSetLater'),
            $oCut->fnRestGet(),
            'SetLaterRest'
        );
    }
    
    public  function    testFnXExist(): void {
        $aUrl = array('sProcess'=>'Url');
        $aForm= array('sProcess'=>'Form');
        $aRest= array('sProcess'=>'Rest');
        $oCut = new cPhp\CRxArg($aUrl, $aForm, $aRest);
        $this->assertTrue(
            $oCut->fnUrlKeyExists('sProcess')
        );
        $this->assertTrue(
            $oCut->fnUrlKeyExists('sProcess')
        );
        $this->assertTrue(
            $oCut->fnUrlKeyExists('sProcess')
        );
        $this->assertFalse(
            $oCut->fnUrlKeyExists('sProcessNot')
        );
        $this->assertFalse(
            $oCut->fnUrlKeyExists('sProcessNot')
        );
        $this->assertFalse(
            $oCut->fnUrlKeyExists('sProcessNot')
        );
    }
    
    public  function    testFnXSet(): void {
        $aUrl = array('sProcess'=>'Url');
        $aForm= array('sProcess'=>'Form');
        $aRest= array('sProcess'=>'Rest');
        $oCut = new cPhp\CRxArg($aUrl, $aForm, $aRest);
        $oCut->fnUrlSet('x', 'sAction');
        $this->assertTrue(
            $oCut->fnUrlKeyExists('sAction')
        );
        $oCut->fnFormSet('x', 'sAction');
        $this->assertTrue(
            $oCut->fnFormKeyExists('sAction')
        );
        $oCut->fnRestSet('x', 'sAction');
        $this->assertTrue(
            $oCut->fnRestKeyExists('sAction')
        );
        $oCut->fnUrlSet(array('arraySet'=>'x'));
        $this->assertTrue(
            $oCut->fnUrlKeyExists('arraySet')
        );
        $oCut->fnFormSet(array('arraySet'=>'x'));
        $this->assertTrue(
            $oCut->fnFormKeyExists('arraySet')
        );
        $oCut->fnRestSet(array('arraySet'=>'x'));
        $this->assertTrue(
            $oCut->fnRestKeyExists('arraySet')
        );
    }
    
    public  function    testFnXDel(): void {
        $aUrl = array('sProcess'=>'Url');
        $aForm= array('sProcess'=>'Form');
        $aRest= array('sProcess'=>'Rest');
        $oCut = new cPhp\CRxArg($aUrl, $aForm, $aRest);
        $oCut->fnUrlDel('sProcess');
        $this->assertFalse(
            $oCut->fnUrlKeyExists('sProcess')
        );
        $oCut->fnFormDel('sProcess');
        $this->assertFalse(
            $oCut->fnFormKeyExists('sProcess')
        );
        $oCut->fnRestDel('sProcess');
        $this->assertFalse(
            $oCut->fnRestKeyExists('sProcess')
        );
    }
}
