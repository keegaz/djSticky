<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link href="css/style.css" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    </head>
    </head>
    <body>
        

<!--Navigation-->
<nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar mdb-color lighten-3">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="http://mdbootstrap.com/img/logo/mdb-transparent-sm-shadows.png" class="d-inline-block align-top" alt="MDBootstrap">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Pricing</a>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Action</a>
                        <a class="dropdown-item">Another action</a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/.Navigation-->
<!-- Main -->
<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>This Navbar is fixed</h2>
                <h5>It will always stay visible on the top, even when you scroll down</h5>
                <br>
                <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
                <div style="height:2000px;"></div>
            </div>
        </div>
    </div>
</main>
<!-- /.Main -->


        
    </body>
</html>

<!--Booking-->
     
<div class="container">
    <section>
        <div class="page-header" id="#book">
            <h2> Booking. <small> Book for your next event</small></h2>
        </div>

         <div class="well">

            <div class="container text-center">
                <h3> Booking </h3>
                <p>Enter Information</p>
               
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> " method="post" class="form-inline" id="booking">
                    <div class="form-group">
                        <label for="booking"> Book Now</label>
                        <input type="text" class="form-control" id="book" placeholder="Your name" value="<?=$name?>">
                        <span class="error"><?= $name_error ?></span>
                        <input type="email" class="form-control" id="book" placeholder="Your email" value="<?=$email?>">
                        <span class="error"><?= $email_error ?></span>
                        <input type="tel" class="form-control" id="book" placeholder="Your Phone Number" value="<?=$phone?>">
                        <span class="error"><?= $phone_error ?></span>
                         <input type="datetime-local" class="form-control" id="book" value="<?=$date?>">
                        <span class="error"><?= $date_error ?></span>
                        <input type="button" class="form-control" id="book" onclick="" value="Book Now">
                       
                    </div>

                </form>
                
        </div>
    </div>
    </section>
</div>
