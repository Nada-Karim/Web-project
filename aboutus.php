<?php include "navbar.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
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

@media only screen and (min-width: 480px) and (max-width: 768px) {
    .content {
        width: 100%;
    }
 }


    body{   
        background:  #fff;
        color: #fff;
        min-width: 300px;
        max-width:1800px;
        margin:auto;
        overflow-x: hidden;
        font-family: 'Cabin Condensed', sans-serif;
    }
    
    section {
        padding: 15px;
    }
    
    #page{
        min-height: 100vh !important;
        height: 100% !important;
    }
    
    .experince-header {
        position: relative;
        font-size: 42px;
    }
    .experince-header-set{
        padding-right:10px;
        align-self: center;
        margin-left: 240px;
        color: peru;
    }
    
    .experince-alt {
        color:#fff ;
        margin: 50px 0;
        font-size: 22px;
        width: 70%;
    }
    
    .experince-header::before{
        content: "";
        position: absolute;
        display: flex;
        top: 50%;
        left: 0;
       
        height: 10%;
        width: 100%;
        z-index: -1;
    }
    
    .pageControl{
        height: 25px;
    }
    
    .about-container {
        display: flex;
        justify-content: space-between;
        gap: 30px;
    }
    
    .about-me-section{
        padding: 20px 0;
        width: 50%;
        color: rgb(96, 59, 15);
        font-size: 18px;
        overflow: hidden;
    }
    
    
    
    :root{
        --swiper-pagination-bullet-inactive-color: #fff;
    }
    .swiper-pagination-bullet-active {
        background-color: #fff !important;
        box-shadow: 0 0 15px #ffffff90;
        width: 15px !important;
        border-radius: 5px !important;
    }
    
    
    .comment-container{
        width: 100%;
        height: 150px;
        background: red;
        margin: 35px 0;
    }
    
    .img-section{
        width: 350px;
        height: 350px;
        padding: 20px 0;
        border-radius: 5px;
        
    }
    .img-section img{
        width:100%;
        height:100%;
      box-shadow: 15px 15px 0 #39481f;
      border-radius:5px;
    }
    .about-text{
        margin-bottom: 35px;
        margin-top: 35px;
    
    }
    
    .skills-bar-about{
        display: flex;
        justify-content: flex-start;
        text-align: center;
        gap: 30px;
        width: 100%;
        border-radius: 5px;
        font-size: 32px;
    
    }
    
    .social-links{
        width: 50px;
        height: 50px;
        line-height: 50px;
        color: #fff;
        background:#48846a;;
        border-radius: 5px;   
        transition: .3s ease all;
        
    }
    .social-links i{
        margin: auto;
       
    }
    
   
    .social-links:nth-child(2):hover{
        background: #ffffff;
    }
    .social-links:nth-child(3){
        position: relative;
        border-radius: 5px;
        overflow: hidden;
        
    }
    .social-links:nth-child(3):hover {
        background: transparent;
    }
    .social-links:nth-child(3)::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        z-index: -1;
        transition: .3s ease all;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    }
    .social-links:nth-child(3):hover::before {
        opacity: 1;
       
    }
    .social-links:nth-child(4):hover {
        background: #1DB954;
    }
    .social-links:nth-child(5):hover,.social-links:nth-child(1):hover {
        background: #ffffff;
        color: #000;
    }
    
    
    
    
    
    
    
  
   
  
    
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    @media only screen and (max-width: 1150px) {
        .experince-alt{
            width: 100%;
        }
    
    }
    
    @media only screen and (max-width: 968px){
        .about-container {
            flex-direction: column-reverse;
        }
    
        .about-me-section{    
            width: 100%;
        }
        .img-section{
            margin-top: 25px;
            width: 200px;
            height: 200px;
            justify-content: center;
        }
    }
    
    @media only screen and (max-width: 640px) {
        .comment-section-container {
                width: 100%;
                margin: auto;
    
            }
    
            .slider-comments{
                margin: 15px;
            }
    
        .comment-section {
                width: 100%;
    
            }
      
      .skills-bar-about{
        justify-content:center;
      }
    
     
            .experince-header-set{
                padding: 10px;
            }
    
            .img-section{
                margin:20px auto;
            }
    
            .about-me-section{
                text-align: center;
            }
    
       
            
                .experince-header{
                    text-align: center;
                    font-size: 28px;
                }
                .about-text{
                    font-size: 18px;
                }
                .experince-alt {
                    text-align: center;
                    font-size: 18px;
                    width: 100%;
                    margin:13px 0;
                    margin-bottom: 50px;
                }
            
           
    
        section .container {
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                margin: 0;
                padding: 0;
            }
    
           
    
    }
    
    @media only screen and (max-width:455px) {
    
        .slider-com-artic{
            font-size: 18px;
            width: 100px;
        }
    
    
        .comment-slider-img{
            width: 80px;
            height: 80px;
    
    
        }
    
           
        .experince-header {
                text-align: center;
                font-size: 18px;
            }
        
                    .about-text {
                        font-size: 16px;
                    }
            .experince-alt {
                text-align: center;
                font-size: 16px;
                width: 100%;
                margin: 13px 0;
                margin-bottom: 50px;
            }
    
          
    }
    
    @media only screen and (max-width: 411px) {
        .comment-slider-container{
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            text-align: center;
        }
    
    
        .c-slider-img-container,.comment-slider-img{
            padding: 0;
            margin: auto;
        }
       
            .container-fluid{
                padding: 0;
            }
    
      
    
    }
    
    @media only screen and (max-width:340px) {
               
                .skills-bar-about {
                        font-size: 22px;
                        justify-content: center;
                        gap: 10px;
                    }
        section{
            padding: 3px;
        }
    }
    .img-hover-zoom {
  height: 300px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
}

/* [2] Transition property for smooth transformation of images */
.img-hover-zoom img {
  transition: transform .5s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
.img-hover-zoom:hover img {
  transform: scale(1.2);
}
    
    



@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap');

.card-circle{
    text-align:center;
     margin-top:50px;
     background:#27496D;    
     border:10px solid transparent;
     color:#fff;
     Font-family: Montserrat;
     padding:50px;
     border-radius:50%;
}
 .card-circle .card-title{
    font-weight:600;
     font-size:26px;
}
 .card-circle .card-text{
    font-weight:400;
}
 .card-circle .card-icon i{
     font-size:60px;
     display:block;
}
 .card-circle:nth-child(2){
    background:#142850;
}
 .card-circle .btn{
    Font-family: Montserrat;
    background:transparent;
     border:1px solid #fff;
     text-transform:uppercase;
     padding:5px 30px;    
     border-radius:0px;
     Font-weight:600;
}
.card-circle .btn,.card-circle .card-icon i,.card-circle{
   transition: all ease-in-out 0.2s;
}
 .card-circle:hover .btn{
    background:#a0a0a0;
     color:#fff;
   border: 1px solid transparent;
}
 .card-circle .btn:hover{
    transform: scale(1.1);
}
 .card-circle:hover{
    border:10px solid #ffffff;
}
 .card-circle:hover i {
   text-shadow: 0px -1px 10px #46474b;
    transform:scale(1.2)rotate(20deg);
}
 @media only screen and (min-width: 1200px) {
     .card-circle:nth-child(3){
         margin-left:-40px;
         z-index:0;
    }
     .card-circle{
         width:400px;
         height:400px;
    }
     .card-circle:nth-child(2){
         margin-left:-20px;
         box-shadow: 1px 2px 20px 8px rgba(241, 235, 235, 0.12);
         transform: scale(1.2);
         z-index:1;
    }
   .card-circle .card-icon i{
      margin-top: 20px;
     }
     .card-circle .card-icon img{
      margin-top: 20px;
      background-color: #57565b;
     }
}
@media only screen and (min-width: 991px) and (max-width: 1200px) {
   .card-circle{
         width:340px;
         height:340px;
    }
  .card-circle .card-icon i{
     font-size:50px;
   }
  .card-circle .card-icon i{
      margin-top: -25px;
     }
   .card-circle:nth-child(3){
         margin-left:-50px;
         z-index:0;
    }
   .card-circle:nth-child(2){
         margin-left:-20px;
         z-index:1;
    }
}  


    </style>
    
   

<title>About us</title>
</head>
<body>

    <section>
            <!-- 03 page start -->
            <div id="page">
                <div id="about" class="pageControl"></div>
                <div class="experince-container-fluid">
                    <div class="container">
                        <div class="section-box-container">
                            <div class="experince-header"><span class="experince-header-set">About Us</span></div>
                            <div class="about-container">
                                <div class="about-me-section">
                                    <div class="about-text">
                                        
                                       
BookAholic.org works to connect readers with independent booksellers all over the world.
‍We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them thrive.
                                    </div>
                                    <div class="about-text">
                                        Every purchase on the site financially supports independent bookstores. Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities
                                    </div>
                                    <div class="about-text">
                                 
                                        <div style="color:#807e4d; font-weight: bold;" class="about-text">
                                            Find Us At:
                                        </div>
                                    </div>
                                    <div class="skills-bar-about">
    
                                          <a class="social-links"><i class="		fa fa-linkedin-square"></i></a>
                                            <a class="social-links"><i class="	fa fa-facebook-square"></i></a>
                                            <a class="social-links"><i class=" fa fa-instagram"></i></a>
                                           
                                                 
                                    </div>
                                   
                                 
                                </div>
                                <div class="img-section">
                                  <img class="img-hover-zoom" src="https://scontent-mrs2-1.xx.fbcdn.net/v/t1.6435-9/122994116_139947754538900_4268710175579127982_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=2c4854&_nc_ohc=1YVnfQR-62oAX-0-QP0&_nc_ht=scontent-mrs2-1.xx&oh=00_AfCaGbjmhSTdbhPQMRshjy4cMSTP9lqMrhSYHq6JYFEwFQ&oe=63C063DE">
                                </div>
                            </div>  
                            <h1 style="color: hsl(113, 74%, 9%); padding-top: 60px">  Meet The Group
                            </h1>                    
                        </div>
                      
                    
             
                      
                            
                                <div class="container" style="padding-bottom: 100px; padding-top: 60px;">
                                 
                                    <div class="row">
                                      <!-- card1 -->
                                       <div class="card card-circle" style="background-color: #a0a0a0;">
                                        <img src="pics/nada.png" style="height:100%"><img>
                                          <div class="card-icon">
                                            
                                          </div>
                                          <div class="card-body">
                                             <h5 class="card-title">Nada</h5>
                                   
                                          </div>
                                       </div>


   <!-- card3 -->
   <div class="card card-circle " style="background-color: #46474b;">
    <img src="pics/hana3.png" style="height:100%;"><img>
      <div class="card-icon">
      
      </div>
      <div class="card-body">
         <h5 class="card-title">Hana</h5>

      </div>
   </div>

                                       <!-- card2 -->
                                       <div class="card card-circle" style="background-color: #43d05f;">
                                        <img src="pics/habiba.png" style="height:100%;"><img>
                                          <div class="card-icon">
                                           
                                          </div>
                                          <div class="card-body">
                                             <h5 class="card-title">Habiba</h5>
                                   
                                          </div>
                                       </div>
                                    








                                    </div>
                                    </div>


                                  </section>
                                 

                                  <?php include "Footer.php" ?>
  </body>                   
                       



  </html> 