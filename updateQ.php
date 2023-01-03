<?php 
include "config.php";
$u =$_GET['u'];
$q =$_GET['q'];


echo $u . $q;
$UpdateCart = "UPDATE `bookcart` SET `Quantity`=".$q." WHERE BookCartID=".$u.";";
mysqli_query($conn,$UpdateCart);

?>