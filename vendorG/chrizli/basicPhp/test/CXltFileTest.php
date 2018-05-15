<?php
declare(strict_types=1);
require_once('_cfg.php');
require_once (__ROOT__.'/vendor/autoload.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CBase.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CXltString.php');
require_once (__ROOT__.'/vendorG/chrizLi/basicPhp/src/CXltFile.php');

use PHPUnit\Framework\TestCase;
use chrizli\basicPhp as cPhp;

final class CXltFileTest extends TestCase
{
    public  function    testFnDelimiterGet(): void {
        $this->assertEquals(
            '\\',
            cPhp\CXltFile::fnDelimiterGet()
        );
    }
    
    public  function    testFnDelimiterRevGet(): void {
        $this->assertEquals(
            '/',
            cPhp\CXltFile::fnDelimiterRevGet()
        );
    }
    
    public  function    testFnNormalize(): void {
        $this->assertEquals(
            '\\host\share\folder\file.ext',
            cPhp\CXltFile::fnNormalize('\\host\share\folder\file.ext'),
            'default'
        );
        
        $this->assertEquals(
            '\\\\host\share\folder\file.ext',
            cPhp\CXltFile::fnNormalize('//host/share/folder/file.ext'),
            'reverse'
        );
        $this->assertEquals(
            '\\\\host\share\folder\\',
            cPhp\CXltFile::fnNormalize('//host/share/folder/', true, true),
            'DelimiterAdd'
        );
        $this->assertEquals(
            '\\\\host\share\folder\\',
            cPhp\CXltFile::fnNormalize('//host/share/folder/', false, false),
            'DelimiterNoMod'
        );
        $this->assertEquals(
            '\\\\host\share\folder',
            cPhp\CXltFile::fnNormalize('//host/share/folder/', true, false),
            'DelimiterDrop'
        );
        
    }
    
    public  function    testFnFileNameFullGet(): void {
        $this->assertEquals(
            'filename.ext',
            cPhp\CXltFile::fnFileNameFullGet('//host/share/folder/filename.ext'),
            'default'
        );
        $this->assertEquals(
            'filename',
            cPhp\CXltFile::fnFileNameFullGet('//host/share/folder/filename'),
            'ExtNo'
        );
    }
    
    public  function    testFnFileExtensionGet(): void {
        $this->assertEquals(
            'ext',
            cPhp\CXltFile::fnFileExtensionGet('//host/share/folder/fileName.ext'),
            'default'
        );
        $this->assertEquals(
            '',
            cPhp\CXltFile::fnFileExtensionGet('//host/share/folder/fileName.'),
            'ExtNo'
        );
        $this->assertEquals(
            '',
            cPhp\CXltFile::fnFileExtensionGet('//host/share/folder/fileName'),
            'DotNo'
        );
    }
    
    public  function    testFnFileNameGet(): void {
        $this->assertEquals(
            'filename',
            cPhp\CXltFile::fnFileNameGet('//host/share/folder/filename.ext'),
            'default'
        );
        $this->assertEquals(
            'filename',
            cPhp\CXltFile::fnFileNameGet('//host/share/folder/filename.'),
            'ExtNo'
        );
        $this->assertEquals(
            'filename',
            cPhp\CXltFile::fnFileNameGet('//host/share/folder/filename'),
            'DotNo'
        );
    }
    
    public  function    testFnFilePathGet(): void {
        $this->assertEquals(
            '\\\\host\share\folder\\',
            cPhp\CXltFile::fnFilePathGet('//host/share/folder/filename.ext'),
            'default'
        );
        $this->assertEquals(
            '\\\\host\share\folder\\',
            cPhp\CXltFile::fnFilePathGet('//host/share/folder/filename'),
            'DotNo'
        );
        
        $this->assertEquals(
            '\\\\host\share\folder\\',
            cPhp\CXltFile::fnFilePathGet('//host/share/folder/'),
            'FolderOnly'
        );
    }
    
    public  function    testFnFileExtensionUpd(): void {
        $this->assertEquals(
            '\folder\filename.new',
            cPhp\CXltFile::fnFileExtensionUpd('/folder/filename.old','new')
        );
    }
    
    public  function    testFnFilePrefixUpd(): void {
        $this->assertEquals(
            '\folder\prefilenamesuf.ext',
            cPhp\CXltFile::fnFilePrefixUpd('/folder/filename.ext','pre','suf')
        );
    }
    
    public  function    testFnSiteRootGet(): void {
        $this->assertEquals(
            $_SERVER['DOCUMENT_ROOT'],
            cPhp\CXltFile::fnSiteRootGet()
        );
    }
}
