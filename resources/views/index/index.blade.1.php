<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <style>
      body {
    font: 20px "Montserrat", sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
}

p {font-size: 16px;}
.bg-1 { 
       /*background-color: #1abc9c; /* Green */
             background: url("img/header.jpg");
               background-size:cover;


        color: #ffffff;
    }

  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}

.navbar {
    background:black;
    padding-top: 5px;
    padding-bottom: 5px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}

.navbar-nav li a:hover {
    color: #1abc9c !important;
}

.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}

.navbar-nav > li > a, .navbar-brand {
    padding-top:5px !important; 
    padding-bottom:0 !important; 
    height: 25px; } 
.navbar {min-height:25px !important;}
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">WHO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container-fluid bg-1 text-center">
    <h3>Who Am I?</h3>
    <h3>I'm an adventurer</h3>
  </div>


<div class="container">
<div class="container-fluid bg-3 text-center">
  <h3>What Am I?</h3>
    <a href="#" class="btn btn-default btn-lg">Search</a>

  <p>Lorem ipsum..</p>
</div>
</div>
    <div class="container-fluid bg-2 text-center">
    <h3>Where To Find Me?</h3>
    <div class="row">
        <div class="col-sm-4">
        <p>Lorem ipsum..</p>
    <!-- <img src="http://www.hdwallpapersfreedownload.com/uploads/large/fruits/jucy-orrange-water-image.jpg" alt="Image" class="img-responsive" style="width:150px; height:150px">
    -->
        </div>
        <div class="col-sm-4">
        <p>Lorem ipsum..</p>
        <!-- <img src="http://kingofwallpapers.com/apple/apple-008.jpg" alt="Image" class="img-responsive" style="width:150px; height:150px">-->
        </div>
        <div class="col-sm-4"> 
        <p>Lorem ipsum..</p>
        <!-- <img src="http://g1.dcdn.lt/images/pix/file49890500_d4e7eebd.jpg" alt="Image" class="img-responsive" style="width:150px; height:150px"> -->
        </div>
    </div>
    </div>

<footer class="container-fluid bg-4 text-center">
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
        </footer>

</body>
</html>