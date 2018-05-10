qUnit.test("fnTest1-test", function(assert)
{
    var sExpected="1";
    assert.equal(sExpected,fnTest1(),"result description");
});

qUnit.test("fnTest2-test", function(assert)
{
    var sExpected="2";
    assert.equal(sExpected,fnTest2(),"result description");
});
