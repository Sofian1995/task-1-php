<?php
$x = 655;
var_dump(is_int($x));
?>
<?php
echo "<br>";
$x = 4.1;
var_dump(is_int($x));
?>
<?php
echo "<br>";
$x = 2000.5;
var_dump(is_float($x));
?>
<?php
echo "<br>";
$x = "farah";
var_dump(is_numeric($x));

?>
<?php
echo "<br>";
echo(min(0,100,-30,20));
echo(max(0,100,-30,20));
?>
<?php
echo "<br>";
echo(abs(-1258));
?>
<?php
echo "<br>";
echo(round(6.1));
echo(round(4.6));
?>
<?php
echo "<br>";
echo(rand());
?>