<?php
  
session_start();
 extract($_POST);
 extract($_SESSION);

 
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
	$query="INSERT INTO `cc`.`shipping_details` (`id`, `name`, `address`, `city`, `state`) VALUES (NULL,'$name','$address','$city','$state')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

	header("location:payment_details.php");
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="footer.css">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
<a class="navbar-left" ><img src ="logo.gif" style="width:75px;height: 75px" ><font color="white" style="font-weight:bold;font-size:4em:">eBON</font></a>
</div>
<ul class="nav navbar-nav navbar-right">
     
      <li><a href="/cc/logout.php">logout</a></li>
      
      <li><a href="/cc/viewcart.php">viewcart</a></li>
      <li><a href="/cc/books.php">myprofile</a></li>
      <li><a href="imge/addbooks.php">upload</a></li>
      
     
      <li id="search">
        <form method="GET" action="/cc/search_result.php">
          <fieldset>
          <input type="text" id="s" name="s" value="" />
          <input type="submit" id="x" value="Search" />
          </fieldset>
        </form>
      </li>
    </ul>
  </div>
</nav>      	
</head>

<body background="ttttt.jpg">
            
    <img src="rr.jpg" style="width: 1300px;height: 200px">      
			<h1>shipping details</h1>
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="POST"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="address">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
               
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="city"> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="state"> 
             <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
<div id="footer">
      <?php
include("footer.inc.php");
      ?>
</div>
</body>
</html>