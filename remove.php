<?php 
$w = intval($_GET['w']);
include "config.php";

$DeleteWish = "DELETE FROM wishbook WHERE WishBookID=".$w.";";
mysqli_query($conn,$DeleteWish);

?>