<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/all.min.css"/>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
<script src="/path/to/cdn/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="styles.css"/>
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

/*.btn{  
  border-radius: 4px;
  height: 40px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;

 
  box-shadow: 0 8px 24px 0 rgba(255,255,167,.2);
}
.btn:active,
.btn:focus{  
 
  color: #ffeba7;
 
}*/


/*end of nav bar style*/



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



<!--START OF NAV BAR-->
<nav class="navbar navbar-expand fixed-top" style="position:sticky;  width:100%;  background-color: #fff; ">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="pics/books.gif" alt="Logo" style="width:40px;" class="rounded-pill">
      </a>
          
  
    </div>
  </nav>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
         
            <a class="nav-link dropdown-toggle " style="color:rgb(0, 0, 0);" href="index.html" role="button" >Home</a>
            
  
           
               <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  " style="color:rgb(0, 0, 0);" href="shop.html" role="button" >Shop</a>
        
             
       
                       </li>
                     
  
               <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style="color:rgb(0, 0, 0);" href="news page.html" role="button">News</a>
            
             
                       
          </li>
       
        
         </ul>
  











        
      </div>
    </div>
   
   
  
  <script>


function myfunc(){
 
if(document.getElementById("d1").style.visibility=="visible"){
  document.getElementById("d1").style.visibility="hidden";}
  else 
  document.getElementById("d1").style.visibility="visible";
  }
 
  function addCart(bookID) {

//console.log(n);
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "addcart.php?b=" + bookID, true);
xmlhttp.send();
 }
  </script>
    <h6 id="d1">
      <div class="form-outline">    
     <ul class="navbar-nav">
 <input type="search" id="form1" class="form-control" placeholder=" Search Books!" aria-label="Search" />
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" style="padding-top:15px ; color:#39481f" href="#" role="button" data-bs-toggle="dropdown">All Category</a>
         <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">Adventure</a></li>
           <li><a class="dropdown-item" href="#">Comedy</a></li>
           <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
           <li><a class="dropdown-item" href="#">Romance</a></li>
           <li><a class="dropdown-item" href="#">Horror</a></li>
           <li><a class="dropdown-item" href="#">Action</a></li>
           <li><a class="dropdown-item" href="#">Mystery</a></li>
           <li><a class="dropdown-item" href="#">Fiction</a></li>
           <li><a class="dropdown-item" href="#">Non-Fiction</a></li>
           <li><a class="dropdown-item" href="#">Children</a></li>
           
      </li>
      
   </ul>
     </ul>
    
</div>
     </h6>










  <button class="btn btn-default"  onclick="myfunc()" >
   <img src="pics/output-onlinegiftools.gif" style="height: 30px;">
  </button>
  <div>
  </div>
 

    
     
        
   
<button class="btn btn-default" data-bs-toggle="modal" data-bs-target="#myModal2">
<img src="pics/icons8-male-user-100.png" style="height: 40px;"/> 
       
</button>
   
 
  

<a href="Wishlist.html" >
  <button class="btn btn-default" >
    <img src="pics/wishlist.png" style="height: 30px;">
  
    </button></a>

</button>
<button class="btn btn-default" data-bs-toggle="modal" data-bs-target="#myModal">
<img src="pics/empty-cart.png" style="height: 30px;"/>
</button>


  </nav>


  <h5 id="d2">
     



    <div class="modal fade" id="myModal2" style="height:600px; padding-top: 100px; ">
      <div class="modal-dialog  modal-dialog-scrollablet">
        <div class="modal-content">
     
        <div class="row full-height ">
          <div class="col-12 text-center align-left py-5">
            <div class="section pb-5 pt-5 pt-sm-2">
              <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                    <label for="reg-log"></label>
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">


                  <div class="card-front">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3">Log In</h4>

                        <div class="form-group">
                          <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off"> 
                        </div>	
                        

                        <div class="form-group mt-2">
                          <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">  
                        </div>


                        <a href="#" class="btn mt-4 "  style="color:hsl(113, 74%, 9%); background-color: #fff;">submit </a>
                       <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p
                       
                        </div>
                        </div>
                      </div>



                  <div class="card-back">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3">Sign Up</h4>


                        <div class="form-group">
                          <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                         
                        </div>	


                        <div class="form-group mt-2">
                          <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                         
                        </div>	


                        <div class="form-group mt-2">
                          <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                         
                        </div>


                        <a href="#" class="btn mt-4 " onmouseover="this.style.backgroundColor='#fff'" onmouseleave="this.style.backgroundColor='#fff'" style="color:hsl(113, 74%, 9%); ">submit
                          
                        </a>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>

    </div>
  </div>



</h5>



 <!-- The Modal -->
 <div class="modal fade right" id="myModal">
  <div class="modal-dialog  modal-dialog-scrollable modal-side modal-top-right">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa-solid fa-cart-shopping"></i> Cart</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body modal-full">
        <table class="table">
          <thead>
            <tr>
              <th scope="col " class="h5 pt-2">Books</th>
              <th scope="col ">Name</th>
              <th scope="col " class="px-5">Quantity</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <div class="d-flex align-items-center">
                  <img src="Bookpic/1984.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                  <div class="flex-column ms-4">
                    <p class="mb-2">1984</p>

                  </div>
                </div>
              </th>
              <td class="align-middle">

              </td>
              <td class="align-middle">
                <div class="d-flex flex-row">
                  <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus text-success"></i>
                  </button>

                  <input id="form1" min="0" name="quantity" value="1" type="number"
                    class="form-control form-control-sm" style="width: 50px;" />

                  <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus text-success"></i>
                  </button>
                </div>
              </td>
              <td class="align-middle">
                <p class="mb-0" style="font-weight: 500;">147.15 EGP</p>
              </td>
            </tr>
          </tbody>
        </table>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer  justify-content-between">
        <h3>Total Price:</h3>
        <div class="d-grid gap-2  col-12 ">
          <a href="CartPage.html">
            <span class="cart__button btn btn-outline-success w-100 ">
              <span class="add__to-cart">View Cart</span>
              <span class="added">View Cart</span>
              <i class="fas fa-shopping-cart"></i>
            </span>
          </a>

          <a href="CheckOut.html">
            <span class="cart__button btn btn-outline-success w-100 ">
              <span class="add__to-cart">Check Out</span>
              <span class="added">Check Out</span>
              <i class="fas fa-box"></i>
            </span>
          </a>

        </div>
      </div>

    </div>
  </div>
</div>

<!--END OF NAV BAR-->
<title>Book</title>
</head>

<body>
    
<?php

$r = $_GET['r'];

          // Create a connection
$conn = mysqli_connect("localhost", "root", "", "bookstore");
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error()); 
}

$sql = "SELECT  `BookImg`, `BookName`,  `BookPrice`, `BookDesc`, `BookRating`,`AuthorID`,`BookGenre1`, `BookQuantity` FROM `books` WHERE BookID=".$r.";";

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

    echo '<div class="container" style="padding-bottom:800px ;">
            <div class="container-fluid" style="margin-top: -0.5cm;">
          
          
          <div class="card" style="float: left; margin: 1cm; margin-left: -3cm;">
            <img class="card-img-top" src="';
    echo $row["BookImg"];
    echo ' " alt="Book Cover" width="700" height="645">
            </div>
            <div class="card" style="float: right; margin: 1cm; width: 63%; margin-left: -2cm;">
    <p><div class="w3-container">';
    if($row["BookQuantity"]>0){ echo'
        <span class="w3-tag w3-green" style="float:right;">IN STOCK</span>';}
        else{ echo'
          <span class="w3-tag w3-red" style="float:right;">OUT OF STOCK</span>';}
        echo'
      </div></p>
    <div class="card-body" style="margin: 0.5cm;margin-top: -0.75cm;">
        <p style="margin-top: -0.5cm;"><b><h1>';
    echo $row["BookName"];
    echo '</h1></b></p>
        <p class="text-muted" style="font-size: 20px;margin-top: -0.25cm;">Author: ';
        if($row["AuthorID"]==1){
          echo $authorName[$row["AuthorID"]]['AuthorName'];}
          else{echo $authorName[$row["AuthorID"]-1]['AuthorName'];}
        echo'</p>
        <p class="text-muted" style="font-size: 20px;margin-top: -0.25cm;">Genre: ';
        echo $row["BookGenre1"];
        echo'</p>
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
    <div class="card" style="margin: 0.5cm;width: 95%;margin-top: -0.3cm;">
        <form action="/action_page.php">
            <p style="font-size: 25px; margin: 0.5cm; margin-top: -0.1cm;">Quantity</p>
            <input type="number" id="quantity" name="quantity" min="1" max="50" style="margin: 0.5cm;margin-top: -1.5cm;">
            <input type="submit" value="Add to cart" onclick="addCart($row["BookID"])"style="background: red; color: white; font-size: 20px;margin-top: -1.5cm;">
          </form>
    </div>



  </div>
</div> 

</div>';
  }
}
                 
          
?>

</div>
<?php include "Footer.php"?>

</body>
</html>




  

