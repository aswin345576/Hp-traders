<?php //echo $cat;?>
<?php session_start(); ?>
					
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Rickys web templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="logo">
	  <h1>Web based Fabric Order System</h1>
		<p><em>E</em>HP TRADERS</p>
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
				<h2 class="title"><table width="655" border=0>
                <tr><td width="207"><p><a href="#"><font color="#990033" size="1">WELCOME  <?php $user=$_SESSION['user']; echo $user." !!!"."<br/>";?></font></td>
				     
				      <a href="#">ORDER PRODUCT</a></p></td><td width="89" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:18px; color:#930"><?php //echo $res; ?></td></tr></table></h2>
				<div class="entry">
				  <div class="entry">
                  <form id="frmproducts" method="post" action="orderproduct.php" enctype="multipart/form-data">
                  <?php
				  if(isset($_REQUEST['cat']))
				  {
					  $cat=$_REQUEST['cat'];
					  $pid=$_REQUEST['pid'];
					  $pname=$_REQUEST['pname'];
			
					?>
			      <table width="500" border="0" cellspacing="0" cellpadding="3">
	              <tr>
			            <td height="37">Product ID </td>
			            <td><input type="text" name="pid" size="30" id="pid"  value="<?php echo $pid; ?>" /></td>
		              </tr>
			          <tr>
			            <td height="35">Category</td>
			            <td><input type="text" name="cat" size="30" id="cat"  value="<?php echo $cat; ?>" /></td>
		              </tr>
			          <tr>
			            <td height="36">Product Name</td>
			            <td><input type="text" name="pname" size="30" id="pname"  value="<?php echo $pname; ?>" /></td>
		              </tr>
			          <tr>
			            <td height="39">Qty</td>
			            <td><input type="text" name="qty" size="30" id="qty"  /></td>
		              </tr>
                      
						          <tr>
			            <td>&nbsp;</td>
			            <td><input type="submit" id="submit" value="Order" name="submit"/></td>
		              </tr>
			          <tr>
			            <td>&nbsp;</td>
			            <td></td>
		              </tr>
		            </table>
                    <?php
				  }
				  else
				  { ?>
                  <table width="500" border="0" cellspacing="0" cellpadding="3">
	              <tr>
			            <td height="37">Product ID</td>
			            <td><input type="text" name="pid" size="30" id="pid"   /></td>
		              </tr>
			          <tr>
			            <td height="35">Category</td>
			            <td><select name="cat2" id="cat2">
			              <option value="Boys Wear">Boys Wear</option>
			              <option value="Girls Wear">Girls Wear</option>
			              <option value="Kides Wear">Kides Wear</option>
		                </select></td>
		              </tr>
			          <tr>
			            <td height="36">Product Name</td>
			            <td><input type="text" name="pname" size="30" id="pname"  /></td>
		              </tr>
			          <tr>
			            <td height="39">Qty</td>
			            <td><input type="text" name="qty" size="30" id="qty"  /></td>
		              </tr>
			          <tr>
			            <td height="40">&nbsp;</td>
			            <td>&nbsp;</td>
		              </tr>
			          <tr>
			            <td>&nbsp;</td>
			            <td><input type="submit" id="submit" value="Order" name="submit"/></td>
                        <?php } ?>
		              </tr>
			          <tr>
			            <td>&nbsp;</td>
			            <td>
                        <?php
							include("connect.php");
							if(isset($_REQUEST['submit']))
							{
								$user=$_SESSION['user'];
								$pid=$_REQUEST['pid'];
								$cat=$_REQUEST['cat'];
								$pname=$_REQUEST['pname'];
								$qty=$_REQUEST['qty'];
								$odate=gmdate("d/m/Y");
								$qry="insert into tbl_order (odate, oby, pid,cname,pname,qty,oc) values('".$odate."', '".$user."', '".$pid."', '".$cat."', '".$pname."', ".$qty.",'No')";
							//echo $qry;
								$rs=mysql_query($qry,$con);
								//echo $rs;
								if($rs)
									echo "Order Placed Successfully";
								else
									echo "Order Not Placed.<br>Pls Contact Admin";
							}
							?>
										
                        </td>
		              </tr>
		            </table>
                    
			        <input type="hidden" name="MM_insert" value="frmproducts" />
		          </form>
			      <p align="rifht">&nbsp;</p>
			  </div></div>
			</div>
	  </div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
			  <li>
					<h2>&nbsp;</h2>
				<h2>&nbsp;</h2>
				  <ul>
				    <li><a href="userhome.php">Home</a></li>
                    <li><a href="viewproduct.php">View Product</a></li>
                    <li><a href="orderproduct.php">Order Product</a></li>
                    <li><a href="vieworder.php">View Orders</a>
                    <li><a href="index.php">Sign Out</a></li>
                    <li></li>
				    <li></li>
			    </ul>
			  </li>
			</ul>
</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer-bgcontent">
	<div id="footer">
		<p>Copyright  2010 YourSitename.com. All rights reserved. Design by <a href="http://www.rickyswebtemplates.com/">Ricky's Free web templates</a>.</p>
	</div>
	</div>
	<!-- end #footer -->
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
