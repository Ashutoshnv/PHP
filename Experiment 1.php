<?php
echo "<h1>Welcome To PHP</h1>";
$a=10;
$b=5;
echo "<br>The Value of a is : ".$a;
echo "<br>The Value of b is : ".$b;
echo "<br>The Addition of a & b is : ".($a+$b);
echo "<br>The Subtraction of a & b is : ".($a-$b);
echo "<br>The Multipliction of a & b is : ".($a*$b);
++$a;
echo "<br>The Increment of value by 1 in Preincrement condition : ".$a ;
$a--;
echo "<br>The Decrement of value by 1 in Post  condition : ".$a ;
echo "<br>The Betwise $a and $b is :".($a&$b);
echo "<br>The Betwise $a OR $b is :".($b or $b);
echo "<br>The Betwise right shife of a is : ".($a>>1);
?>
