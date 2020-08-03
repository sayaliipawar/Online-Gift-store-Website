<?php
session_start();
if(!isset($_SESSION["userid"]))
{
  header("Location:login.php");
}
if(isset($_POST['submit']))
{
$conn=mysqli_connect("localhost","root","","giftstore");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$add=$_POST["address"];
$c_name13=$_POST['nameoncard'];
$c_no13=$_POST['Creditcardnumber'];
$year13=$_POST['expyear'];
$month13=$_POST['expmonth'];
$cvv13=$_POST['cvv'];
$sql13="INSERT INTO checkout (name,email,phone,address,card_name,card_no,exp_year,exp_month,cvv) VALUES('$fname','$email','$phone','$add','$c_name13','$c_no13','$year13','$month13','$cvv13')";
  
  mysqli_query($conn,$sql13);
  $_SESSION['name']=$fname;  //for thankyou.php bil generation page
  $_SESSION['email']=$email;
  $_SESSION['phone']=$phone;
  $_SESSION['address']=$add;
  header("Location:thankyou.php");
  
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
        body{
          background-image:url("images/space.jpg");
          background-size:cover;
          background-repeat:no-repeat;
        }
        .container{
          opacity:0.6;
        }
        .material-icons{
          font-weight:bold;
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
                  <?php
                    if(isset($_SESSION['userid'])){
                    ?>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.html" class="navlink">About Us</a></li>
                          <li><a href="contactus.html" class="navlink">Contact Us</a></li>
                          <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="dropdown2"><?php echo $_SESSION['userid']?><i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                  <ul id="dropdown2" class="dropdown-content dropdown_link">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                  <?php
                  }
                  else{
                  ?>
                  <li><a href="index.php" class="navlink">Home</a></li>
                  <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li><a href="aboutus.html" class="navlink">About Us</a></li>
                  <li><a href="contactus.html" class="navlink">Contact Us</a></li>
                  <li><a href="signup.php" class="navlink">Sign Up</a></li>
                  <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li> 
                  <?php
                }
                ?>
                </form> 
               </ul>
               <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.php" class="side_nav">Home</a></li>
                <li><a href="aboutus.html" class="side_nav">About Us</a></li>
                <li><a href="contactus.html" class="side_nav">Contact Us</a></li>
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
                  <div class="center-align contacttitle"><span class="blue-text text-lighten-2">C</span>heckout <span class="blue-text text-lighten-2">F</span>orm</div>
                  <hr/> 
                    <div class = "row">
                      <form class = "col s12" id="checkoutForm" method="POST" action="checkout.php">
                        <div class = "row">
                          <div class = "input-field col s12">  
                            <i class="material-icons prefix">account_circle</i>               
                            <input  name = "fname" type = "text" />
                            <label for = "fname">First Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">account_circle</i>                
                            <input name = "lname" type = "text"/>
                            <label for = "lname">Last Name</label>
                          </div>
                        </div>
                        <div class = "row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input name = "email" type = "email"/>
                            <label for = "email">Email</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">phone</i>                
                            <input name = "phone" type = "number"/>
                            <label for = "phone">Phone</label>
                          </div>
                        </div>

                        <div class = "row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">message</i>
                            <textarea name="address" class = "materialize-textarea" onkeyup="countChar(this);"></textarea>
                            <label for = "address">Address</label>
                            <div id="charNum" class="right"></div>
                          </div>
                        </div>

                        
          <div class="row">
            <h3>Payment Details</h3>
            <label for="fname"><h5>Accepted Cards</h5></label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;font-size: 50px;"></i>
              <i class="fa fa-cc-amex" style="color:blue;font-size: 50px;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;font-size: 50px;"></i>
              <i class="fa fa-cc-discover" style="color:orange;font-size: 50px;"></i> 
            </div>
          </div>
            
             <div class = "row">
                      <form class = "col s12 m12 l12" id="checkoutForm" method="POST">
                        <div class = "row">
                          <div class = "input-field col s12">  
                            <i class="material-icons prefix"> account_circle</i>               
                            <input  name = "nameoncard" type = "text" />
                            <label for = "nameoncard">Name on card</label>
                          </div>
                        </div>

              <div class="row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">credit_card</i>                
                            <input name = "Creditcardnumber" type = "number"/>
                            <label for = "Creditcardnumber">Credit card number</label>
                          </div>
              </div>

                  <div class="row">
                          <div class = "input-field col s12">
                            <i class="material-icons prefix">event_busy</i>                
                            <input name = "expyear" type = "number"/>
                            <label for = "expyear">Exp year</label>
                          </div>
              </div>

              <div class="row">
                  <div class = "input-field col s12">
                      <i class="material-icons prefix">event_busy</i>                
                      <input name = "expmonth" type = "number"/>
                      <label for = "expmonth">Exp month</label>
                  </div>
              </div>

              <div class="row">
               <div class = "input-field col s12">
                <i class="material-icons prefix">lock</i>             
                <label for="cvv">CVV</label>
              <input type="text" id="cvv" name="cvv">
            </div>
          </div>


                <div class="row">
                          <div class="col s12 m12 l12 ">
                            <h5 class="center-align">
                              <button type="submit" name="submit" class="waves-effect waves-light btn black lighten-1 white-text">
                                submit
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
          <!-- Page Footer -->
          <div class="row" style="margin-top:-20px;">
             <footer class="page-footer grey darken-4 white-text">
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
          <!-- Preloader 
          <div id="loader-wrapper">
             <div id="loader"></div>

             <div class="loader-section section-left"></div>
             <div class="loader-section section-right"></div>

          </div>-->
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
        $(document).ready(function() {
          $('input#input_text, textarea#message1').characterCounter();
        });


         //Preloader 
         /*$(document).ready(function() {
            $(window).load(function(){
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 1000);
            });
         }); */
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

      $("#checkoutForm").validate({
              rules: {
                  fname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 10,
                  },
                  lname:  {
                      required: true,
                      pattern: /^[a-zA-Z ]+$/,
                      maxlength: 10,
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
                  address: {
                      required: true,
                      minlength: 10,
                      maxlength: 400
                  },
                  
                  nameoncard: {
                    required: true,
                    pattern: /^[a-zA-Z ]+$/,
                    minlength: 6,
                    maxlength: 20
                  },
                  expyear: {
                    required:true,
                    pattern:/^[0-9]+$/,
                    digits: true,
                    minlength: 2,
                    maxlength: 4
                  },
                  expmonth: {
                    required:true,
                    pattern:/^[0-9 ]+$/,
                    digits: true,
                    minlength: 1,
                    maxlength: 2
                  },
                  cvv: {
                    required:true,
                    pattern:/^[0-9 ]+$/,
                    digits: true,
                    minlength: 3,
                    maxlength: 3
                  },
                  Creditcardnumber: {
                    required: true,
                    digits: true,
                    minlength: 16,
                    maxlength: 16
                  }
                  
              }
          });
                  /*nameoncard: {
                    required: true,
                    pattern: /^[a-zA-Z ]+$/,
                    minlength: 6,
                    maxlength: 20
                  }
                  Creditcardnumber: {
                    required: true,
                    digits: true,
                    minlength: 16,
                    maxlength: 16
                  }
                  expyear: {
                    digits: true
                    minlength: 2,
                    maxlength: 4
                  }
                  expmonth: {
                    digits: true,
                    minlength: 1,
                    maxlength: 2
                  }
                  cvv: {
                    digits: true,
                    minlength: 3,
                    maxlength: 3
                  }*/
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