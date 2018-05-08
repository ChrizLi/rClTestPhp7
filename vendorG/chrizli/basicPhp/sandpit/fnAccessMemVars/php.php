PHP 5 is very very flexible in accessing member variables and member functions. These access methods maybe look unusual and unnecessary at first glance; but they are very useful sometimes; specially when you work with SimpleXML classes and objects. I have posted a similar comment in SimpleXML function reference section, but this one is more comprehensive. 

I use the following class as reference for all examples: 

<?php 
class Foo { 
    public $aMemberVar = 'aMemberVar Member Variable'; 
    public $aFuncName = 'aMemberFunc'; 
    
    
    function aMemberFunc() { 
        print 'Inside `aMemberFunc()`'; 
    } 
} 

$foo = new Foo; 
?> 

You can access member variables in an object using another variable as name: 

<?php 
$element = 'aMemberVar'; 
print $foo->$element; // prints "aMemberVar Member Variable" 
?> 

or use functions: 

<?php 
function getVarName() 
{ return 'aMemberVar'; } 

print $foo->{getVarName()}; // prints "aMemberVar Member Variable" 
?> 

Important Note: You must surround function name with { and } or PHP would think you are calling a member function of object "foo". 

you can use a constant or literal as well: 

<?php 
define(MY_CONSTANT, 'aMemberVar'); 
print $foo->{MY_CONSTANT}; // Prints "aMemberVar Member Variable" 
print $foo->{'aMemberVar'}; // Prints "aMemberVar Member Variable" 
?> 

You can use members of other objects as well: 

<?php 
print $foo->{$otherObj->var}; 
print $foo->{$otherObj->func()}; 
?> 

You can use mathods above to access member functions as well: 

<?php 
print $foo->{'aMemberFunc'}(); // Prints "Inside `aMemberFunc()`" 
print $foo->{$foo->aFuncName}(); // Prints "Inside `aMemberFunc()`" 
?>