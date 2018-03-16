<?php
require_once 'autoloader.php';
$obj = new \A\B\C\Magic();
echo '<hr>';
// Setting value of nonexistent property.
echo 'Setting value of non existent property:<br>';
$obj->user = 'Rokas';
echo $obj->user . '<br>';
print_r($obj->data);
echo '<hr>';
// Calling isset() on fake property.
echo 'Calling isset() on fake property:<br>';
var_dump(isset($obj->user));
echo '<hr>';
// Unsetting fake property.
echo 'Unsetting fake property:<br>';
unset($obj->user);
var_dump(isset($obj->user));
echo '<hr>';
// Calling nonexistent property.
echo 'Calling nonexistent property:<br>';
echo $obj->user;
echo '<hr>';
// Printing object as a string.
echo 'Printing object as a string:<br>';
echo $obj;
echo '<hr>';
// Method overloading test.
echo 'Method overloading test:<br>';
$obj->runTest('in object context. <br>');
\A\B\C\Magic::runTest('in static context.');
echo '<hr>';
// Using object as a function.
echo 'Using object as a function:<br>';
$obj('Object as a function test.');
echo '<hr>';
// Clone test.
echo 'Cloning SubObject:<br>';
$obj->var1 = new \A\B\C\SubObject();
$obj->var2 = new \A\B\C\SubObject();
$obj2 = clone $obj;
print('Original object: ');
print_r($obj);
echo '<br>';
print('Cloned object: ');
print_r($obj2);
echo '<hr>';
// Sleep test.
echo 'Testing sleep & wakeup:<br>';
$sleeper = new \A\B\C\Sleep('', '');
$dream = serialize($sleeper);
echo'<br>';
unserialize($dream);
echo'<hr>';
// Debug test.
echo 'Debug test:<br>';
var_dump(new \A\B\C\Debug(7));
echo '<hr>';
