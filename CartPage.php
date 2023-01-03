
<?php   include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cart</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js.map"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/Web.css" />
  <link rel="stylesheet" href="css/Nav.css" />
  <link rel="stylesheet" href="css/CartButton.css" />


  <style>
    .trash-icon {
      font-size: 20px;
      color: #054205;
      ;
    }

    .trash-icon:hover,
    .trash-icon:focus {

      color: #000;
    }
  </style>
</head>

<body>
  



  <!--cart Page begins-->

  <?php



  // Create a connection
  
  include "config.php";

  $TotalPrice = 0;

  // Sql query to be executed
  $sql = "SELECT books.BookID,books.BookName,books.BookPrice,books.BookHardCover,books.BookImg,BookCart.Quantity,author.AuthorName, bookcart.BookCartID FROM (((books INNER JOIN BookCart ON BookCart.BookID = books.BookID) INNER JOIN cart on BookCart.CartID=cart.CartID&&cart.CartID=".$_SESSION['CartID'].") INNER JOIN author on books.AuthorID=author.AuthorID);";

  $result = mysqli_query($conn, $sql);

  // Add a new trip to the Trip table in the database
  if (mysqli_num_rows($result) > 0) {
    echo ' <section class="h-100 ">
                  <div class="container h-100 py-5">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col">
              
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" class="h3">Shopping Cart</th>
                                <th scope="col"> Format</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col"><i class="fa-solid fa-trash"></i></th>
                              </tr>
                            </thead>
                            <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
      echo '   <tr>
                    <th scope="row">
                      <div class="d-flex align-items-center">

                      <img src="' . $row["BookImg"] . '" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                       
                        
                      <div class="flex-column ms-4">
                          <p class="mb-2">' . $row["BookName"] . '</p>
                          <p class="mb-0">' . $row["AuthorName"] . '</p>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle">
                      <p class="mb-0" style="font-weight: 500;">' . $row["BookHardCover"] . '</p>
                    </td>
                    <td class="align-middle">
                      <div class="d-flex flex-row">
                        <button class="btn   px-2"  onclick="this.parentNode.querySelector(`input[type=number]`).stepDown(); myFunction(' . $row["BookCartID"] . ');" >
                        <i class="fas fa-minus text-success"></i>
                          <!--<input type="submit"style="font-weight: 500; font-size: 65px;font-align:center;background-color:white; border-color:white ;height :5" name="button1" value="-"/>-->
                        </button>
  
                        <input id="' . $row["BookCartID"] . '" min="0" name="quantity" value="' . $row["Quantity"] . '" type="number" onchange="myFunction(' . $row["BookCartID"] . ')"
                          class="form-control form-control-sm" style="width: 50px;" />
  
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector(`input[type=number]`).stepUp(); myFunction(' . $row["BookCartID"] . ');">
                          <i class="fas fa-plus text-success"></i>
                        </button>
                      </div>
                    </td>
                    <td class="align-middle">
                      <p class="mb-0" style="font-weight: 500;">' . $row["BookPrice"] * $row["Quantity"] . ' EGP</p>
                    </td>
                    <td class="align-middle">
                    <a href="#" " class="trash-icon " onclick=removeBook(' . $row["BookCartID"] . ') ><i class="fa-solid fa-trash"></i></a></td>
                  </tr>';
      $TotalPrice += ($row["BookPrice"] * $row["Quantity"]);
    }
    echo '</tbody>

                  </table>
                </div>
      
                <p class="mb-0 colspan-12 text-end" style="font-weight: 500; font-size: x-large;"> Total: ' . $TotalPrice . ' EGP </p>
                   <a href="CheckOut.php" class="text-reset text-decoration-none"> <button
              class="w-100  tc btn-color btn btn-lg " type="submit">Continue to checkout</button></a>
        </div>
      </div>
    </div>
    </div>
    </div>';

  } else {
    echo '<div class="offset-lg-3 col-lg-6 col-md-12 col-12 text-center">
    <img src="pics/empty cart2.gif" alt="" class="img-fluid mb-4">
    <h2>Your shopping cart is empty</h2>
    <p class="mb-4">
        Return to the store to add items for your delivery slot. Before proceed to checkout you must add some products to your shopping cart. 
    </p>
    <a href="#" class="btn   tc btn-color btn btn-lg">Go Back to store</a>
</div>';
  }



  ?>


  <script>
    function removeBook(BookCartID) {

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "CartBackEnd.php?r=" + BookCartID, true);
      xmlhttp.send();
      window.top.location = window.top.location;
      window.location.reload(true);

    }


    function myFunction(BookCartID) {
      var q = document.getElementById(BookCartID).value;
      if (q == 0) {
        removeBook(BookCartID);
      } else {
        console.log(BookCartID, q);
        var xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.open("GET", "updateQ.php?u=" + BookCartID + "&q=" + q, true);
        xmlhttp2.send();
        window.location = window.location;
        window.location.reload(true);

      }
    }

    function myFun(BookCartID) {
      var q = document.getElementById(BookCartID + "1").value;
      if (q == 0) {
        removeBook(BookCartID);
      } else {
        console.log(BookCartID, q);
        var xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.open("GET", "updateQ.php?u=" + BookCartID + "&q=" + q, true);
        xmlhttp2.send();

        window.top.location = window.top.location;
        window.location.reload(true);
        //$(document).ready(function(){ $("#QT").modal()});
      }
    }
  </script>
  <!--cart ends-->
  </section>
  <?php include "Footer.php" ?>
</body>

</html>