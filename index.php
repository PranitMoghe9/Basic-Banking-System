<!DOCTYPE html>
<html lang="en">

<head>
  <title>PM BANK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    footer {
      text-align: center;
      background-color: blueviolet;
      height: 35vh;
      text-align: center;
    }

    footer ul {
      margin: 0;
      padding: 0;
    }

    footer li {
      margin-top: 70px;
      display: inline-block;
      margin-right: 9px;
      list-style: none;
    }

    footer li a {
      color: white;
      text-decoration: none;
      font-size: 60px;
      transition: all ease-in-out 250ms;
    }
  </style>

</head>

<body>

  <!-- Navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PM BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="customers.php">Customers List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="transactions.php">Transaction History</a>
          </li>
        </ul>

      </div>

  </nav>

  <!-- Caraousel-->

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/5.jpg" alt="Easy Transfer" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Easy Money Transfer</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/4.jpg" alt="Quick Deposit" width="1100" height="500">
        <div class="carousel-caption  d-none d-md-block">
          <h3>Quick Personal Loans</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/6.jpg" alt="Low interests" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Customer Satisfaction</h3>
        </div>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!--About us-->

  <!-- <section class= "my-5">
<div class="py-5">
 <h3 class="text-center" >About Us</h3>
 </div>

<div class="container-fluid">
 <div class ="row">
<div  class="col-lg-6 col-md-6 col-12">
      <img src="images/2.jpg" class="img-fluid">
      </div>
      <div  class="col-lg-6 col-md-6 col-12">
      <h1>Zombie Bank</h1>
      <p1> Zombie Bank is a part of Zombie foundation. It is one of Znations's leading private banks and was among the first to receive approval from the Central bank of Znation (CBZ) to set up a private sector bank in 992 ZY.
          Today, Zombie Bank has a banking network of 5,608 branches and 16,087 ATM's in 2,902 cities/towns. Zombie Bank offers a diverse range of financial products and banking services to customers(Which are dead actually, because they are ZOMBIES) through a growing branch and ATM network and digital channels such as Netbanking, Phonebanking and MobileBanking.
        
        </div>   -->


  <!-- </div>
  </div> -->

  <!--Dsiclaimer-->

  <!-- </section>
  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Disclaimer</h3>
      <p1>This website is the
        outcome of a intern project, and does not
        necessarily represent the views of any organisation or any other individuals referenced or
        acknowledged within the website. Anyone may reproduce, distribute, adapt, translate the content on the website,
        without explicit permission, provided that the content is accompanied by an acknowledgement that Zombie Bank
        website is the source and that it is clearly indicated if changes were made to the original content.</p1>
    </div> -->

  <!-- class="text-center mt-2 py-5" -->

  <footer>

    <ul>
      <li><a href="https://www.facebook.com/pranit.moghe"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      </li>
      <li><a href="https://github.com/PranitMoghe9"><i class=" fa fa-github-square" aria-hidden="true"></i></a>
      </li>
      <li><a href="https://www.linkedin.com/in/pranit-moghe-98104121a/"><i class="fa fa-linkedin-square"
            aria-hidden="true"></i></a></li>
    </ul>
    <p>&copy 2021 <b>Pranit Moghe</b> </br>Chairman, PM BANK</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>