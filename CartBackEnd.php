<?php 
$r = intval($_GET['r']);
include "config.php";

$DeleteCart = "DELETE FROM bookcart WHERE BookCartID=".$r.";";
mysqli_query($conn,$DeleteCart);

?>
