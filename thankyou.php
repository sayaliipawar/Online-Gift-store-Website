<!DOCTYPE html>
<?php
session_start();

$unique_id = time() . mt_rand();

?>
<html>
   <head>
      <title>GiftStore/ThankYou</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <!-- FONTS      -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
      <!-- Font Awesome Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Materialized CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/go_to.css">
      <link rel="stylesheet" href="css/style1.css">

      <style>
      .card_color{
        background-color: #ffab91;
      }
      </style>
   </head>
   
   <body>
      <div class="row navbar-fixed">
         <nav class="black">
            <div class="nav-wrapper">
               <a href="index.php" class="brand-logo">GiftStore</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="dropdown10" class="dropdown-content dropdown_link">
                   
                  
                  <li><a href="kids.php" class="dropdown_link">Kids</a></li>
                  <li><a href="phonecase.php" class="dropdown_link">PhoneCase</a></li>
                  <li><a href="homedecor.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="watches.php" class="dropdown_link">Watches</a></li>
                  <li><a href="jewellery.php" class="dropdown_link">Jewellery</a></li>
                  <li><a href="softtoys.php" class="dropdown_link">Soft Toys</a></li>
                  <li><a href="crockery.php" class="dropdown_link">Crockery</a></li>
                  <li><a href="wallet.php" class="dropdown_link">Wallet</a></li>
               </ul>
               <ul id="dropdown11" class="dropdown-content dropdown_link">
                   
                  
                  <li><a href="kids.php" class="dropdown_link">Kids</a></li>
                  <li><a href="phonecase.php" class="dropdown_link">PhoneCase</a></li>
                  <li><a href="homedecor.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="watches.php" class="dropdown_link">Watches</a></li>
                  <li><a href="jewellery.php" class="dropdown_link">Jewellery</a></li>
                  <li><a href="softtoys.php" class="dropdown_link">Soft Toys</a></li>
                  <li><a href="crockery.php" class="dropdown_link">Crockery</a></li>
                  <li><a href="wallet.php" class="dropdown_link">Wallet</a></li>
               </ul>

                  <?php
                    if(isset($_SESSION['userid'])){
                    ?>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                      <form action="search.php" method="POST">
                          <li><input type="text" name="search" placeholder="Search"></li>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a class="dropdown-button navlink" data-beloworigin="true" href="#!" data-activates="dropdown11">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.php" class="navlink">About Us</a></li>
                          <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                          <li><a class="dropdown-button navlink" data-beloworigin="true" href="#!" data-activates="dropdown4"><?php echo $_SESSION['userid']?><i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                      </form>
                    </ul>
                  <ul id="dropdown4" class="dropdown-content dropdown_link">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                  <?php
                  }
                  else{
                  ?>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                      <form action="search.php" method="POST">
                          <li><input type="text" name="search" placeholder="Search"></li>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="dropdown5">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.php" class="navlink">About Us</a></li>
                          <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                          <li><a href="signup.php" class="active navlink">Sign Up</a></li>
                          <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                      </form>
                    </ul>
                  

                  <?php
                  }
                  ?> 
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php" class="navlink">Home</a></li>
                    <li><a href="#" class="dropdown-trigger navlink" data-beloworigin="true" data-activates="dropdown10">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="aboutus.php" class="navlink">About Us</a></li>
                    <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                    <li><a href="signup.php" class="active navlink">Sign Up</a></li>
                    <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                  </ul>
            </div>
         </nav>
      </div>
      <?php
      if(isset($_SESSION['name']))
      {
        ?>
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card ">
            <div class="card-content center-align">
              <span class="card-title activator grey-text text-darken-4">CHECKOUT DETAILS<br>
              </span>
                  <hr/> 
                    <div class = "row">
                      <form class = "col s12" id="contactForm" method="POST" action="contactvalidate.php">
                        <div class = "row">
                          <div class = "input-field col s12 m12 l12">  
                            <i class="material-icons prefix">account_circle</i>               
                            <input class="black-text" name = "tid" type = "text" disabled="true" value="<?php echo $unique_id;?>" />
                            <label class="black-text" for = "tid">Order Id</label>
                          </div>
                        </div>
                        <div class = "row">
                          <div class = "input-field col s12 m12 l12">  
                            <i class="material-icons prefix">account_circle</i>               
                            <input  class="black-text" name = "fname" type = "text" disabled="true" value="<?php echo $_SESSION['name'];?>" />
                            <label class="black-text" for = "fname">First Name</label>
                          </div>
                        </div>
                        <div class = "row">
                          <div class = "input-field col s12 m12 l12">
                            <i class="material-icons prefix">email</i>
                            <input class="black-text" name = "email" type = "email" disabled="true" value="<?php echo $_SESSION['email']; ?>"/>
                            <label class="black-text" for = "email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class = "input-field col s12 m12 l12">
                            <i class="material-icons prefix">phone</i>                
                            <input class="black-text" name = "phone" type = "text" disabled="true" value="<?php echo $_SESSION['phone']; ?>" />
                            <label class="black-text" for = "phone">Phone</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class = "input-field col s12 m12 l12">
                            <i class="material-icons prefix"><span class="fa fa-inr"></span></i>                
                            <input class="black-text" name = "phone" type = "text" disabled="true" value="<?php echo $_SESSION['total_amt']; ?>" />
                            <label class="black-text" for = "phone">Price</label>
                          </div>
                        </div> 
                        <div class="row center-align">
                          <a href="index.php" class="waves-effect waves-green white-text btn black">HOME</a>
                          <p class="center-align">Thank You for shopping with us. Please Visit again</p>
                        </div>          
                      </form>       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
      else
      {
        header("Location:shopping_cart.php");
      }

      ?>
      <!-- Page Footer -->
      <div class="row">
         <footer class="page-footer black white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.php" class="footerlogo">GiftStore</a></h4>
                  <!-- <p class="white-text">Information will be provided soon.</p> -->
                </div>
            </div>
             <div class="row center-align">
                <div class="col s12 m12 l12">
                    <a href="index.php" class="link">Home<span class="white-text"> |</span></a> 
                    <a href="aboutus.php" class="link">About Us<span class="white-text"> |</span></a> 
                     <a href="contactus.php" class="link">Contact Us<span class="white-text"> |</span></a> 
                  </div>
              </div> 
              <div class="row center-align">
               <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#!"></a>
                  <a class="googleplusBtn smGlobalBtn" href="#!"></a>
               </div>
              </div>
            <div class="row center-align marginReduce footer-copyright" style="margin-bottom:-20px;">
               <div id="footertext" class="col s12 m12 l12">
                  &copy 2018 Copyright Text .All Rights reserved.
               </div>
            </div>
         </footer>
      </div> 
      <!-- Preloader -->
      <div id="loader-wrapper">
         <div id="loader"></div>

         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>

      </div>
      <!-- Go To Top -->
      <div id="go-top" style="display: none;">
         <a title="Back to Top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
      </div>
   </body>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/additional-methods.min.js"></script>
      <script src="js/init.js"></script>
      <script>
        //Dropdown Trigger
         $(document).ready(function(){
            $('.dropdown-trigger').dropdown({
               belowOrigin:true
            });
         });
         $(document).ready(function(){
            $('#go-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
          });
        });

         //Preloader 
         $(document).ready(function() {
            $(window).load(function(){
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 1000);
            });
         }); 
         //Go Top 
            var pxShow = 100; // height on which the button will show
            var fadeInTime = 400; // how slow/fast you want the button to show
            var fadeOutTime = 400; // how slow/fast you want the button to hide

            // Show or hide the sticky footer button
            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() >= pxShow) {
                  jQuery("#go-top").fadeIn(fadeInTime);
               } else {
                  jQuery("#go-top").fadeOut(fadeOutTime);
               }

           });
      </script>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/* Exception class. */
require 'PHPMailer-master\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer-master\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer-master\src\SMTP.php';
//for phpmailer version 5
//require('PHPMailer-master\srs\PHPMailer\class.phpmailer.php');
//require ('PHPMailer-master\srs\PHPMailer\\PHPMailerAutoload.php');
//include("PHPMailer-master\class.smtp.php"); 
$mail = new PHPMailer(TRUE);
$email= $_SESSION['email'];   

/* Open the try/catch block.*/ 
try {
   /* Set the mail sender.*/ 
   $mail->setFrom('traversacompany@gmail.com', 'traversa123');//Your email details

   /* Add a recipient. */
   $mail->addAddress($email,'sayali');

   /* Set the subject.*/ 
   $mail->Subject = 'GiftStore order';

   /* Set the mail message body. */
   $mail->isHTML(TRUE);
   $mail->Body = "<html>Your Gifts are Booked<br><br>
        Transaction Id :".$unique_id."<br>
        Price - ".$_SESSION["total_amt"]."</html>";;

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
?>