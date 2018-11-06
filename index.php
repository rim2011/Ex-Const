<?php
$x="PostgreSQL";
echo $GLOBALS['x'];
echo "<br>";
$y="MySQL";
echo $GLOBALS['y'];
echo "<br>";
$z=&$x;
echo $GLOBALS['z'];
echo "<br>";
$x="PHP 5";
echo $GLOBALS['x'];
echo "<br>";
$y=&$x;
echo $GLOBALS['y'];
echo "<br>";
?>