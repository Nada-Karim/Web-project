
<?php   include "navbar.php";

?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="refresh" content="30">
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js.map"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/Web.css" />
  <link rel="stylesheet" href="css/Wishlist.css">
  <link rel="stylesheet" href="css/Nav.css">
  <link rel="stylesheet" href="css/CartButton.css">


</head>

<body>

  <div class="cart-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main-heading mb-10">My wishlist</div>
          <div class="table-wishlist">
            <table cellpadding="0" cellspacing="0" width="100%">
              <thead>



                <?php

                include "config.php";


                // Sql query to be executed
                $sql = "SELECT books.BookID, books.BookName,books.BookPrice,books.BookImg,books.BookQuantity,wishbook.WishBookID FROM ((books INNER JOIN WishBook ON WishBook.BookID = books.BookID) INNER JOIN wishlist on WishBook.WishlistID=wishlist.WishlistID&&wishlist.WishlistID=".$_SESSION['WishlistID'].");";
                $result = mysqli_query($conn, $sql);

                // Add a new trip to the Trip table in the database
                if (mysqli_num_rows($result) > 0) {
                  echo '<tr>
                  <th width="45%">Product Name</th>
                  <th width="15%">Unit Price</th>
                  <th width="15%">Stock Status</th>
                  <th width="15%"></th>
                  <th width="10%"></th>
                  </tr>
                  </thead>
                  <tbody>';
                  while ($row = mysqli_fetch_assoc($result)) {

                    if ($row["BookQuantity"] > 0) {
                      $stock = "In Stock";
                      $stockClass = "in-stock-box";

                    } /* else if (($row["BookQuantity"] < 10)&&($row["BookQuantity"] > 0)) {
                     $stock="Low Stock";
                     $stockClass = "low-stock-box";
                     }*/else {
                      $stock = "Out of Stock";
                      $stockClass = "out-stock-box";

                    }
                    echo '<tr>
                    <td width="45%">
                      <div class="display-flex align-center">
                        <div class="img-product">
                        <img src="' . $row["BookImg"] . '" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                        </div>
                        <div class="name-product">
                          ' . $row["BookName"] . '
                        </div>
                      </div>
                    </td>
                    <td width="15%" class="price">' . $row["BookPrice"] . ' EGP</td>
                    <td width="15%"><span class="' . $stockClass . '">' . $stock . '</span></td>';
                    if ($row["BookQuantity"] == 0){ 
                     echo' <td width="15%"><div class="round-black-btn small-btn" style="background:hsl(113, 74%, 9%);; color:#fff;" disabled>Add to Cart</div></td>';
                   
                    } else{
                      echo'<td width="15%"><button class="round-black-btn small-btn" onclick=addCart(' . $row["BookID"] . ',' . $row["WishBookID"] . ') >Add to Cart</button></td>';
                    }
                    
                     echo'<td width="10%" class="text-center">  <a href="#" " class="heart-icon el" onclick=removeBook(' . $row["WishBookID"] . ')><i
                          class="fa-solid fa-heart"></i></a></td>
                  </tr>';

                  }


                } else {
                  echo '<div class="offset-lg-3 col-lg-6 col-md-12 col-12 text-center">
                  <img src="pics/wishlist empty.webp" alt="" class="img-fluid mb-4">
                  <h2>Empty Wishlist
                  </h2>
      
               
              </div>';
                }



                ?>




                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<footer class="text-center text-lg-start bg  text-muted">

  <script>
    n=3;
    function removeBook(WishBookID) {

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "remove.php?w=" + WishBookID, true);
      xmlhttp.send();
     window.top.location = window.top.location;
     window.location.reload(true);

    }

    function addCart(bookID, WishBookID) {

      //console.log(n);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "addcart.php?b=" + bookID, true);
      xmlhttp.send();



      var xmlhttp1 = new XMLHttpRequest();
      xmlhttp1.open("GET", "remove.php?w=" + WishBookID, true);
      xmlhttp1.send();
      window.location.reload(true);
     
       }


    

  </script>

  </section>
  <!-- Section: Social media -->
  <?php include "Footer.php" ?>
<!-- Footer -->

</html>