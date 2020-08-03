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
                  <?php
                    if(isset($_SESSION['userid'])){
                    ?>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.php" class="navlink">About Us</a></li>
                          <li><a href="contactus.php" class="navlink">Contact Us</a></li>
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
                  <li><a href="aboutus.php" class="navlink">About Us</a></li>
                  <li><a href="contactus.php" class="navlink">Contact Us</a></li>
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
        <!--navigation ends-->
      <div class="row">
        <div class="col s12 m6 l3">
          <div class="card medium">
            <div class="grad1">
              <div class="card-image waves-effect waves-block waves-light center-align">
                <i class="material-icons md-166 white-text activator">add_box</i>
              </div>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Maximum Opportunities<br><i class="material-icons right" style="margin-top:5px;">more_vert</i>
              </span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Maximum Opportunities<i class="material-icons right">close</i></span>
              <p> Information to be added</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card medium">
            <div class="grad1">
              <div class="card-image waves-effect waves-block waves-light center-align">
                <i class="material-icons md-166 white-text activator">collections</i>
              </div>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Great Stock<br><i class="material-icons right">more_vert</i>
              </span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Great Stock<i class="material-icons right">close</i></span>
              <p> Information to be added</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card medium">
            <div class="grad1">
              <div class="card-image waves-effect waves-block waves-light center-align">
                <i class="material-icons md-166 white-text activator">flash_on</i>
              </div>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Faster Service<br><i class="material-icons right">more_vert</i>
              </span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Faster Service<i class="material-icons right">close</i></span>
              <p> Information to be added</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card medium">
            <div class="grad1">
              <div class="card-image waves-effect waves-block waves-light center-align">
                <i class="material-icons md-166 white-text activator">perm_identity</i>
              </div>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">User Support<br><i class="material-icons right">more_vert</i>
              </span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">User Support<i class="material-icons right">close</i></span>
              <p> Information to be added</p>
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
                  <!-- <p class="white-text">Information will be provided soon.</p> -->
                </div>
            </div>
             <div class="row center-align">
                <div class="col s12 m12 l12">
                    <a href="index.php" class="link">Home<span class="white-text"> |</span></a> 
                    <a href="aboutus.html" class="link">About Us<span class="white-text"> |</span></a> 
                     <a href="contactus.html" class="link">Contact Us<span class="white-text"> |</span></a> 
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script><script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
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
