<?php  
session_start();
 require('connect.php');


if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = md5( $_POST['password']);

$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
if($_SESSION['username']!="admin")
  {
            header("location:books.php");
          }
          else
          {
            header("location:admin/index.php");
          }
}else{

$fmsg = "Invalid Login Credentials.";
}
}
 

?>
<html>
<head>
  <title>User Login Using PHP & MySQL</title>

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
  
<link rel="stylesheet" type="text/css"   href="styles.css" >


</head>
<body>
<img src="rr.jpg" alt="ebooks" style="width:100%;height:40%;">

        <h1>Your password has been sent to your registered email id</h1>

<div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">@</span>
    <input type="text" name="username" class="form-control" placeholder="Username" required>
  </div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
       <button class="btn btn-lg btn-primary btn-block"   type="submit" 
>Login </button>

        




              <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>

              <a  href="email.php">forgot password</a>
      </form>
</div>

<div id="footer">
      <?php
include("footer.inc.php");
      ?>
</div>
</body>

</html>
<?php ?>