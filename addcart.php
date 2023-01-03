<?php

session_start();
$b = intval($_GET['b']);
include "config.php";


$searchQ = "SELECT BookCartID,Quantity FROM `bookcart` WHERE `BookID`= " . $b . "&&`CartID`=" . $_SESSION['CartID'] . ";"; // check user cartid
$result=mysqli_query($conn,$searchQ);

if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $qq = $row['Quantity'] + 1;
    $updateQ = "UPDATE `bookcart` SET Quantity=".$qq." WHERE `BookCartID` =".$row['BookCartID'].";"; // check user cartid
    mysqli_query($conn,$updateQ);

}else{$insertCart = "INSERT INTO `bookcart`( `CartID`, `BookID`, `Quantity`) VALUES (" . $_SESSION['CartID'] . ",".$b.",'1')"; // insert user cartid
mysqli_query($conn,$insertCart);}




$DeleteWish = "DELETE FROM wishbook WHERE WishBookID=".$b.";";
mysqli_query($conn,$DeleteWish);



?>