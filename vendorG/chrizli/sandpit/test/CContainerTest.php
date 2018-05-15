<?php

class       CContainerTest 
extends     
{
    public function testFnAddDefault(): void {
        $oCut = new CContainer();
        $oCut->fnAdd('Object','Id');
        $this->assertEquals(
            'Object',
            $oCut->fnGet('Id')
        );
    }
    
    public function testFnAddNamed(): void {
        $oCut = new CContainer(true);
        $oCut->fnAdd('Object','Id');
        $this->assertEquals(
            'Object',
            $oCut->fnGet('Id')
        );
    }
    
    public function testFnAddNum(): void {
        $oCut = new CContainer(false);
        $oCut->fnAdd('Object');
        $this->assertEquals(
            'Object',
            $oCut->fnGet(0)
        );
    }
    
    public function testFnGetAll(): void {
        $oCut = new CContainer(true);
        $oCut->fnAdd('Object1','Id1');
        $oCut->fnAdd('Object2','Id2');
        $this->assertEquals(
            array('Id1'=>'Object1','Id2'=>'Object2'),
            $oCut->fnGet()
        );
    }
    
    public function testFnDel(): void {
        $oCut = new CContainer(true);
        $oCut->fnAdd('Object1','Id1');
        $oCut->fnDel('Id1');
        $this->assertEquals(
            array(),
            $oCut->fnGet();
        );
    }
    
    public function testFnReset(): void {
        $oCut = new CContainer(true);
        $oCut->fnAdd('Object1','Id1');
        $oCut->fnDel('Id1');
        $this->assertEquals(
            array(),
            $oCut->fnReset();
        );
    }
    
    public function testFnSet(): void {
        $oCut = new CContainer(true);
        $oCut->fnAdd('Object1','Id1');
        $oCut->fnSel(array('Object2','Id2'));
        $this->assertEquals(
            'Object2',
            $oCut->fnGet('Id2')
        );
    }
}

?>
