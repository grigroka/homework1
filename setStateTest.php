<?php
require_once 'autoloader.php';
$obj = new \A\B\C\Magic();
// Testing __set_state.
$obj->var1 = 'Test';
$obj->var2 = 10;
eval('$obj2 = ' . var_export($obj, true) . ';');
echo '<br>';
var_dump($obj2);
echo '<br>';