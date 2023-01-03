<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="css/bootstrap.css">
      
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icon Library -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/bootstrap.bundle.min.js.map"></script>
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/all.min.css" />
   <link rel="stylesheet" href="css/Web.css" />
   <link rel="stylesheet" href="css/Wishlist.css">
   <link rel="stylesheet" href="css/Nav.css">
   <link rel="stylesheet" href="css/CartButton.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>





   
  <style>
    .checked { color: orange;}
.text {
  background-color: whitesmoke;
  color: black;
  font-size: 16px;
  padding: 16px 32px;
  width:251px;
  height:350px;
  overflow: scroll;
}
.flip-box {
  background-color: transparent;
  width: 250px;
  height: 350px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(-180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;

  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: grey;
  color: black;
}

.flip-box-back {
  color: white;
  transform: rotateY(180deg);
}
h5,a:hover{
text-decoration: none;
outline: none;
 
}




/*start of nav bar style*/

.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0; 
     }
    
     .static {
  position:absolute;
  background: white;
}

.static:hover {
  opacity:0;
}
    h6#d1{
    visibility:hidden ;
    padding:1px;
    margin-top: 9px; 
    color:#C4AE78;
    }
    

  


   
    .btn-default{
    border-width:2px;


    }
    
    
    .form-outline{
    border-width:2px;
    }
    
    input[type=search] {  
    
    margin-top: 13px;  
    font-size: 14px;  
    width :170px;
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
h6 span{
  padding: 0 20px;
  text-transform: uppercase;
  font-weight: 700;
}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  margin: 10px auto;
  cursor: pointer;
  background-color: hsl(113, 74%, 9%);;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #fff;
  background-color: hsl(113, 74%, 9%);;
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
.checkbox:checked + label:before {
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
  position:absolute;    
  top: 0;
  left: 0;  
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
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
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}
.center-wrap{
  position: absolute;
  width: 100%;
  padding: 0 23px;
  top: 50%;
  left: 0;
  transform: translate3d(0, -50%, 35px) perspective(100px);
  z-index: 20;
  display: block;
}


.form-group{ 
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
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}
.form-style:focus,
.form-style:active {
  border: none;
  outline: none;
  box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
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

.form-group input:-ms-input-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-moz-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:-moz-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input::-webkit-input-placeholder  {
  color: #c4c3ca;
  opacity: 0.7;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-ms-input-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus:-moz-placeholder  {
  opacity: 0;
  -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}
.form-group input:focus::-webkit-input-placeholder  {
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
        text-decoration: underline}
        .bg{
          background-color: hsl(113, 74%, 9%);;
        }


        /*end of footer style*/
    </style>






    <title>Shop</title>

</head>
<body>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  


<div class="container-fluid" style="padding-bottom: 20100px;">

    
<div style="height:110px; background:hsl(113, 74%, 9%)">
    <b><h1 style="margin-left: 1.5cm; font-size: 80px; color: #fff;">Shop</h1></b>
</div>
<script>
function myfunc(BookID){
            var xmlhttp = new XMLHttpRequest();
       xmlhttp.open("GET", "book_php.php?b=" + BookID, true);
       xmlhttp.send();
        }</script>
    <?php
          // Create a connection
$conn = mysqli_connect("localhost", "root", "", "bookstore");
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error()); 
}

$sql = "SELECT `BookID`,AuthorID, `BookImg`, `BookName`, `BookPrice`, `BookDesc`, `BookRating`,BookGenre1 FROM `books` ";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT AuthorName FROM `author`;";
$result2 = mysqli_query($conn, $sql2);
if(mysqli_num_rows($result2)>0){
    $authorName = array();
    array_unshift($authorName,"");
unset($authorName[0]);
  
while ($row = $result2->fetch_assoc()) {
    $authorName[] = $row;
}}

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="card-group" style="float: left; margin-top: 2cm; transle">';
        echo '
          <div class="card" style="width: 18rem; height:37rem;">
            <div class="container" style="width: 18rem; height:37rem;">
              <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                  <img class="rounded mx-auto d-block" src="';
        echo  $row["BookImg"];
        echo '" width=250 height=350 alt="Book Cover"class="image">
                  </div>
                  <div class="flip-box-back">
                  <div class="text">';
        echo $row["BookDesc"];
        echo '</div>
            </div>
          </div>
        </div>
    
    </div>
       <div class="card-body" style="width: 18rem; height:37rem;">
      <h5 class="card-title" >
        <h5 class="card-title"><a href="#" id="' .$row["BookID"]. '" onclick="mm(' . $row["BookID"] . ')"style="color: black;"> ';
        echo $row["BookName"];
        //echo $BookID[$x]['BookID'];
        echo ' </a></h5>';
        if ($row["BookRating"]>= 4) {
          echo ' <p class="card-text">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span></p>';
        } elseif ($row["BookRating"]>= 3 && $row["BookRating"] < 4) {
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
        echo ' <p class="text-muted">';
        if($row["AuthorID"]==1){
        echo $authorName[$row["AuthorID"]]['AuthorName'];}
        else{echo $authorName[$row["AuthorID"]-1]['AuthorName'];}
        echo '</p>
        <p class="text-muted" style="margin-top: -0.25cm;">Genre: ';
        echo $row["BookGenre1"];
        echo'</p>
      <p class="card-text">';
        echo "<p>EGP " . $row["BookPrice"];
        echo'
         <button class="fas fa-heart" type="submit" name="wishlist" style="background-color: transparent;" onclick="trial('.$row["BookID"].')"></button>';
      
        echo' </p>
      </p></div></div> </div>';
      }
    }
?>
 <script>

  function trial(bookID){
    var xmlhttp3 = new XMLHttpRequest();
    xmlhttp3.open("GET", "addWish.php?bb=" + bookID , true);
    xmlhttp3.send();
  }
  function mm(bookID){
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "book.php?r=" + bookID , true);
    xmlhttp.send();
      console.log(bookID);
   var link=document.getElementById(bookID);
   link.setAttribute('href',"book.php?r=" + bookID );

  }
 </script>


        </div>



        <?php include "Footer.php" ?>


</body>
</html>