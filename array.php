<?php
$cars = array("Volvo", "BMW", "Toyota"); 
$cars[1] = "Ford";

print_r($cars);

// include("./foreach.php");

for($i=0; $i<5 ; $i++){
    include_once("./foreach.php");  //  give warning
    // include("./foreach.php");
    require_once("./min-max.php");   //give errro
}
?>