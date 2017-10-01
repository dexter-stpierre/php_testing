<!-- Using the & sign when assigning a variable as equal to another variable
simply creates a reference to it and a change to one will change the other -->
<?php
// Assign the value 'Bob' to $foo
$foo = 'Bob';
// Reference $foo via $bar.
$bar = &$foo;
echo $foo;
echo $bar;
// Alter $bar...
$bar = "My name is $bar";
echo $bar;
// $foo is altered too.
echo $foo;
// Both are altered again. It doesn't matter which on you change, both are changed
$foo = "I changed again";
echo $bar;
echo $foo;
?>
