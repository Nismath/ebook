


<html>
<head>
	<title>about us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<body>
<img src="rr.jpg" alt="ebooks" style="width:100%;height:50%;">

<h1> ABOUT US </h1>

<?php 
echo '<span style="color:black;text-align:center;font-size:20px;font-family:italic;">THIS IS ONE OF THE BEST SITE FOR BUYING AND SELLING OLD BOOKS.PURCHASING OF NEW BOOKS IS ALSO POSSIBLE HERE.BILL RECIEPT WILL BE SEND TO YOUR EMAIL ADDRESS.ONLY USERS WITH ACCOUNT ARE ABEL TO SELL AND BUY BOOKS</span>'
?>

<div id="footer">
      <?php
include("footer.inc.php");
      ?>
</div>

</body>
</html>