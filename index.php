<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
       <title>DJ Sticky</title>
      
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" >
        

<link rel="stylesheet" href="css/style.css" >

 <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet" >

    </head>




<body>
    <?php include_once("track.php") ?>

    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"> 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
                <a href="" class="navbar-brand"> DJ Sticky </a>            
            </div>  
            <!--Navbar Header-->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class=" nav navbar-nav">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                   
                    <li><a href="#events">Events</a></li>
                    <li><a href="#music">Music</a></li>
                      <li><a href="#soundCloud">SoundCloud</a></li>
                 
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </div>
        </div> <!--End container-->   
    </nav> <!--End navbar-->


    <div class="jumbotron">
        <div class="container text-center">
            <h1> DJ Sticky </h1>
                <p style="font-size: 26px; font-style:oblique; "> Welcome to the DJ Sticky Website here is all about DJ Sticky what is the latest with him. </p>

                        <div class="btn-group" id="btnSpread">
                            <a href="https://www.instagram.com/djsticky_/?hl=en" id="btnSpread"  class="btn btn-lg btn-warning"> Spread the word</a>

                        </div>

        </div><!--End container-->
    </div><!--End jumbotron-->


<div class="container">
    <section>
        <div class="page-header" id="#about">
                <h2 id="pageAbout"> About Me</h2>
        </div>

      <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Dj Sticky</h3>
  </div>
  <div class="panel-body">
      <img src="images/camaro_dj (1).jpg" alt="DJSticky" class="img-thumbnail">

    <p id="aboutme">A new DJ that is working towards bringing the hottest music and the best mixes to please the crowd. If you want more information hit me up at @Djsticky6@gmail.com or use the contact form below. </p>
  </div>
</div>
    </section>
</div><!-- End Container-->


    <!-- Events-->
    
    <div class="container">
        <section>
            <div class="page-header" id="#events">
                <h2 id="pageName">Events. <small style="color: #fff;"> Check out my next events</small></h2>
            </div>
             <h3 class="panel-title"> </h3>
                <div class="panel panel-default">
                    <div class="panel-heading">
        
                         <div class="row">
                            <div class="col-lg-6"> 
                                          
                                <img src="images/fishFry.jpg" alt="Fish Frys">
                                    <div class="caption">
                                        <h3> Fish Fry</h3>
                                        <blockquote>
                                        <p> Fish Fry which is every Thursday Night </p>
                                        </blockquote>
                                            <p> <a href="http://turksandcaicostourism.com/things-to-do-in-turks-and-caicos/island-fish-fry-providenciales/"     class   ="btn btn-primary" role="button" id="btnView"> View</a> </p> 
                                                     </a>
                                            </div>
                                        </div><!--End Column-->
          
    
    
                               <div class="col-lg-6">            
                                    <img src="images/sandbar.jpg" alt="Sandbar">
                                    <div class="caption">
                                        <h3> Sandbar </h3>
                                        <blockquote>
                                        <p> Great music at sandbar which is every Firday Night </p>
                                        </blockquote>
                                    <p> <a href="http://www.sandbartci.com/" class="btn btn-primary" role="button" id="btnView"> View</a> </p> 
                                             </a>
                                    </div>
                                </div>
                             </div>
                        </div>
                            </div><!--End Row-->
        
    
            </section>
    </div> <!--End Container-->



                    <!--Music -->
                <div class="container">
                        <section>
                            <div class="page-header" id="#music">   </div>  
                                    <h2 id="pageMusic"> Music</h2>   
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                    </div>
                                  <div class="panel-body">
                                          <div class="col-lg-10" >
                                            <div class="row">
                                                <div class="col-md-6" id="panel-1">
                                                    <img src="images/headphones.gif" alt="Summer Mix">
                                                        <div class="caption">
                                                            <h3> Flashing Lights </h3>
                                                                 <audio controls>            
			                                                        <source src="music/Chase & Status - Flashing Lights.mp3" title="Flashing Lights" type="audio/ogg"  />
		                                                         </audio>
                                                        </div>
	                                            </div>

                                                          <div class="col-md-6" id="panel-2">
                                                             <img src="images/headphones.gif" alt="Mixes">
                                                               <div class="caption">
                                                                  <h3> Flashing Lights </h3>
                                                                           <audio controls>            
			                                                                   <source src="music/Chase & Status - Flashing Lights.mp3" title="Flashing Lights" type="audio/ogg"  />
			   		                                                       </audio>           
                                                               </div>
	                                            </div><!--End panel-2-->
                                            </div>
                                       </div><!--End Column-->
                                    </div><!--End Panel Body-->
                              </div><!--End Header-->
                        </section><!--End Section-->
                    </div><!-- End Container-->

        

                        <!--SoundCloud-->
                       <div class="container">
                        <section>
                            <div class="page-header" id="#soundCloud">   </div>  
                                    <h2 id="pageSoundCloud"> SoundCloud</h2>   
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                    </div>
                                  <div class="panel-body">
                                          <iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/47725519&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                    </div><!--End Panel Body-->
                              </div><!--End Header-->
                        </section><!--End Section-->
                    </div><!-- End Container-->


<!--Contact Me-->


    
<div class="container">
    
    <section>
        <div class="page-header" id="#contact">
            <h2 id="pageContact">Contact. <small style="color: #fff;"> Contact Me for more Information</small></h2> </div><!--End page header-->

             <div class="well">
            <div class="container text-center">

               <?php include('form_process.php'); ?>

<div class="container">
      
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="form-inline">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="0" >

      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" placeholder="someone@example.com" type="text" name="email" value="<?= $email ?>" tabindex="0">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" placeholder="(000) 123 0000" type="text" name="phone" value="<?= $phone ?>" tabindex="0" style="padding-right: 5px;" >
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    
    </fieldset>
    <fieldset>
      <textarea  value="<?= $message ?>"  name="message" tabindex="0" placeholder="Type your Message Here....">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>
                </div>
            </div>
    </section>




</div> <!-- End Container-->

   
   
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">Footer Content</h5>
                <p>Welcome to the DJ Sticky Website whre you can get the exclusive mixes and updates of the new shows and events I will be playing at.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="https://www.instagram.com/djsticky_/?hl=en">Instagram</a></li>
                    <li><a href="https://soundcloud.com/djsticky-2">SoundClould</a></li>
                    
                    
                </ul>
            </div>
            <!--/.Second column-->

            
        </div>

    </div>
    <!--/.Footer Links-->

    
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright:  Kalemina Designs </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


</body>






<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" ></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>


<script src="https://www.gstatic.com/firebasejs/3.7.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAUge3ixmWZ7qhR167vka5cRohOove_280",
    authDomain: "webquickstart-e650c.firebaseapp.com",
    databaseURL: "https://webquickstart-e650c.firebaseio.com",
    storageBucket: "webquickstart-e650c.appspot.com",
    messagingSenderId: "377523934647"
  };
  firebase.initializeApp(config);
</script>

</html>