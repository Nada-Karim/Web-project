

 <?php
session_start();
$conn = mysqli_connect('localhost','root','','bookstore');

$check = true;


$con = new PDO("mysql:host=localhost;dbname=bookstore",'root','');

if (isset($_POST["submit_search"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT  `BookName` FROM `books` WHERE BookName  like  '%$str%';");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
 
    
    ?>
		<br><br><br>
	 
				<?php
        header( "Location:search_shop.php?user=" .$str);
        


        if (isset($_SESSION['UserID']))
{
  echo ' 
  <li class="nav-item dropdown nav-link dropdown-toggle">
 
    <img src="pics/icons8-male-user-100.png" style="height: 40px;">
   
    <ul class="dropdown-menu" style=" background-color: hsl(113,96%,9%);">
    <li><a class="dropdown-item" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#myModal4" >Log Out</a></li>
   

  </ul>
</li>
';
}
        ?>
			

	
<?php 
	}
		
		
		else{
      echo "<script>alert('Book Doesn't Exist');</script>";
		}


}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js.map"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/Web.css" />
  <link rel="stylesheet" href="css/Wishlist.css">
  <link rel="stylesheet" href="css/Nav.css">
  <link rel="stylesheet" href="css/CartButton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>





<style>



/* bedayet el nav bar*/ 
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
    /**bedayt style bta3 flip card bta3 login wl sign up */

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

    
    .card-back {
      width: 100%;
      height: 100%;
      background-color: #fff;

      background-position: bottom center;
      background-repeat: no-repeat;
      background-size: 100%;
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



    .card-front{
      width: 100%;
      height: 100%;
      background-color: #fff;
align-content: stretch;
      background-position: bottom center;
      background-repeat: no-repeat;
      background-size: 500px;
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
      
     
     
      margin-top:70px;
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



    .form-styles {
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

    .form-styles:focus,
    .form-styles:active {
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


    .btn:active,
    .btn:focus {

      color: #ffeba7;

    }

    .column {

      display: flex;
      height: 300px;
      min-width: fit-content;
      max-width: max-content;


    }


      /**nehayet style bta3 flip card bta3 login wl sign up */


      /** bedayet styles bta3t kul el modals (sign up/login/cart bta3t nada el sughanona etc) */
    .modal .modal-dialog.modal-top-right {
      top: 10px;
      right: 10px
    }

    .modal .modal-side {
      position: absolute;
      right: 10px;
      bottom: 10px;
      width: 400px;
      margin: 0
    }

    .modal-dialog,
    .modal-content {
      height: 99%;
    }

    .modal.fade.right:not(.show) .modal-dialog {
      transform: translate3d(25%, 0, 0);
    }


/** nehayet styles bta3t kul el modals (sign up/login/cart bta3t nada el sughanona etc) */





/** bedayet style el button bta3 logout */
#myBtn {
 background:url('https://dh3vbjnk0bnfa.cloudfront.net/static/centralauth/images/btn-login-hover.png') no-repeat 5px 5px hsl(113,94%,9%);
  width: 100px;
  cursor:pointer;
  border-radius:50px;
  padding:10px 20px 10px 0;
  color:White;
  font-size:14px;
  text-align:left;
  text-indent:40px;
  display:block;
  margin:0 auto;
 
  /* Animations: */
  -webkit-transition-timing-function: ease-in-out;
  -webkit-transition-duration: .4s;
  -webkit-transition-property: all;
  
  -moz-transition-timing-function: ease-in-out;
  -moz-transition-duration: .4s;
  -moz-transition-property: all;
}

#myBtn:hover {
  background-image: url( 'https://dh3vbjnk0bnfa.cloudfront.net/static/centralauth/images/btn-login.png' );
  background-position: 65px 5px;
  text-indent: 15px;  
}
/** nehayet style el button bta3 logout */





/**style el log out modal*/
.modals2 {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: auto;
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  padding: 1.6rem 3rem;
  border: 3px 	rgba(4,25,1,1.000);
  border-radius: 5px;
  background: hsl(113,94%,9%);

}
.message {
  font-size:1.1rem;
  margin-bottom: 1.6rem;
  margin-top: 0;
  color:white;
}
#yes,#no {
  color:inherit;
    font-family:inherit;
  font-size: inherit;
  background: white;
  padding: 0.3rem 3.4rem;
  border: 3px solid black;
  margin-right: 2.6rem;
  box-shadow: 0 0 0 black;
  transition: all 0.2s;
}

#yes:last-child {
  margin: 0;
}
#no:last-child {
  margin: 0;
}
#yes:hover {
  box-shadow: 0.4rem 0.4rem 0 black;
  transform: translate(-0.4rem, -0.4rem);
}
#no:hover {
  box-shadow: 0.4rem 0.4rem 0 black;
  transform: translate(-0.4rem, -0.4rem);
}
#no:active {
  box-shadow: 0 0 0 black;
  transform: translate(0, 0);
}
#yes:active {
  box-shadow: 0 0 0 black;
  transform: translate(0, 0);
}
.options {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}


/* nehayet el logout modal style*/

</style>

  
  <body>
   
  
  <!-- bedayet el nav bar-->

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

          <a  style="color:hsl(113, 74%, 9%); padding-right:30px;" href="index.php" role="button">Home</a>



         
            <a  style="color:hsl(113, 74%, 9%); padding-right:30px;" href="shop.php"
              role="button">Shop</a>



       




          


        </ul>
      </div>
    </div>
    <script>


      function myfunc() {

        if (document.getElementById("d1").style.visibility == "visible") {
          document.getElementById("d1").style.visibility = "hidden";
        }
        else
          document.getElementById("d1").style.visibility = "visible";
      }


    </script>
    
   
   
    <form method="post">
<h6 id="d1">

      <div class="form-outline">
     
        <ul class="navbar-nav">
          <input type="text"  name="search" class="form-control" placeholder=" Search Books!"  style="width:300px;"  />
          <input type ="submit"  name ="submit_search" value ="Go!" style="background-color:hsl(113,74%,9%); color: #fff;">
    
    
        </ul>

      </div>
    </h6>	



</form>






<!-- icon el search-->

    <button class="btn btn-default" onclick="myfunc()">
      <img src="pics/output-onlinegiftools.gif" style="height: 30px;">
    </button>
    <div>
    </div>


    
<!-- hata el php bta3 login wl sign up hena ashan lama yedkhul ye3adel fl icon bta3 el user-->

<?php
$n = 0;
$q = 0;
$check = true;
if(isset($_POST['submit_login'])){

  $email = mysqli_real_escape_string($conn, $_POST['email_login']);
  $pass = ($_POST['password_login']);


  $select = "SELECT  `UserID`,`UserPassword`, `UserEmail` FROM `user` WHERE UserPassword='$pass' && UserEmail='$email'; ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) != 0){

     $row = mysqli_fetch_array($result);
   
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['UserID'] = trim($row['UserID']);
    $user_id = $_SESSION['UserID'];



    $Update7 = " SELECT `WishlistID` FROM `wishlist` WHERE `UserID` =".$row['UserID'].";";
    $result5= mysqli_query($conn, $Update7);
    $row6 = mysqli_fetch_array($result5);

    $Update8 = " SELECT `CartID` FROM `cart` WHERE `UserID` =".$row['UserID'].";";
    $restult6= mysqli_query($conn, $Update8);
     $row7 = mysqli_fetch_array($restult6);

     $_SESSION['CartID'] = trim($row7['CartID']);
     $_SESSION['WishlistID'] = trim($row6['WishlistID']);


    echo $_SESSION['CartID'] . $_SESSION['WishlistID'];
    $n = 1;
  }
  else if(mysqli_num_rows($result)==0){
     $error[] = 'incorrect email or password!';
  }

};

$_SESSION['flag']=$n;
if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = ($_POST['password']);
  $cpass = ($_POST['cpassword']);


{

     if($pass != $cpass){
        $error[] = 'password not matched!';
     }else{
        $insert = "INSERT INTO user(UserName, UserEmail, UserPassword) VALUES('$name','$email','$pass')";

        mysqli_query($conn, $insert);
      
  

        $select = "SELECT `UserID` from user where `UserName` = '$name' && `UserEmail` = '$email';";
   
         $result = mysqli_query($conn, $select);
         $row = mysqli_fetch_array($result);
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['UserID'] = trim($row['UserID']);
         $user_id = $_SESSION['UserID'];
         $n = 1;
         $_SESSION['flag']='1';
        $Update = " INSERT INTO cart(UserID) VALUES(".$row['UserID'].")";
        mysqli_query($conn, $Update);

        $Update2 = " INSERT INTO wishlist(UserID) VALUES(".$row['UserID'].")";
        mysqli_query($conn, $Update2); 


        
        //ageb el wishlist id w ahutu fl user w ahiti fl session andy
        $Update3 = " SELECT `WishlistID` FROM `wishlist` WHERE `UserID` =".$row['UserID'].";";
        $res= mysqli_query($conn, $Update3);
        $row2 = mysqli_fetch_array($res);
       
        $Update4 = "UPDATE `user` SET `WishID`= ".$row2['WishlistID']." WHERE `UserID` =".$row['UserID'].";";
        mysqli_query($conn, $Update4);  

       // ageb el cart id w ahutu fl user w ahutu fl session andy ashan yetshaf 
        $Update5 = " SELECT `CartID` FROM `cart` WHERE `UserID` =".$row['UserID'].";";
        $rest= mysqli_query($conn, $Update5);
         $row3 = mysqli_fetch_array($rest);
      

        $Update6 = "UPDATE `user` SET `CartID`= ".$row3['CartID']." WHERE `UserID` =".$row['UserID'].";";
        mysqli_query($conn, $Update6);  

        $_SESSION['CartID'] = trim($row3['CartID']);
        $_SESSION['WishlistID'] = trim($row2['WishlistID']);
      echo $_SESSION['CartID'] . $_SESSION['WishlistID'];
        
     }
  }
  
};
$s = 1;

if ($_SESSION['UserID']!="Null"&& $_SESSION['CartID']!="Null"&& $_SESSION['WishlistID']!="Null" ) {
  echo ' 
  <li class="nav-item dropdown nav-link dropdown-toggle">
 
    <img src="pics/icons8-male-user-100.png" style="height: 40px;">
   
    <ul class="dropdown-menu" style=" background-color: hsl(113,96%,9%);">
    <li><a class="dropdown-item" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#myModal4" >Log Out</a></li>
   

  </ul>
</li>

';
  $q = 1;

}


else if($q==0){
  echo ' <button class="btn btn-default"  data-bs-toggle="modal" data-bs-target="#myModal2">
  <img src="pics/icons8-male-user-100.png" style="height: 40px;"  >

</button>';


}





if (isset($_POST['yes'])) {

  $_SESSION['UserID']="Null";
  $_SESSION['CartID']="Null";
  $_SESSION['WishlistID']="Null";
  
   
    echo ' <button class="btn btn-default"  data-bs-toggle="modal" data-bs-target="#myModal2">
    <img src="pics/icons8-male-user-100.png" style="height: 40px;"  >
  
  </button>';

  $flag = 1;
  
  }











?>
    

<!-- icon el wishlist wl cart-->

    <a href="Wishlist.php">
      <button class="btn btn-default">
        <img src="pics/wishlist.png" style="height: 30px;">

      </button></a>
    <button class="btn btn-default" data-bs-toggle="modal" data-bs-target="#myModal">
      <img src="pics/empty-cart.png" style="height: 30px;" />
    </button>


  </nav>




  
   <?php
   if(isset($error)){
      foreach($error as $error){
        echo "<script>alert('$error');</script>";
      };
   };
   ?>



<!-- dah el asly bta3yy modal 2 bta3 login wsignup!!-->
    <div class="modal fade" id="myModal2" style="height:600px; padding-top: 100px; " >
      <div class="modal-dialog  modal-dialog-scrollablet">
        <div class="modal-content">

          <div class="row full-height ">
            <div class="col-12 text-center align-left py-5">
              <div class="section pb-5 pt-5 pt-sm-2">
                <h6 class="mb-0 pb-3" style="padding-bottom:90px"><span>Log In </span><span>Sign Up</span></h6>
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                <label for="reg-log"></label>
                <div class="card-3d-wrap mx-auto">
                  <div class="card-3d-wrapper">

                 
                  <div class="card-front"  style="top:-25px ; width: 300px;">
                      <div class="center-wrap">
                        <div class="section">
                          
                        <form action="" method="post">
                    <div class="form-group mt-2">     
                  
                    <input type="email"   class="form-style" name="email_login" required placeholder="enter your email" style="color:#fff">
                   </div>
  <div class="form-group mt2">
                    <input type="password"  class="form-styles" name="password_login" required placeholder="enter your password" style="color:#fff;">
  </div>
               
  <div style="padding-bottom:90px;"></div>
      <input type="submit" name="submit_login"  class="form-btn mt-2" value="Submit" style=" background-color: #fff;" onmouseover="this.style.backgroundColor='hsl(113, 74%, 9%)'" onmouseover="this.style.Color='#fff'"
      onmouseleave="this.style.backgroundColor='#fff'"  onmouseleave="this.style.Color='hsl(113, 74%, 9%)'"  
                           > 
                    
  
                           </form> 

                        </div>
                      </div>
                    </div>
                   
                   
                    
                    <div class="card-back">
                      <div class="center-wrap">         
           <div class="section text-center">

         
     <form action="" method="post">    

     <div class="form-group mt-2"> 
      <input type="text" name="name"  class="form-styles" required placeholder="enter your name" style="color:#fff">
     </div>
     <div class="form-group mt-2"> 
      <input type="email" name="email"   class="form-styles" required placeholder="enter your email" style="color:#fff">
     </div>
     <div class="form-group mt-2"> 
      <input type="password" name="password"  class="form-styles" required placeholder="enter your password" style="color:#fff">
     </div>
     <div class="form-group mt-2"> 
      <input type="password" name="cpassword"  class="form-styles" required placeholder="confirm your password" style="color:#fff">
     </div>
      <input type="submit" name="submit" id="myBtn2" value="Submit" class="form-btn mt-2"  style=" background-color: #fff;" onmouseover="this.style.backgroundColor='hsl(113, 74%, 9%)'" onmouseover="this.style.Color='#fff'"
      onmouseleave="this.style.backgroundColor='#fff'"  onmouseleave="this.style.Color='hsl(113, 74%, 9%)'"  >
      
     
      </form> 
                   
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






  

<style>





/* The Close Button */
.close {
 
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
 
  text-decoration: none;
  cursor: pointer;
}
</style>







<!-- modal bta3 el account created ele msh arfa ashaghlha lol-->

  <div class="modal fade" id="myModal3" style="height:600px; padding-top: 100px;">
    <div class="modal-dialog  modal-dialog-scrollablet">
      <div class="modal-content">
  <div id='card' class="animated fadeIn" >
    <div id='upper-side'>
      <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
          <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
    c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
    c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
    c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
    c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
    c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
    C131.967,94.755,132.296,93.271,131.583,92.152z" />
          <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
        </svg>
        <h3 id='status'>
        Success
      </h3>
    </div>
    <div id='lower-side'>
      <p id='message'>
        Congratulations, your account has been successfully created.
      </p>
      <a href="try.php" id="contBtn">Done</a>
    </div>
  </div>
</div>
</div>
</div>



<!-- The Modal 4 bta3 el logout!! -->




<div class="modal fade" id="myModal4"  style=" height:250px;">
<div class="modal-dialog  modal-dialog-scrollablet" style="background-color: hsl(113,96%,9%);" >



  <!-- Modal content -->
  <div class="modal-content" style="background-color: hsl(113,96%,9%);" >
  <div class="modals2">
  <span class="close">&times;</span>
  <p class="message">Are you sure you want to log out?</p>
  <div class="options">
    <form action="" method="post"><button class="btn" type="submit" id="yes" name="yes">yes</button></form>
    <button class="btn" id="no">no</button>
  </div>
</div>


  </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal4");

var yes = document.getElementById("yes");
var no = document.getElementById("no");
var modals = document.getElementById("myModal3");
var btns = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];



btns.onclick = function() {
  modals.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}
no.onclick = function() {

  $('#myModal4').modal('hide');

}

yes.onclick = function() {
modal.style.display ="none";
location.href = "http://localhost/Project%20workspace/Project%20workspace/index.php";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<!-- nehayet el nav bar bl login wl sign up wl log out wl search-->





<!-- hoty hena el cart modal bta3ek baa-->

  <!-- The Modal -->
  <div class="modal fade right" id="myModal">
   
      <div class="modal-dialog  modal-dialog-scrollable modal-side modal-top-right" style="width:1250px;">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title"><i class="fa-solid fa-cart-shopping"></i> Cart</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body modal-full">
            <table class="table">
              <?php
              include "config.php";

              $TotalPrice = 0;

              // Sql query to be executed
              $sql = "SELECT books.BookID,books.BookName,books.BookPrice,books.BookImg,BookCart.Quantity, bookcart.BookCartID  FROM ((books INNER JOIN BookCart ON BookCart.BookID = books.BookID) INNER JOIN cart on BookCart.CartID=cart.CartID&&cart.CartID=".$_SESSION['CartID'].");";

              $result = mysqli_query($conn, $sql);

              // Add a new trip to the Trip table in the database
              if (mysqli_num_rows($result) > 0) {

                echo '<thead>
          <tr class=" justify-content-between">
            <th scope="col " class="h5 pt-2">Books</th>
            <th scope="col "> Name</th>
            <th scope="col " class="px-5">Quantity</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
            <th scope="row">
              <div class="d-flex align-items-center">
              <img src="' . $row["BookImg"] . '" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
              <div class="flex-column ms-4">
                  <p class="mb-2">' . $row["BookName"] . '</p>

                </div>
              </div>
            </th>
            <td class="align-middle">

            </td>
            <td class="align-middle">
              <div class=" d-flex flex-row px-5">
                

                <input id="' . $row["BookCartID"] . '1" min="0" name="quantity" value="' . $row["Quantity"] . '" onchange="myFun(' . $row["BookCartID"] . ')" type="number"
                  class="form-control form-control-sm" style="width: 50px; " />

                
              </div>
            </td>
            <td class="align-middle">
              <p class="mb-0" style="font-weight: 500;">' . $row["BookPrice"] * $row["Quantity"] . ' EGP</p>
            </td>
          </tr>';

                  $TotalPrice += ($row["BookPrice"] * $row["Quantity"]);
                }

                echo ' </tbody>
                </table>
                </div> 
                <!-- Modal footer -->
                <div class="modal-footer  justify-content-between">
             

                  <h3>Total Price:</h3>
                  <h3>' . $TotalPrice . ' EGP</h3>
                  
                  <div class="d-grid gap-2  col-12 ">
                  <a href="CartPage.php">
                    <span class="cart__button btn btn-outline-success w-100 ">
                      <span class="add__to-cart">View Cart</span>
                      <span class="added">View Cart</span>
                      <i class="fas fa-shopping-cart"></i>
                    </span>
                  </a>
                  
                  <a href="CheckOut.php">
                    <span class="cart__button btn btn-outline-success w-100 ">
                      <span class="add__to-cart" >Check Out</span>
                      <span class="added">Check Out</span>
                      <i class="fas fa-box"></i>
                    </span>
                  </a>';



              } else {

                echo '<div class="offset-lg-3 col-lg-6 col-md-12 col-12 text-center">
            <img src="pics/empty cart.webp" alt="" class="img-fluid mb-4">
            <h2>Empty cart</h2>

         
        </div>';
                echo ' </tbody>
          </table>
          </div> 
          <!-- Modal footer -->
          <div class="modal-footer  justify-content-between">
          <h3>Total Price:</h3>
          <h3>' . $TotalPrice . ' EGP</h3>
            <div class="d-grid gap-2  col-12 ">
            <a href="CartPage.php">
              <span class="cart__button btn btn-outline-success w-100 ">
                <span class="add__to-cart">View Cart</span>
                <span class="added">View Cart</span>
                <i class="fas fa-shopping-cart"></i>
              </span>
            </a>
            
  ';




              }
              ?>



          </div>
        </div>
      
    </div>
  </div>
  </div>

  <script>
    const cartButton = document.querySelectorAll(".cart__button");
    cartButton.forEach((button) => {
      button.addEventListener("click", cartClick);
    });

    function cartClick() {
      let button = this;
      button.classList.add("clicked");
    }

  </script>









</body>
</html>
