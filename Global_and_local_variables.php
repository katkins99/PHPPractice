<!DOCTYPE html>
<html>
<body>
    
<?php
$x = 5; //this variable is global (outside of any functions)
$y = 99;
global $y; // we can make variables global by using this function.
function myTest() {
    $x = 7; //this variable is local (inside the function)
    echo "<p>Variable x inside the function is: $x<p>";
}

myTest();

echo "<p>Variable x outside the function is: $x<p>";
?>
</body>
</html>