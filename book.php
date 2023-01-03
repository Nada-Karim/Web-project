
<?php   include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="30">
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js.map"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/Web.css" />
  <link rel="stylesheet" href="css/Wishlist.css">
  <link rel="stylesheet" href="css/Nav.css">
  <link rel="stylesheet" href="css/CartButton.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/Web.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
<script src="/path/to/cdn/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="styles.css" />
<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" media="screen and (min-width: 960px)" href="largedevice.css">
<link rel="stylesheet" media="screen and (max-width: 480px)" href="smalldevice.css">
<script src="js/bootstrap.js"></script>
<style>
  .checked {
    color: orange;
  }

  .fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
  }

  .fa:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
  }


  .fa-instagram {
    background: #125688;
    color: white;
  }

  .fa-pinterest {
    background: #cb2027;
    color: white;
  }


  /*footer style*/

  /* end footer style*/





  /*start of nav bar style*/

  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }

  .static {
    position: absolute;
    background: white;
  }

  .static:hover {
    opacity: 0;
  }

  h6#d1 {
    visibility: hidden;
    padding: 1px;
    margin-top: 9px;
    color: #C4AE78;
  }






  .btn-default {
    border-width: 2px;


  }


  .form-outline {
    border-width: 2px;
  }

  input[type=search] {

    margin-top: 13px;
    font-size: 14px;
    width: 170px;
    margin-right: 2px;

  }




  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');


  a {
    cursor: pointer;
    transition: all 200ms linear;
  }

  a:hover {
    text-decoration: none;
  }

  .link {
    color: #C4AE78;
  }

  .link:hover {
    color: #C4AE78;
  }

  p {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.7;
  }

  h4 {
    font-weight: 600;
  }

  h6 span {
    padding: 0 20px;
    text-transform: uppercase;
    font-weight: 700;
  }

  .section {
    position: relative;
    width: 100%;
    display: block;
  }

  .full-height {
    min-height: 100vh;
  }

  [type="checkbox"]:checked,
  [type="checkbox"]:not(:checked) {
    position: absolute;
    left: -9999px;
  }

  .checkbox:checked+label,
  .checkbox:not(:checked)+label {
    position: relative;
    display: block;
    text-align: center;
    width: 60px;
    height: 16px;
    border-radius: 8px;
    padding: 0;
    margin: 10px auto;
    cursor: pointer;
    background-color: hsl(113, 74%, 9%);
    ;
  }

  .checkbox:checked+label:before,
  .checkbox:not(:checked)+label:before {
    position: absolute;
    display: block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #fff;
    background-color: hsl(113, 74%, 9%);
    ;
    font-family: 'unicons';
    content: '\eb4f';
    z-index: 20;
    top: -10px;
    left: -10px;
    line-height: 36px;
    text-align: center;
    font-size: 24px;
    transition: all 0.5s ease;
  }

  .checkbox:checked+label:before {
    transform: translateX(44px) rotate(-270deg);
  }


  .card-3d-wrap {
    position: relative;
    width: 300px;
    max-width: 100%;
    height: 250px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    perspective: 800px;
    margin-top: 40px;
  }

  .card-3d-wrapper {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: all 600ms ease-out;
  }

  .card-front,
  .card-back {
    width: 100%;
    height: 100%;
    background-color: #fff;

    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: 300%;
    position: absolute;
    border-radius: 6px;
    left: 0;
    top: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
  }

  .card-back {
    transform: rotateY(180deg);
  }

  .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
    transform: rotateY(180deg);
  }

  .center-wrap {
    position: absolute;
    width: 100%;
    padding: 0 23px;
    top: 50%;
    left: 0;
    transform: translate3d(0, -50%, 35px) perspective(100px);
    z-index: 20;
    display: block;
  }


  .form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
  }

  .form-style {
    padding: 13px 20px;
    padding-left: 50px;
    height: 40px;
    width: 100%;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.5px;
    outline: none;
    color: hsl(113, 74%, 9%);
    background-color: hsl(113, 74%, 9%);
    border: none;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
  }

  .form-style:focus,
  .form-style:active {
    border: none;
    outline: none;
    box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
  }

  .input-icon {
    position: absolute;
    top: 0;
    left: 18px;
    height: 40px;
    font-size: 14px;
    line-height: 0px;
    text-align: left;
    color: #ffeba7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input:-ms-input-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input::-moz-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input:-moz-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input::-webkit-input-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input:focus:-ms-input-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input:focus::-moz-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input:focus:-moz-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .form-group input:focus::-webkit-input-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }


  /*start of footer style*/
  .text-underline-hover {
    text-decoration: none;
  }

  .text-underline-hover:hover {
    text-decoration: underline;

  }

  a:not([class]) {
    text-decoration: none;
  }

  a:not([class]):hover {
    text-decoration: underline
  }

  .bg {
    background-color: hsl(113, 74%, 9%);
    ;
  }


  /*end of footer style*/
</style>



<!--END OF NAV BAR-->
<title>Book</title>
</head>

<body>

  <?php

  $r = $_GET['r'];

  // Create a connection
  $conn = mysqli_connect("localhost", "root", "", "bookstore");
  // Die if connection was not successful
  if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
  }

  $sql = "SELECT `BookID`,`BookImg`, `BookName`,  `BookPrice`, `BookDesc`, `BookRating`,`AuthorID`,`BookGenre1`, `BookQuantity` FROM `books` WHERE BookID=" . $r . ";";

  $result = mysqli_query($conn, $sql);

  $sql2 = "SELECT AuthorName FROM `author`;";
  $result2 = mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result2) > 0) {
    $authorName = array();
    array_unshift($authorName, "");
    unset($authorName[0]);

    while ($row = $result2->fetch_assoc()) {
      $authorName[] = $row;
    }
  }

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      echo '<div class="container" style="padding-bottom:800px ;">
            <div class="container-fluid" style="margin-top: -0.5cm;">
          
          
          <div class="card" style="float: left; margin: 1cm; margin-left: -3cm;">
            <img class="card-img-top" src="';
      echo $row["BookImg"];
      echo ' " alt="Book Cover" width="700" height="645">
            </div>
            <div class="card" style="float: right; margin: 1cm; width: 63%; margin-left: -2cm;">
    <p><div class="w3-container">';
      if ($row["BookQuantity"] > 0) {
        echo '
        <span class="w3-tag w3-green" style="float:right;">IN STOCK</span>';
      } else {
        echo '
          <span class="w3-tag w3-red" style="float:right;">OUT OF STOCK</span>';
      }
      echo '
      </div></p>
    <div class="card-body" style="margin: 0.5cm;margin-top: -0.75cm;">
        <p style="margin-top: -0.5cm;"><b><h1>';
      echo $row["BookName"];
      echo '</h1></b></p>
        <p class="text-muted" style="font-size: 20px;margin-top: -0.25cm;">Author: ';
      if ($row["AuthorID"] == 1) {
        echo $authorName[$row["AuthorID"]]['AuthorName'];
      } else {
        echo $authorName[$row["AuthorID"] - 1]['AuthorName'];
      }
      echo '</p>
        <p class="text-muted" style="font-size: 20px;margin-top: -0.25cm;">Genre: ';
      echo $row["BookGenre1"];
      echo '</p>
        <div class="rate" style="margin-left: -0.5cm;margin-top: -0.5cm;">';
      if ($row["BookRating"] >= 4) {
        echo ' <p class="card-text">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span></p>';
      } elseif ($row["BookRating"] >= 3 && $row["BookRating"] < 4) {
        echo ' <p class="card-text">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span></p>';
      } elseif ($row["BookRating"] >= 2 && $row["BookRating"] < 3) {
        echo ' <p class="card-text">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span></p>';
      } elseif ($row["BookRating"] >= 1 && $row["BookRating"] < 2) {
        echo ' <p class="card-text">
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star"></span></p>';
      }
      echo ' </div>
    <div class="card" style="margin: 0.5cm; width: 95%; ">
        <p style="color: red; font-size: 40px; margin: 0.5cm;margin-top: -0.1cm;">';
      echo "EGP " . $row["BookPrice"];
      echo '</p>
        <p style="margin: 0.5cm;margin-top: -0.25cm;">';
      echo $row["BookDesc"];
      echo ' </p>

    </div>


            <p style="font-size: 25px; margin: 0.5cm; margin-top: -0.1cm;">Quantity</p>
            <input type="number" id="'. $row["BookID"] .'"value="1" name="quantity" min="1" max="50" style="margin: 0.5cm;margin-top: -1.5cm;">
            
  

    <button class="round-black-btn small-btn" onclick=addCartB(' . $row["BookID"] . ') >Add to Cart</button>
            

  </div>
</div> 

</div>';
    }
  }


  ?>
  <script>

    function addCartB(bookID) {

      var q = document.getElementById(bookID).value;
      console.log(bookID);
      var xmlhttp4 = new XMLHttpRequest();
   
      xmlhttp4.open("GET", "addCartB.php?b=" + bookID+"&q=" + q, true);
      xmlhttp4.send();
    }
  </script>

  </div>
  <?php include "Footer.php" ?>

</body>

</html>