<?php



if (isset($_POST['submit'])) {
  header("location:contact2.php");
}
 







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <link rel="stylesheet" href="css/all.min.css"/>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" media="screen and (min-width: 960px)" href="largedevice.css">
<link rel="stylesheet" media="screen and (max-width: 480px)" href="smalldevice.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
<script src="/path/to/cdn/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css"/>
<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



  <style>
    /*contact us style*/
  @import url(https://fonts.googleapis.com/css?family=Dancing+Script:400,700);
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    
    background-color: hsl(113, 74%, 9%);
    color: #b0ce98;
    text-align: center;
    font-family: monospace;
    overflow:scroll;
  
  }
  h1, p {
    margin: 0;
    padding: 0;
  }
  h1 {
    font-size: 2rem;
    font-family: 'Dancing Script';
  }
  small {
    display: block;
    padding: 1rem 0;
    font-size: 0.8rem;
    transition: opacity 0.33s;
  }
  textarea, input, button {
    line-height: 1.5rem;
    border: 0;
    outline: none;
    font-family: inherit;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
  }
  textarea, input {
    color: #4e5e72;
    background-color: transparent;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgb(229, 225, 187)' x='0' y='23' width='10' height='1'/></svg>");
  }
  textarea {
   width: 100%;
   height: 14rem;
   resize: none;
  }
  input {
   width: 50%;
   margin-bottom: 1rem;
  }
  input[type=text]:invalid, input [type=email]:invalid {
      box-shadow: none;
      background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgba(240, 132, 114, 0.5)' x='0' y='23' width='10' height='1'/></svg>");
    }
  button {
   padding: 0.5rem 1rem;
   border-radius: 0.25rem;
   background-color: rgba(78, 94, 114, 0.9);
   color: white;
   font-size: 16px;
   transition: background-color 0.2s;
  }
  button:hover,button :focus {
      outline: none;
      background-color: rgba(78, 94, 114, 1);
    }
  input[type=text]:focus,
  input[type=email]:focus,
  textarea:focus {
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgba(78, 94, 114, 0.3)' x='0' y='23' width='10' height='1'/></svg>");
    outline: none;
  }
  .wrapper {
    width: 62rem;
    background-color: white;
  }
  .letter {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    width: 52rem;
    margin: auto;
    perspective: 116rem;
    padding-top: 100px;
  }
  .side {
    height: 16rem;
    background-color: #fcfcf8;
    outline: 1px solid transparent;
  }
  .side:nth-of-type(1) {
      padding: 2rem 2rem 0;
      border-radius: 1rem 1rem 0 0;
      box-shadow: inset 0 0.75rem 2rem rgba(229, 225, 187, 0.5);
    }
  .side.side:nth-of-type(2) {
      padding: 2rem;
      border-radius: 0 0 1rem 1rem;
      box-shadow: 0 0.3rem 0.3rem rgba(0, 0, 0, 0.05), inset 0 -0.57rem 2rem rgba(229, 225, 187, 0.5);
      text-align: right;
    }
    a {
	text-decoration: none;
}

  .envelope {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    margin: auto;
  }
  .envelope.front {
    width: 22rem;
    height: 12rem;
    border-radius: 0 0 1rem 1rem;
    overflow: hidden;
    z-index: 9999;
    opacity: 0;
  }
  .envelope.front::before, .envelope.front::after {
    position: absolute;
    display: block;
    width: 24rem;
    height: 20rem;
    background-color: #e9dc9d;
    transform: rotate(30deg);
    transform-origin: 0 0;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
    content: '';
  }
  .envelope.front::after{
    right: 0;
    transform: rotate(-30deg);
    transform-origin: 100% 0;
  }
  .envelope.back {
    top: -0.19rem;
    width: 12rem;

    height: 8rem;
    overflow: hidden;
    z-index: -9998;
    opacity: 0;
    transform: translateY(-120rem);
  }
  .envelope.back::before {
      display: block;
      width: 16rem;
      height: 12rem;
      background-color: #e9dc9d;
      border-radius: 2rem;
      content: '';
      transform: scaleY(0.6) rotate(45deg)
    }
  .result-message {
    opacity: 0;
    transition: all 0.3s 2s;
    transform: translateY(18rem);
    z-index: -9999;
  }
  .sent .letter {
      -webkit-animation: scaleLetter 1s forwards ease-in /*,
                 pushLetter 0.5s 1.33s forwards ease-out*/ ;
              animation: scaleLetter 1s forwards ease-in /*,
                 pushLetter 0.5s 1.33s forwards ease-out*/ ;
    }
  .sent .side:nth-of-type(1) {
      transform-origin: 0 100%;
      -webkit-animation: closeLetter 0.66s forwards ease-in;
              animation: closeLetter 0.66s forwards ease-in;
    }
  .sent .side:nth-of-type(1) h1, .sent .side:nth-of-type(1) textarea {
      -webkit-animation: fadeOutText 0.66s forwards linear;
              animation: fadeOutText 0.66s forwards linear;
    }
 
  .sent .envelope {
      -webkit-animation: fadeInEnvelope 0.5s 1.33s forwards ease-out;
              animation: fadeInEnvelope 0.5s 1.33s forwards ease-out;
    }
  .sent .result-message {
      opacity: 1;
      transform: translateY(32rem);
    }
 
  .centered {
    position: absolute;
    left: 0;
    right: 0;
    margin: 1rem auto;
  }
 
  @-webkit-keyframes closeLetter {
     50% {transform: rotateX(-90deg);}
     100% {transform: rotateX(-180deg);}
  }
  @keyframes closeLetter {
     50% {transform: rotateX(-90deg);}
     100% {transform: rotateX(-180deg);}
  }
  @-webkit-keyframes fadeOutText {
     49% {opacity: 1;}
     50% {opacity: 0;}
     100% {opacity: 0;}
  }
  @keyframes fadeOutText {
     49% {opacity: 1;}
     50% {opacity: 0;}
     100% {opacity: 0;}
  }
  @-webkit-keyframes fadeInEnvelope {
    0% {opacity: 0; transform: translateY(2.5rem);}
    /*90% {opacity: 1; transform: translateY(4rem);}*/
    100% {opacity: 1; transform: translateY(0.0015rem);}
  }
  @keyframes fadeInEnvelope {
    0% {opacity: 0; transform: translateY(2.5rem);}
    /*90% {opacity: 1; transform: translateY(4rem);}*/
    100% {opacity: 1; transform: translateY(14.5rem);}
  }
  @-webkit-keyframes scaleLetter {
    66% {transform: translateY(-2.5rem) scale(0.5, 0.5);}
    75% {transform: translateY(-2.5rem) scale(0.5, 0.5);}
    90% {transform: translateY(-2.5rem) scale(0.3, 0.5);}
    97% {transform: translateY(-2.5rem) scale(0.33, 0.5);}
    100%{transform: translateY(-2.5rem) scale(0.3, 0.5);}
  }
  @keyframes scaleLetter {
    66% {transform: translateY(-2.5rem) scale(0.5, 0.5);}
    75% {transform: translateY(-2.5rem) scale(0.5, 0.5);}
    90% {transform: translateY(-2.5rem) scale(0.3, 0.5);}
    97% {transform: translateY(-2.5rem) scale(0.33, 0.5);}
    100%{transform: translateY(-2.5rem) scale(0.3, 0.5);}
  }
  
  
  @keyframes pushLetter {
    0% {transform: translateY(-2.5rem) scale(0.3, 0.5);}
    50% {transform: translateY(-2.5rem) scale(0.3, 0.5);}
    90% {transform: translateY(-3rem) scale(0.3, 0.5);}
    100% {transform: translateY(2.5rem) scale(0.3, 0.5);}
  }
  
   

        
   




  </style>

</head>



 <body>



  <script>
    (function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
  </script>





 <div class="container" style="padding-bottom:600px ;">
  <div class="wrapper centered" id="contact">
   
    <article class="letter">
      <div class="side">
        <h1>Contact us</h1>
       
        <form action="" method="post"  >
          <textarea  type="text" name="msg" id="msg" required placeholder="Your message"></textarea>
      </div>
      <div class="side" style="padding-top: 80px;">
      
          <input type="text" name="name" id="name" required placeholder="Your name" />
          <input type="email"  name="email" id="email" required placeholder="Your email" />
       
        <p>
          <button id="sendLetter" type="submit" name="submit">Send</button>
        </p>

      </form>
      </div>
    </article>
    
    <div class="envelope front"></div>
    <div class="envelope back"></div>
  </div>
 
  <p class="result-message " style="font-size: 18px;">Thank you for your message
  <a  style="color:#004f29; width:100% " href="index.html" >
    <button class="btn" style=" background-color: #e9dc9d;
    color: #004f29;"  > Back To Home </button> </a></p>

  <script>
 function addClass(){

    document.body.classList.add("sent"); 

  }
 
  sendLetter.addEventListener("submit", addClass);

  </script>

</div> 

<?php include "Footer.php" ?>


  </body>
  
</html>