<?php
session_start();

if(isset($_POST['submit']))
{
  //for contact form validation
$conn=mysqli_connect('127.0.0.1','root','giftstore');
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];

  $sql="INSERT INTO contactus(fname,lname,email,phone,message) VALUES('$fname','$lname','$email','$phone','$message')";
  mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>GiftStore</title>
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
        body{
          background-image: url("images/space1.jpg");
          background-size:cover;
          background-repeat:no-repeat;
        }
        .container{
          opacity:0.6;
        }
         /* Class for placement of error messages for jQuery Validate */
  .errorMessage {
       font-size: 18px;
  }
  .errorMessage i,
  .errorMessage [class^="mdi-"], .breadcrumb [class*="mdi-"],
  .errorMessage i.material-icons {
      display: inline-block;
      float: left;
      font-size: 24px;
  }
  .errorMessage:before {
      color: rgba(255, 255, 255, 0.7);
      vertical-align: top;
      display: inline-block;
      font-family: 'Material Icons';
      font-weight: normal;
      font-style: normal;
      font-size: 25px;
      margin: 0 10px 0 8px;
      -webkit-font-smoothing: antialiased;
  }
  .errorMessage:first-child:before {
      display: none;
  }


  .invalid {
    color: red;
    font-size: 1em;
  }

      </style>
   </head>
   
   <body>
      <!--navigation bar-->
      <div class="row navbar-fixed">
         <nav class="black">
            <div class="nav-wrapper">
               <a href="#" class="brand-logo">GiftStore</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
               <ul id="categories1" class="dropdown-content" databeloworigin="true">
                  <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category2.php" class="dropdown_link">PhoneCase</a></li>
                  <li class="divider"></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Watches</a></li>
                  <li><a href="category5.php" class="dropdown_link">Jewellery</a></li>
                  <li><a href="category6.php" class="dropdown_link">Soft Toys</a></li>
                  <li><a href="category7.php" class="dropdown_link">Crockery</a></li>
                  <li><a href="category8.php" class="dropdown_link">Wallet</a></li>

               </ul>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                <form action="search.php" method="POST">
                  <li><input type="text" name="search" placeholder="search"></li>
                  <li><a href="index.php" class="navlink">Home</a></li>
                  <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li><a href="aboutus.php" class="navlink">About Us</a></li>
                  <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                  <li><a href="signup.php" class="navlink">Sign Up</a></li>
                  <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li> 
                </form> 
               </ul>
               <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.php" class="side_nav">Home</a></li>
                <li><a href="aboutus.php" class="side_nav">About Us</a></li>
                <li><a href="contactus.php" class="side_nav">Contact Us</a></li>
                <li><a href="signup.php" class="side_nav">SignUp</a></li>
            </ul>
            </div>
         </nav>
        </div>
      <!-- Form Starts -->
      <div class="container" style="margin-top:-20px;">
        <div class = "row">
           <div class = "col s12 m12 l12" class="center-align">
              <div class = "card blue-grey lighten-4 black-text">
                 <div class = "card-content"> 
                  <div class="center-align contacttitle"><span class="blue-text text-lighten-2">C</span>ontact <span class="blue-text text-lighten-2">U</span>s</div>
                  <hr/> 
                    <div class = "row">
                      <form class = "col s12" method="POST" action="contactus.php" id="contactForm">
                        <div class = "row">
                          <div class = "input-field col s12">  
                            <i class="material-icons prefix ">account_circle</i>               
                            <input  name = "fname" type = "text" class = "active validate" required />
                            <label for = "fname">First Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">account_circle</i>                
                            <input name = "lname" type = "text" class = "active validate" required />
                            <label for = "lname">Last Name</label>
                          </div>
                        </div>
                        <div class = "row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input name = "email" type = "email" class = "validate" required />
                            <label for = "email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">phone</i>                
                            <input name = "phone" type = "number" class = "active validate" required />
                            <label for = "phone">Phone</label>
                          </div>
                        </div>
                        <div class = "row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea name = "message" class = "materialize-textarea" data-length="500"></textarea>
                            <label for = "message">Message</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s12 m12 l12 ">
                            <h5 class="center-align">
                              <button type="submit" class="waves-effect waves-light btn black lighten-1 white-text">
                                Submit
                              </button>
                            </h5>
                          </div>
                        </div>           
                      </form>       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div id="go-top" style="display: none;">
         <a title="Back to Top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
      </div>
      <!-- Page Footer -->
      <div class="row" style="margin-top:-20px">
         <footer class="page-footer black white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.php" class="footerlogo">GiftStore</a></h4>
                  <span><a href="#" class="link">Developed By Sayali Pawar</a></span>
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
            //jQuery Validate defaults
        jQuery.validator.setDefaults({
            errorClass: 'errorMessage invalid',
            validClass: "valid",
            errorElement : 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });
        

      $("#contactForm").validate({
              rules: {
                  fname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 10
                  },
                  lname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 16
                  },
                  phone: {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                  },
                  email: {
                      required: true,
                      email: true,
                      pattern: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                      maxlength: 64
                  }, 
                  message: {
                      required: true,
                      minlength: 6,
                      maxlength: 400
                  }
              }
          });
          function countChar(val) {
            var len = val.value.length;
            if (len >= 500) {
              val.value = val.value.substring(0, 500);
            } else {
              $('#charNum').text(len+"/500");
            }
          };
  </script>
</html>
