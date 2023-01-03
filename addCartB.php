<?php

session_start();
$b = intval($_GET['b']);
$q = intval($_GET['q']);
include "config.php";


$searchQ = "SELECT BookCartID,Quantity FROM `bookcart` WHERE `BookID`= " . $b . "&&`CartID`=" . $_SESSION['CartID'] . ";"; // check user cartid
$result=mysqli_query($conn,$searchQ);

if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $qq = $row['Quantity'] + 1;
    $updateQ = "UPDATE `bookcart` SET Quantity=".$q." WHERE `BookCartID` =".$row['BookCartID'].";"; // check user cartid
    mysqli_query($conn,$updateQ);

}else{$insertCart = "INSERT INTO `bookcart`( `CartID`, `BookID`, `Quantity`) VALUES (" . $_SESSION['CartID'] . ",".$b.",".$q.")"; // insert user cartid
mysqli_query($conn,$insertCart);}
?>