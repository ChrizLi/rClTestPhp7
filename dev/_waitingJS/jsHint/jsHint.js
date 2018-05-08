/*-------------------------------------
---- 20151129v1.0, ListlChr, Init
----
---------------------------------------
---- what this code does:
---- template for jsHint
---------------------------------------
---- missing code/known errors:
---- no easy way to jsHint multiple files
---- and combine output of those
-------------------------------------*/


var arSource = 
[
  'function goo() {}',
  'foo = 3;'
];

// alle global jsHint options
var oOptions = 
{
  undef: true
};

var oPredef = 
{
  foo: false
};

JSHINT(arSource, oOptions, oPredef);

console.log(JSHINT.data());