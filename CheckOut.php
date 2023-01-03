<?php   include "navbar.php";?>
<!doctype html>
<html lang="en">

<head>



  <title>Checkout</title>



  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Custom styles for this template -->
  <style>
    .btn-color {
      --bs-btn-color: #fff;
      --bs-btn-bg: hsl(113, 74%, 9%);
      --bs-btn-border-color: hsl(113, 74%, 9%);
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #042114;
      --bs-btn-hover-border-color: #030b08;
      --bs-btn-focus-shadow-rgb: 60, 153, 110;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #030b08;
      --bs-btn-active-border-color: #13653f;
      --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: hsl(113, 74%, 9%);
      --bs-btn-disabled-border-color: #000;

    }
  </style>
</head>

<body class="bg-light">
 
  <?php $Total = 0; ?>

    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="icons/books.gif" alt="" width="72" height="57">
          <h2>Checkout </h2>
        </div>
        <?php
        echo '<div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="textG">Your cart </span>  
            <span><i class="fa-solid fa-cart-shopping"></i></span>
            </h4>
            <div style="overflow:scroll;  overflow-x: hidden; max-height:580px;>
            <ul class="list-group mb-3">
            ';


        include "config.php";
        $sql = "SELECT books.BookID,books.BookName,books.BookPrice,books.BookHardCover,books.BookImg,BookCart.Quantity,author.AuthorName, bookcart.BookCartID FROM (((books INNER JOIN BookCart ON BookCart.BookID = books.BookID) INNER JOIN cart on BookCart.CartID=cart.CartID&&cart.CartID=" . $_SESSION['CartID'] . ") INNER JOIN author on books.AuthorID=author.AuthorID);";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

          echo '<li class="list-group-item d-flex  lh-sm ">
              <img class=" rounded" src="' . $row["BookImg"] . '"  alt="" style="width:20% ;height:auto;">
              <div>
              <h5 class="my-0 px-4">' . $row["BookName"] . '</h5>
              <small class="text-muted px-4">Quantity: ' . $row["Quantity"] . '</small>
              </div>
              <span class="text-muted  text-end">' . $row["BookPrice"] . ' EGP</span>
              </li>
               <hr class="my-4">';
          $Total += $row["BookPrice"] * $row["Quantity"];

        }

        echo '  </div>
      <li class="list-group-item d-flex justify-content-between bg-light">
      
              
             </li>
             <li class="list-group-item d-flex justify-content-between">
            <span>Total </span>
            <strong>' . $Total . ' EGP</strong>
            </li>
            </ul>';
        ?>


    </div>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate method="POST" action="">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>


          <div class="col-12">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.

            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12">
            <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" required>
              <option value="">Choose...</option>
              <option>Egypt</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <select class="form-select" id="state" required>
              <option value="">Choose...</option>
              <option>Giza</option>
              <option>October</option>
              <option>Cairo</option>
              <option>Alexandria</option>
              <option>Portsaid</option>
              <option>Gouna</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>



        <hr class="my-4">

        <h4 class="mb-3">Payment</h4>

        <div class="my-3">
          <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="credit">Credit card</label>
          </div>
          <div class="form-check">
            <input id="cash" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="debit">Cash</label>
          </div>
          <div class="form-check">
            <input id="Walllet" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="debit">Walllet</label>
          </div>

        </div>
        <div class="formCC"></div>

        <hr class="my-4">

        <button class="w-100  tc btn-color btn btn-lg mb-2 " type="submit" id="idid" name="ayhaga">

          Continue to checkout <i class="fa-solid fa-cash-register px-3"></i> </button>

      </form>
      <a href="index.php"> <button class="w-100  tc btn-color btn btn-lg ">Go Back To Shopping <i
            class="fa-solid fa-bag-shopping px-3"></i></button></a>

    </div>
    </div>
    </main>


    </div>



  <script>
   function fff() {
      console.log("ok");
     // window.location.href="http://localhost/Project%20workspace/CartPage%20copy.php?paymentMethod=on"; 
    }

  //function someHandlerFunction() {

  //  }

  //  var form = document.getElementById('a');
  // form.addEventListener("submit", someHandlerFunction);


  </script>



  

  <?php include "Footer.php" ?>


  <script src="js/form-validation.js"></script>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>