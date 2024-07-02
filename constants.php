<?php  
//const data = "Bipin Sahani <br>";
//const data = "Ravi"   its show error because constant doesn't redeclare
//echo data;

?>


<?php 
define("DATA" ,"Babu");
echo DATA;

define ("data" , "Baccha sahani");
echo data;
?>

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 

<?php
// case-insensitive constant name
define("GREETING", "Welcome to Bagaha !", true);
echo greeting;
?> 



<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 