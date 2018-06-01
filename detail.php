<?php session_start();
	require('config.php');
	
	$id=$_GET['id'];
	
	$q="SELECT * FROM `cc`. `book` WHERE b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      

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
									<h1 class="title"><?php echo $row['b_nm'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_nm'].'</td>
															</tr>

															
															<tr>
																<td align="right">ISBN</td>
																<td>: </td>
																<td align="left">'.$row['b_isbn'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['b_publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['b_edition'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">  PAGES</td>
																<td>: </td>
																<td align="left">'.$row['b_pages'].'</td>
															</tr>
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['b_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												<tr valign="bottom" >
												
														<a href="'.$row['b_img'].'" rel="lightbox"><img src="zoom.gif" ></a>
													
												</tr>
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 
											 '.$row['b_desc'].'
																				

											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['username']))
												 
													{echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">
														<img src="addcart.jpg">
													</a></td>';
							}
							else
												{
													echo '<td><img src="addcart.jpg"><br><a href="login.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>
						
							<!-- end sidebar -->
								<div style="clear: both;">&nbsp;</div>
				
				</div> 
<div id="footer"> 
      <?php
include("footer.inc.php");
      ?>
</div>			
</body>
</html>
