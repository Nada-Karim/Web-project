<?php 
session_start();

$b = intval($_GET['bb']);
include "config.php";

    $sql3 = "INSERT  into `wishbook` (`WishlistID`,`BookID`) values (".$_SESSION['WishlistID'].",".$b.")";
     mysqli_query($conn, $sql3);
  
?>