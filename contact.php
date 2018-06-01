<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>contact</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styl.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
<a class="navbar-left" ><img src ="logo.gif" style="width:75px;height: 75px" ><font color="white" style="font-weight:bold;font-size:4em:">eBON</font></a>
</div>   
    <ul class="nav navbar-nav navbar-right">
     <li class="active"><a href="index.php">Home</a></li>
      
      <li><a href="about.php">about us</a></li>
      <li><a href="register.php">register</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="contact.php">contact us</a></li>
    </ul>
  </div>
  </nav>

</head>
<body >
<img src="rr.jpg" alt="ebooks" style="width:1300px;height: 200px">

<h1>CONTACT US</h1>
<p  style="color:black;font-size:20px;">MOBILE NO1:9497229172</p>
<p style="color:black;font-size:20px;">MOBILE NO2:9497229173</p>
<p style="color:black;font-size:20px;">EMAILID:sreedevi@gmail.com</p>

<div id="page">
            <!-- start content -->
              <div id="content">
                <div class="post">
                  <h1 class="title"></h1>
                  
                  <div class="entry" >
                  
                    <form action="process_contact.php" method="POST" class="form-signin">
                        

                      <br>Name :<br>
                        <input type='text' name='nm'  class="form-control" size=35>
                        <br><br><br>
                        
                        E-mail ID:<br>
                        <input type='text' name='email'  class="form-control" size=35>
                        <br><br><br>
                        
                        Query:<br>
                        <textarea cols="40" rows="10" class="form-control" name='query' ></textarea>
                        <br><br><br>

                        <input  type='submit' name='btn' value='   OK   '  >

                        
                    </form>
                  
                  </div>
                  
                </div>
                
              </div>

            <div style="clear: both;">&nbsp;</div>
          </div>
<div id="footer">
      <?php
include("footer.inc.php");
      ?>
</div>
</body>
</html>