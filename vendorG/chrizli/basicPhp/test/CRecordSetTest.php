    public  function    testFnSet(): void {
        $aKey   = array('s1', 's2');
        $oCut   = new CRecordSet($aKey);
        $aValue = array('s1'=>'v1', 's2'=>'v2');
        $oCut->fnSet($aValue);
        $this->assertEquals(
            true,
            $this->fnKeyValid('s1'),
            'keyTrue'
        );
        $this->assertEquals(
            false,
            $this->fnKeyValid('not'),
            'keyFalse'
        );
        $this->assertEquals(
            true,
            $this->fnValueValid(array('s1'=>'v1')),
            'valueTrue'
        )
        $this->assertEquals(
            false,
            $this->fnValueValid(array('s1'=>'v3')),
            'valueFalse'
        )
        $this->assertEquals(
            false,
            $this->fnValueValid(array('not'=>'v1')),
            'keyFalse2'
        )
    }

    
