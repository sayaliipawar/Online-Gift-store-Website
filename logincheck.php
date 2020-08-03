<?php
$unerror=$passerror="";
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['pwd'];
//connect to the server and select the database
$db=mysqli_connect("localhost","root","","giftstore");
//query
$usercheck="SELECT * FROM signup where username= '$username'";
$result=mysqli_query($db,$usercheck);

if(mysqli_num_rows($result) == 0)
{ 
	$unerror="*User Does Not Exist";
}
else 
{
	$usercheck="SELECT * FROM signup where username= '$username' AND password='$password'";
	$result=mysqli_query($db,$usercheck);
	if(mysqli_num_rows($result) == 0)
	{
  	$passerror="*Invalid Password";
    }
else{
    	session_start();
		$_SESSION['userid']=$_POST['username'];
		if(empty($_SESSION['shopping_cart']))
		{
			$_SESSION['user_cart']=array();
			
		}
		
	header("Location:index.php");
    }
}
}
?>