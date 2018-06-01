<?php
  require('connect.php');
    
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
  $email = $_POST['email'];
        $password = md5($_POST['password']);

 
        $query = "INSERT INTO `cc`.`user` (`username`, ` email`, `password`)VALUES ('$username', '$email','$password')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }

  ?>
  <html>
<head>
     <title>register</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
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
   <img src="rr.jpg" alt="ebooks" style="width:100%;height:30%;">
    <div class="container">
         <form class="form-signin" method="POST">
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading" style="color:black;">Please Register </h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">@</span>
    <input type="text" name="username" class="form-control" placeholder="Username" required>
  </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <div class="checkbox">
          <label style="color:black;">
            <input type="checkbox" value="remember-me">  Remember me
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
            
      </div>


    <div id="footer">
      <?php
include("footer.inc.php");
      ?>
</div>
     </body>
     </html>