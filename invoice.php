<?php include "navbar.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js.map"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
</head>

<Body>

  <script>
    var curday = function () {
      today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1; //As January is 0.
      var yyyy = today.getFullYear();

      if (dd < 10) dd = '0' + dd;
      if (mm < 10) mm = '0' + mm;


      return (mm + "/" + dd + "/" + "/" + yyyy);
    };
    document.getElementById("date").innerHTML = curday();

  </script>
  <?php include "config.php";
  $AddOrder = "INSERT INTO `orders`( `CartID`, `BookID`) SELECT CartID,BookID from bookcart WHERE CartID=" . $_SESSION['CartID'] . ";";
  mysqli_query($conn, $AddOrder);
  $Total = 0;
  $tt = "SELECT books.BookPrice, BookCart.Quantity FROM (((books INNER JOIN BookCart ON BookCart.BookID = books.BookID) INNER JOIN cart on BookCart.CartID=cart.CartID&&cart.CartID=" . $_SESSION['CartID'] . ") INNER JOIN author on books.AuthorID=author.AuthorID);";
  $tp = mysqli_query($conn, $tt);
  while ($row = mysqli_fetch_assoc($tp)) {
    $Total += $row["BookPrice"] * $row["Quantity"];
  }

  $DeleteCart = "DELETE FROM `bookcart` WHERE CartID=" . $_SESSION['CartID'] . ";";
  mysqli_query($conn, $DeleteCart);
  $UserName = "Select UserName FROM `user` WHERE UserID=" . $_SESSION['UserID'] . ";";
  $UN = mysqli_query($conn, $UserName);
  $Name = mysqli_fetch_assoc($UN);
  $n = strtoupper($Name["UserName"]);

  $selectOrder = "Select OrderID FROM `orders` WHERE CartID=" . $_SESSION['CartID'] . ";";
  $ON = mysqli_query($conn, $selectOrder);
  $OrderNum = mysqli_fetch_assoc($ON);

  


  $TotalShipp = $Total + 40;
  echo '<div class="card" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle  ">
    <div class="card-body mx-4">
      <div class="container">
        <p class="my-5 mx-5 py-4 text-center" style="font-size: 30px; ">THANK YOU ' . $n . ' !</p>
        <div class="row">
          <ul class="list-unstyled">
            <li class="text-muted mt-1"><span class="text-black">Invoice</span> #'.$OrderNum["OrderID"].'</li>
            <li class="text-black mt-1" ><p id ="date"></p></li>
          </ul>
          <hr>
          <div class="col-xl-10">
            <p>Order Price</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">'.$Total.' EGP
            </p>
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-xl-10">
            <p>Shipping</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">40.00 EGP
            </p>
          </div>
          <hr>
        </div>
        
        
        </div>
        <div class="row text-black">

          <div class="col-xl-12">
            <p class="float-end fw-bold">Total: '.$TotalShipp.' EGP
            </p>
          </div>
          <hr style="border: 2px solid black;">
        </div>


      </div>
    </div>
  </div>';


  ?>
  <?php include "Footer.php"; ?>
</Body>

</html>