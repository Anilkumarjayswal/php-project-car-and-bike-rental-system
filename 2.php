<!DOCTYPE html>
<html>
<body>

<?php
$bikes = array
  (
  array("Pulsar",22,22),
  array("CBZ",15,15),
  array("Apache",5,5),
  array("Bullet",20,20)
  
  );
  
echo $bikes[0][0].": In stock: ".$bikes[0][1].", sold: ".$bikes[0][2].".<br>";
echo $bikes[1][0].": In stock: ".$bikes[1][1].", sold: ".$bikes[1][2].".<br>";
echo $bikes[2][0].": In stock: ".$bikes[2][1].", sold: ".$bikes[2][2].".<br>";
echo $bikes[3][0].": In stock: ".$bikes[3][1].", sold: ".$bikes[3][2].".<br>";
?>

</body>
</html>