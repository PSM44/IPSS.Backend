<?php
include_once '../version1.php';
 echo $_method;
Echo '<hr>';
Echo '<hr>';
print_r($_parts);
Echo '<hr>';
Echo '<hr>';
echo "<p>El mantenedor es: {$_parts[5]}</p>";
echo "<p>La version es: {$_parts[4]}</p>";
echo "<p>Es un API?: {$_parts[3]}</p>";
Echo '<hr>';
Echo '<hr>';
echo "<p>El mantenedor es: ".$_parts[(count($_parts)-2)] . "</p>";
echo "<p>La version es: ".$_parts[(count($_parts)-3)] . "</p>";
echo "<p>Es un API?: ".$_parts[(count($_parts)-4)] . "</p>";
Echo '<hr>';
Echo '<hr>';