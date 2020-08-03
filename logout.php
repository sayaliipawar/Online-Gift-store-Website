<?php
 session_start();

  echo "Logout Successfully ";
  unset($_SESSION["userid"]);
  unset($_SESSION["name"]);
  unset($_SESSION["email"]);
  unset($_SESSION["phone"]);
  unset($_SESSION["address"]);
  unset($_SESSION["total_amt"]);
  session_destroy();   // function that Destroys Session 
  header("Location: index.php");
?>