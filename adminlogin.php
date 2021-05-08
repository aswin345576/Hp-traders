<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Rickys web templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="logo">
		 <h1>Web based Fabric Order System</h1>
		<p>HP TRADERS</p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
			<li><a href="index.php" class="first">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="login.php">Login</a></li>
                
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
	<div id="page-bgtop">
		<div id="content">
			<div class="post">
				<h2 class="title" align="left"><table width="655" border=0><tr><td width="364"><a href="#">Admin Login</a></td><td width="281" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:18px; color:#930"></td></tr></table></h2>
				<div class="entry">
				  <form id="form1" method="post" action="adminlogin.php">
				  <table width="325" height="134" border="0" align="left" cellpadding="3" cellspacing="0">
			        <tr>
			          <td width="98">Username</td>
			          <td width="215"><span id="sprytextfield1">
			            <label>
			              <input type="text" name="uname" id="uname" />
		              </label>
		              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
		            </tr>
			        <tr>
			          <td>Password</td>
			          <td><span id="sprypassword1">
			            <label>
			              <input type="password" name="upass" id="upass" />
		              </label>
		              <span class="passwordRequiredMsg">A value is required.</span></span></td>
		            </tr>
			        <tr>
			          <td>&nbsp;</td>
			          <td><label>
			            <input type="submit" name="login" id="login" value="Submit" />
		              </label></td>
		            </tr>
			        <tr>
			          <td>&nbsp;</td>
			          <td>
                      <?php
							 
							if(isset($_REQUEST['login']))
							{
								$un=$_REQUEST['uname'];
								$up=$_REQUEST['upass'];
								if($un=='admin' and $up=='admin'){
									header("location:admin/index.php");
								}
								else
								{
									echo "Invalid User Name/ Password";
							
								}
							}
							?>
                      </td>
		            </tr>
		          </table>
			      </form>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>
	          </div>
			</div>
	  </div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>&nbsp;</h2>
			  </li>
				<li> </li>
			</ul>
</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer-bgcontent">
	<div id="footer">
		<p>&nbsp;</p>
	</div>
	</div>
	<!-- end #footer -->
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
//-->
</script>
</body>
</html>
