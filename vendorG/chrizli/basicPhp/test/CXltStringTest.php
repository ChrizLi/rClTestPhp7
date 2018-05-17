<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CXltString.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CXltStringTest extends TestCase
{
    public  function    testFnRight(): void {
        $this->assertEquals(
            'bc',
            cPhp\CXltString::fnRight('abc',2)
        );
    }
    
    public  function    testFnLeft(): void {
        $this->assertEquals(
            'ab',
            cPhp\CXltString::fnLeft('abc',2)
        );
    }
    
    public  function    testFnOccurrenceCountGet(): void {
        $this->assertEquals(
            2,
            cPhp\CXltString::fnOccurrenceCountGet('b', 'abcacb')
        );
        
        $this->assertEquals(
            0,
            cPhp\CXltString::fnOccurrenceCountGet('d', 'abcacb')
        );
        
        $this->assertEquals(
            1,
            cPhp\CXltString::fnOccurrenceCountGet('d', 'dabcacb')
        );
        
        $this->assertEquals(
            1,
            cPhp\CXltString::fnOccurrenceCountGet('d', 'abcacbd')
        );
    }
    
    public  function    testFnOccurrencePositionGet(): void {
        $sHay = 'abcabca';
        $this->assertEquals(
            1,
            cPhp\CXltString::fnOccurrencePositionGet('a', $sHay, 1)
        );
        $this->assertEquals(
            4,
            cPhp\CXltString::fnOccurrencePositionGet('a', $sHay, 2)
        );
        $this->assertEquals(
            7,
            cPhp\CXltString::fnOccurrencePositionGet('a', $sHay, 3)
        );
    }
    
    public  function    testFnArrayToList(): void {
        $a = array('a','b','c');
        $this->assertEquals(
            'a,b,c',
            cPhp\CXltString::fnArrayToList($a)
        );
    }
    
    public  function    testFnListLastGet(): void {
        $s = 'a,b,c';
        $this->assertEquals(
            'c',
            cPhp\CXltString::fnListLastGet($s)
        );
    }
    
    /*
    public function testCanBeCreatedFromValidEmailAddress(): void {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }
    */
}
