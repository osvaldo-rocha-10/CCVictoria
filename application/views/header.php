<!--<!DOCTYPE html>-->
<!DOCTYPE HTML>
<html lang="en">

<head>
  
  <!--<title>Centro Comercial La Victoria</title>-->
  <meta charset="utf-8">
  <link rel='icon' href='<?php echo base_url();?>img/Logo_CCV.png'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  
  <style>
      body {
          font: 400 15px Lato, sans-serif;
          line-height: 1.8;
          color: #818181;
      }
      h2 {
          font-size: 24px;
          text-transform: uppercase;
          color: #303030;
          font-weight: 600;
          margin-bottom: 30px;
      }
      h4 {
          font-size: 19px;
          line-height: 1.375em;
          color: #303030;
          font-weight: 400;
          margin-bottom: 30px;
      }

      h6 {
          font-size: 15px;
          line-height: 1.175em;
          color: #303030;
          font-weight: 400;
          margin-bottom: 30px;
      }

      /* Estilos para las tablas */
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          /*position:center;
          padding-left: 20%;*/
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: center;
          /*padding: auto;*/
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        /* Fin estilo para las tablas */

       /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          /*z-index: 2; /* Sit on top */
          left: 20%;
          top: 20%;
          width: 62%; /* Full width */
          height: 64%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          /*background-color: rgb(0,0,0); /* Fallback color */
          /*background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          background-color: #f0f0f0;
          /*padding: 15px;*/
          border: 1px solid #006244;
      }

      .modalevent {
          width: 60%; 
          height: 70%; 
          left: 20%; 
          top: 20%;
      }

      /* Modal Content/Box */
      .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 100%; /* Could be more or less, depending on screen size */
      }

      .modal-header{
        background-color: #006244;
        color: white;
      }

      .modal-footer{
        background-color: #006244;
        color: white;
        padding: 10px;
      }

      /* The Close Button (x) */
      .close {
          position: absolute;
          right: 20px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: red;
          cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
      }

      .modal button.cancelbtn {
            /*width: auto;*/
            padding: 10px 10px;
            background-color: #f44336;
            color: white;
      }

      .fade
      {
            opacity:1;
      }
      .fade:hover
      {
            opacity:0.5;
      }

      .jumbotron {
          
          background-image: url("<?php echo base_url();?>img/imagen_4_3.JPG");
          color: #fff;
          padding: 100px 25px;
          height: 500px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
          font-family: Montserrat, sans-serif;
      }
      .container-fluid {
          padding: 5px 30px;
      }
      .bg-grey {
          background-color: #f6f6f6;
      }
      .bg-text { /*para modificar la posición del cuadro de busqueda*/ 
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
          color: white
          font-weight: bold;
          border: 3px solid #f1f1f1;
          position: absolute;
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 2;
          width: 60%;
          padding: 20px;
          text-align: center;
      }
      .logo-small {
          color: #006244;
          font-size: 50px;
      }
      .logo {
          color: #006244;
          font-size: 200px;
      }
      .thumbnail {
          padding: 0 0 15px 0;
          border: none;
          border-radius: 0;
      }
      .thumbnail img {
          width: 100%;
          height: 100%;
          margin-bottom: 10px;
      }
      .carousel-control.right, .carousel-control.left {
          background-image: none;
          color: #006244;
      }
      .carousel-indicators li {
          border-color: #006244;
      }
      .carousel-indicators li.active {
          background-color: #006244;
      }
      .item h4 {
          font-size: 19px;
          line-height: 1.375em;
          font-weight: 400;
          font-style: italic;
          margin: 70px 0;
      }
      .item span {
          font-style: normal;
      }
      .panel {
          border: 1px solid #006244; 
          border-radius:0 !important;
          transition: box-shadow 0.5s;
      }
      .panel:hover {
          box-shadow: 5px 0px 40px rgba(0,0,0, .2);
      }
      .panel-footer .btn:hover {
          border: 1px solid #006244;
          background-color: #fff !important;
          color: #006244;
      }
      .panel-heading {
          color: #fff !important;
          background-color: #006244 !important;
          padding: 25px;
          border-bottom: 1px solid transparent;
          border-top-left-radius: 0px;
          border-top-right-radius: 0px;
          border-bottom-left-radius: 0px;
          border-bottom-right-radius: 0px;
      }
      .panel-footer {
          background-color: white !important;
      }
      .panel-footer h3 {
          font-size: 32px;
      }
      .panel-footer h4 {
          color: #aaa;
          font-size: 14px;
      }
      .panel-footer .btn {
          margin: 15px 0;
          background-color: #006244;
          color: #fff;
      }
      .navbar {
          margin-bottom: 0;
          background-color: #006244;
          z-index: 9999;
          border: 0;
          font-size: 9px !important;
          line-height: 1.42857143 !important;
          letter-spacing: 2px;
          border-radius: 0;
          font-family: Montserrat, sans-serif;
      }
      .navbar li a, .navbar .navbar-brand {
          color: #fff !important;
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
          color: #006244 !important;
          background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
          border-color: transparent;
          color: #fff !important;
      }

      footer {
        
      }

      footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #006244;
      }

      .copyr {
        height: 5%;
        width: 100%;
        background-color: black;
        color: white;
      }

      footer i {
        color: #006244;
      }

      .slideanim {visibility:hidden;}
      .slide {
          animation-name: slide;
          -webkit-animation-name: slide;
          animation-duration: 1s;
          -webkit-animation-duration: 1s;
          visibility: visible;
      }

      .div-imagen {
        display:inline-block;
        position:relative;
      }

      .div-imagen > div {
         position: absolute;
          /* top: 0; */
          z-index: -1;
          /* padding: 10px; */
          color: white;
          /* right: 50%; */
          /* margin: 0; */
      }
            

      .div-imagen:hover > div {
          z-index: 1;
        padding: 00%;
        
      }
      .div-imagen:hover > div .fondo {
          z-index: 2;
        background-color: black;
      }
            
      .fondo{
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.30);
          opacity: 0;
      }
            
      .fondo:hover{
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.50);
          opacity: 1;
          -webkit-transition: opacity 500ms;
          -moz-transition: opacity 500ms;
          -o-transition: opacity 500ms;
          -ms-transition: opacity 500ms;
          transition: opacity 500ms;
          cursor: pointer;
      }
            
        
      .centrado{
              margin-top: 50%;
              font-weight: 500;
              font-size: 25px;
      }

      @keyframes slide {
        0% {
          opacity: 0;
          transform: translateY(70%);
        } 
        100% {
          opacity: 1;
          transform: translateY(0%);
        }
      }
      @-webkit-keyframes slide {
        0% {
          opacity: 0;
          -webkit-transform: translateY(70%);
        } 
        100% {
          opacity: 1;
          -webkit-transform: translateY(0%);
        }
      }

      @media screen and (max-width: 768px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
        .btn-lg {
            width: 100%;
            margin-bottom: 35px;
        }
        .modal {
          left: 20%;
          top: 20%;
          width: 75%;
          height: 10%;
        }
      }

      /* TAMAÑO PARA SMARTHPHONES */
      @media screen and (max-width: 480px) {
        .logo {
            font-size: 150px;
        }
        .modal {
          left: 30%;
          top: 5%;
          width: 60%;
          height: 70%;
        }
        .jumbotron {
          width: 100%;      
        }
        h1 {
          font-size: 30px;
        }
        .jumbotron p {
          font-size: 20px;
        }
      }
      @media screen and (max-width: 1366px) {
        .logo {
            font-size: 150px;
        }
        .modal {
          left: 20%;
          top: 20%;
          /*width: 25%;
          height: 25%;*/
        }
      }

      @media screen and (max-width: 1920px) {
        .logo {
            font-size: 150px;
        }
        .modal {
          left: 25%;
          top: 25%;
          width: 50%;
          height: 43%;
        }
        .modalevent {
          left: 25%;
          top: 25%;
          width: 50%;
          height: 47.5%;
        }
        
      }

  </style>
</head>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
    
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})


$(function(){
   $('.s').hover(function(){
        $(this).width(1.25*$(this).width());
        $(this).heigth(1.25*$(this).heigth());
    }),function(){
         $(this).width(0.8*$(this).width());
         $(this).heigth(0.8*$(this).heigth());
    }
  });

</script>

