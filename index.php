<?php
require('includes/config.php');
 session_start();
  
  
  
  
  $query="SELECT * FROM `cc`. `book`  WHERE b_id BETWEEN '1' AND '10'";
  
  $res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>
<html>
<head>
<title>home </title>
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
      <li><a href="about.php">About Us</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="login.php">Admin</a></li>
    </ul>
  </div>
</nav>


</head>

<body>
<img src="rr.jpg" alt="HTML5 Icon" style="width:100%;height:0%">
<h1>Welcome to 
              Ebooks             </h1>
              <font color="black"><marquee direction="left" style="background: white; font-weight:bold;font-size:2em">REGISTER NOW....!! Special offers </marquee></font>

<font color="black"><marquee direction="left" style="background:white;font-weight:bold;font-size:1.7em">15% Discount</marquee></font>

        <div id="page">
         
              <div id="content">

                <div class="post">
                 
                  <h1 class="title" ></h1>
                  <div class="entry">
                  <table noborder width="100%">
            
                
                
              
                      <?php
                        $count=0;

                        while($row=mysqli_fetch_assoc($res))
                        {
                          if($count==0)
                          {
                            echo '<tr>';
                          }
                          
                          echo '<td valign="top" width="20%" align="center">
                            <a href="detail.php?id='.$row['b_id'].'">
                            <img src="'.$row['b_img'].'" width="200" height="200">
                            <br>'.$row['b_nm'].' </a>
                          </td> ';
                          $count++;             
                          
                          if($count==4)
                          {
                            echo '</tr>';
                            $count=0;
                          }

                        }
                      ?>
                      
                  </table>
                    
                  </div>
                 
                  
                </div>
                
              </div>
          
          <div style="clear: both;">&nbsp;</div>
        </div>
      <!-- end page -->
      
<div id="footer">
      <?php
include("footer.inc.php");
      ?>
</div>
          
              








</body>
</html>