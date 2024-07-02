<?php
$h2_color = "pink";
echo "<h1 style='color:blue'>Hello Bro kaise ho !</h1>";
?>
<?php
$name= "Bipin Sahani";
echo "<h2 style='color:green'>My name is $name</h2>"
?>

<h2 style='color:orange'>My name is <?php echo $name  ?></h2>

<h2 style='color:<?php echo $h2_color ?>'>My name is <?php echo $name ; ?></h2>