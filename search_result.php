<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="SELECT * FROM `cc`. `book` WHERE  b_nm LIKE '%$search%' ORDER BY b_price ASC";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

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
			
<img src="rr.jpg" alt="HTML5 Icon" style="width:1300px;height: 300px">
				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
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
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
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
