<?php   include "navbar.php";?>
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

  <style>
    @media only screen and (min-width: 480px) and (max-width: 768px) {}

    @media (min-width: 640px) {
      body {
        font-size: 1rem;
      }
    }

    @media (min-width:960px) {
      body {
        font-size: 1.2rem;
      }
    }

    @media (min-width:1100px) {
      body {
        font-size: 1.5rem;
      }
    }

    html,
    body {
      font-size: 100%;
      height: 100%;
    }

    @keyframes Background {
      100% {
        background-size: 4000px 1000px;
      }

    }



    .image2 {
      width: 100vw;
      height: 100vh;
      min-height: 350px;

      margin: 0;
      position: relative;
      background-color: #111;
      background-image: linear-gradient(to top, #222 5%, #111 6%, #111 7%, transparent 7%), linear-gradient(to bottom, #111 30%, transparent 30%), linear-gradient(to right, #222, #2e2e2e 5%, transparent 5%), linear-gradient(to right, transparent 6%, #222 6%, #2e2e2e 9%, transparent 9%), linear-gradient(to right, transparent 27%, #222 27%, #2e2e2e 34%, transparent 34%), linear-gradient(to right, transparent 51%, #222 51%, #2e2e2e 57%, transparent 57%), linear-gradient(to bottom, #111 35%, transparent 35%), linear-gradient(to right, transparent 42%, #222 42%, #2e2e2e 44%, transparent 44%), linear-gradient(to right, transparent 45%, #222 45%, #2e2e2e 47%, transparent 47%), linear-gradient(to right, transparent 48%, #222 48%, #2e2e2e 50%, transparent 50%), linear-gradient(to right, transparent 87%, #222 87%, #2e2e2e 91%, transparent 91%), linear-gradient(to bottom, #111 37.5%, transparent 37.5%), linear-gradient(to right, transparent 14%, #222 14%, #2e2e2e 20%, transparent 20%), linear-gradient(to bottom, #111 40%, transparent 40%), linear-gradient(to right, transparent 10%, #222 10%, #2e2e2e 13%, transparent 13%), linear-gradient(to right, transparent 21%, #222 21%, #1a1a1a 25%, transparent 25%), linear-gradient(to right, transparent 58%, #222 58%, #2e2e2e 64%, transparent 64%), linear-gradient(to right, transparent 92%, #222 92%, #2e2e2e 95%, transparent 95%), linear-gradient(to bottom, #111 48%, transparent 48%), linear-gradient(to right, transparent 96%, #222 96%, #1a1a1a 99%, transparent 99%), linear-gradient(to bottom, transparent 68.5%, transparent 76%, #111 76%, #111 77.5%, transparent 77.5%, transparent 86%, #111 86%, #111 87.5%, transparent 87.5%), linear-gradient(to right, transparent 35%, #222 35%, #2e2e2e 41%, transparent 41%), linear-gradient(to bottom, #111 68%, transparent 68%), linear-gradient(to right, transparent 78%, #333 78%, #333 80%, transparent 80%, transparent 82%, #333 82%, #333 83%, transparent 83%), linear-gradient(to right, transparent 66%, #222 66%, #2e2e2e 85%, transparent 85%);
      background-size: 300px 150px;
      background-position: center bottom;
    }

    .image2:before {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
      background-color: #111;
      background-image: linear-gradient(to top, #d2b48c 5%, #111 6%, #111 7%, transparent 7%), linear-gradient(to bottom, #111 30%, transparent 30%), linear-gradient(to right, #b22222, #871a1a 5%, transparent 5%), linear-gradient(to right, transparent 6%, #ff6347 6%, #ff3814 9%, transparent 9%), linear-gradient(to right, transparent 27%, #556b2f 27%, #39481f 34%, transparent 34%), linear-gradient(to right, transparent 51%, #fa8072 51%, #f85441 57%, transparent 57%), linear-gradient(to bottom, #111 35%, transparent 35%), linear-gradient(to right, transparent 42%, #008080 42%, #004d4d 44%, transparent 44%), linear-gradient(to right, transparent 45%, #008080 45%, #004d4d 47%, transparent 47%), linear-gradient(to right, transparent 48%, #008080 48%, #004d4d 50%, transparent 50%), linear-gradient(to right, transparent 87%, #789 87%, #4f5d6a 91%, transparent 91%), linear-gradient(to bottom, #111 37.5%, transparent 37.5%), linear-gradient(to right, transparent 14%, #bdb76b 14%, #989244 20%, transparent 20%), linear-gradient(to bottom, #111 40%, transparent 40%), linear-gradient(to right, transparent 10%, #808000 10%, #4d4d00 13%, transparent 13%), linear-gradient(to right, transparent 21%, #8b4513 21%, #5e2f0d 25%, transparent 25%), linear-gradient(to right, transparent 58%, #8b4513 58%, #5e2f0d 64%, transparent 64%), linear-gradient(to right, transparent 92%, #2f4f4f 92%, #1c2f2f 95%, transparent 95%), linear-gradient(to bottom, #111 48%, transparent 48%), linear-gradient(to right, transparent 96%, #2f4f4f 96%, #1c2f2f 99%, transparent 99%), linear-gradient(to bottom, transparent 68.5%, transparent 76%, #111 76%, #111 77.5%, transparent 77.5%, transparent 86%, #111 86%, #111 87.5%, transparent 87.5%), linear-gradient(to right, transparent 35%, #cd5c5c 35%, #bc3a3a 41%, transparent 41%), linear-gradient(to bottom, #111 68%, transparent 68%), linear-gradient(to right, transparent 78%, #bc8f8f 78%, #bc8f8f 80%, transparent 80%, transparent 82%, #bc8f8f 82%, #bc8f8f 83%, transparent 83%), linear-gradient(to right, transparent 66%, #a52a2a 66%, #7c2020 85%, transparent 85%);
      background-size: 300px 150px;
      background-position: center bottom;
      clip-path: circle(150px at center center);
      animation: flashlight 5000ms infinite;
    }

    .image2:after {
      content: '';
      width: 25px;
      height: 10px;
      position: absolute;
      left: calc(50% + 59px);
      bottom: 100px;
      background-repeat: no-repeat;
      background-image: radial-gradient(circle, #fff 50%, transparent 50%), radial-gradient(circle, #fff 50%, transparent 50%);
      background-size: 10px 10px;
      background-position: left center, right center;
      animation: eyes 5000ms infinite;
    }

    @-moz-keyframes flashlight {

      0%,
      9% {
        opacity: 0;
        clip-path: circle(150px at 45% 10%);
      }

      10%,
      15%,
      85% {
        opacity: 1;
      }

      50% {
        clip-path: circle(150px at 60% 20%);
      }

      54%,
      100% {
        clip-path: circle(150px at 55% 92%);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @-webkit-keyframes flashlight {

      0%,
      9% {
        opacity: 0;
        clip-path: circle(150px at 45% 10%);
      }

      10%,
      15%,
      85% {
        opacity: 1;
      }

      50% {
        clip-path: circle(150px at 60% 20%);
      }

      54%,
      100% {
        clip-path: circle(150px at 55% 92%);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @-o-keyframes flashlight {

      0%,
      9% {
        opacity: 0;
        clip-path: circle(150px at 45% 10%);
      }

      10%,
      15%,
      85% {
        opacity: 1;
      }

      50% {
        clip-path: circle(150px at 60% 20%);
      }

      54%,
      100% {
        clip-path: circle(150px at 55% 92%);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @keyframes flashlight {

      0%,
      9% {
        opacity: 0;
        clip-path: circle(150px at 45% 10%);
      }

      10%,
      15%,
      85% {
        opacity: 1;
      }

      50% {
        clip-path: circle(150px at 60% 20%);
      }

      54%,
      100% {
        clip-path: circle(150px at 55% 92%);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @-moz-keyframes eyes {

      0%,
      52% {
        opacity: 0;
      }

      53%,
      87% {
        opacity: 1;
      }

      64% {
        transform: scaleY(1);
      }

      67% {
        transform: scaleY(0);
      }

      70% {
        transform: scaleY(1);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @-webkit-keyframes eyes {

      0%,
      52% {
        opacity: 0;
      }

      53%,
      87% {
        opacity: 1;
      }

      64% {
        transform: scaleY(1);
      }

      67% {
        transform: scaleY(0);
      }

      70% {
        transform: scaleY(1);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @-o-keyframes eyes {

      0%,
      52% {
        opacity: 0;
      }

      53%,
      87% {
        opacity: 1;
      }

      64% {
        transform: scaleY(1);
      }

      67% {
        transform: scaleY(0);
      }

      70% {
        transform: scaleY(1);
      }

      88%,
      100% {
        opacity: 0;
      }
    }

    @keyframes eyes {

      0%,
      52% {
        opacity: 0;
      }

      53%,
      87% {
        opacity: 1;
      }

      64% {
        transform: scaleY(1);
      }

      67% {
        transform: scaleY(0);
      }

      70% {
        transform: scaleY(1);
      }

      88%,
      100% {
        opacity: 0;
      }
    }






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


    .img-hover-zoom {
      /* [1.1] Set it as per your need */
      overflow: hidden;
      /* [1.2] Hide the overflowing of child elements */
      width: min-content;
      height: auto;
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom img {
      transition: transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover img {
      transform: scale(1.2);
    }

    .cards {

      display: flex;
      grid-template-columns: repeat(auto-fit, minimax(3, 1fr));
      gap: 20px;

    }

    .card {
      display: flex;
      height: 300px;
      min-width: fit-content;
      max-width: max-content;
      float: left;
      border-radius: 10px;
      box-shadow: -1rem 0 3rem #000;
      /*   margin-left: -50px; */
      transition: 0.4s ease-out;
      position: relative;

    }

    .card:not(:first-child) {
      margin-left: -10px;
    }

    .card:hover {
      transform: translateY(-20px);
      transition: 0.4s ease-out;
    }

    .card:hover~.card {
      position: relative;
      left: 140px;
      transition: 0.4s ease-out;
    }

    .title {
      color: white;
      font-weight: 300;
      position: absolute;
      left: 20px;
      top: 15px;
    }



    .stroke {
      stroke: white;
      stroke-dasharray: 360;
      stroke-dashoffset: 360;
      transition: 0.6s ease-out;
    }

    .card:hover .stroke {
      stroke-dashoffset: 100;
      transition: 0.6s ease-out;
    }

    .row::after {
      content: "";
      clear: both;
      display: table;
    }


    /footer style/
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


    /* end footer style*/
  </style>
</head>

<body>

  <div class="image2">
  </div>


  
  <h1 style="width: 100%;padding-top: 150px ;padding-bottom: 17px; color: rgb(0, 0, 0); padding-left: 30px;">Best
    Selling
    <div style="align-content: space-between;">
  </h1>
  </div>

<script>
$bookid =0;
  function mm($bookid){
  
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "book_php.php?r=" + bookid , true);
  xmlhttp.send();
    console.log(bookID);
 var link=document.getElementById(bookid);
 link.setAttribute('href',"book_php.php?r=" + bookid );

}</script>




<?php
$row = 512;
echo '
  <div class="cards" >  
    <a href="book.php?r=513"  style="color: black;">
    <div class="card "style="width:400px" >
    <img class="card-img-top" src="pics/becoming.jpg" style="width: 100%; height: 100%;">
    </div>
    </a>
  



    <a href="book.php?r=525"  style="color: black;">
    <div class="card" style="width:400px">

      <img class="card-img-top" src="pics/the night circus.jpg" style="width: 100%; height: 100%;">
    </div>
</a>

<a href="book.php?r=545"  style="color: black;">
    <div class="card"style="width:400px">

      <img class="card-img-top" src="pics/the women could fly.webp"
        style="width: 100%; height: 100%;">
    </div>
</a>

<a href="book.php?r=541"  style="color: black;">
    <div class="card"style="width:400px">

      <img class="card-img-top" src="pics/house of leaves.webp" style="width: 100%; height: 100%;">
    </div>
</a>

<a href="book.php?r=556"  style="color: black;">
    <div class="card"style="width:400px">

      <img class="card-img-top" src="pics/babies around the world.jpg"
        style="width: 100%; height: 100%;">
    </div>
</a>

<a href="book.php?r=520"  style="color: black;">
    <div class="card"style="width:400px">

      <img class="card-img-top" src="pics/tell tale heart.jpg"
        style="width: 100%; height: 100%;">
    </div>
</a>

<a href="book.php?r=547"  style="color: black;">
    <div class="card"style="width:400px">

      <img class="card-img-top" src="pics/bared to you.webp" style="width: 100%; height: 100%;">
    </div>

</a>







  </div>';





  ?>




  <h1 style="width: 100%;padding-top:130px ;padding-bottom: 17px; color: rgb(0, 0, 0); padding-left: 30px;"> Genre
    <div style="align-content: space-between;">
  </h1>
  </div>





  <div class="column">

    <a class="img-hover-zoom"  href="search_genre.php?user=family" style="position:relative; width: 50%;"><img style="width: 110%;aspect-ratio: 16/9;"
        src="pics/comedy transformed.png"  >
       
  </a>

    <a class="img-hover-zoom" href="search_genre.php?user=fantasy" style="position:relative; width: 50%;"><img style="width: 110%;aspect-ratio: 16/9;"
        src="pics/fantasy transformed.png"  >
  </a>

    <a class="img-hover-zoom"  href="search_genre.php?user=Dystopian" style="position:relative; width: 50%;"><img style="width: 110%;aspect-ratio: 16/9;"
        src="pics/sci fi.png">
  </a>

    <a class="img-hover-zoom" href="search_genre.php?user=action" style="position:relative; width: 50%;"><img style="width: 110%;aspect-ratio: 16/9;"
        src="pics/adventure.png">
  </a>

    <a class="img-hover-zoom" href="search_genre.php?user=true crime" style="position:relative; width: 50%;"><img style="width: 110%;aspect-ratio: 16/9;"
        src="pics/drama.png">
    </a>

    <a class="img-hover-zoom" href="search_genre.php?user=?Psychological Thrillers?" style="position:relative; width: 50%;"><img style="width: 110%;aspect-ratio: 16/9;"
        src="pics/thriller.png">
  </a>



  </div>




  <?php   include "Footer.php";?>









</body>

</html>
