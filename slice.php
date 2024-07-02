<?php
$x = "Hello World!";
echo substr($x, 6, 5);   //Start the slice at index 6 and end the slice 5 positions
echo "<br>";
echo substr($x, 6);  //slice to the end
echo "<br>";

echo substr($x, -5, 3);   //slice from the end
echo "<br>";
echo substr($x, 5, -3);  //negative length
?> 