<?php
                   include('admin/config.php'); 
             ?>
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Road Trip by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Road Trip <span>by TEMPLATED</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php
			
			require('navpro.inc.php');
			
if(!empty($_GET['id']))
{ 
    $id=$_GET['id'];
	$view_user=mysqli_query($con,"SELECT * FROM car WHERE vehicleid = '$id'") or die(mysqli_error($con));
	
	if(mysqli_num_rows($view_user)>0)
	{
		# get user data from table signup via mysqli_fetch_array
		$car=mysqli_fetch_array($view_user);
	}
}
?>
			
			
			
			

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="banner3.jpg">
				<div class="inner" style="width:50%">
					<article class="box" style="border-radius:50px;">
						<form method="post">
                      
                        <h3 align="center" style="font-family:segoe script">-- Car Booking --</h3>
                        <div class="row uniform">
     
                                        
                                       
                                        <div class="6u 12u$(xsmall)" align="center">
											<div class="select-wrapper" align="center">
												<select name="source" id="source" >
													<option value="" style="color:#000">-- Select Source --</option>
                                                    <?php $view_user=mysqli_query($con,"SELECT * FROM route") or die(mysqli_error($con));
													if(mysqli_num_rows($view_user))
													{
                                                       $c=9112;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['source'];?>" style="color:#000"><?php echo $bag['source'];?></option>
														
														<?php $c++;
													  }
													}
													?>
                                                    </select>
											   </div>
										</div>
                                        <div><input type="submit" value="Select" name="submit"/></div>
                                        </div>
                                        </form>
                                        
                                        
                                        
                                        
                                        <form method="post" action="invoice.php" >
                                      
                                       <div class="row uniform">
                                       <?php
									   if(isset($_POST['submit']))
									   {
										   $source=$_POST['source'];
										   ?>
                                           
                                           
                                            <div class="12u$">
                                           <table>
                                                    <tr>
<td width="50%" align="center"><p>Source :</p></td>
<td><input type="text" name="source" value="<?php echo $source;?>" readonly/></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>


                                           
                                           
                                           
                                           
                                           
                                                    <tr>
<td width="50%" align="center"><p>Destination</p></td>
<td><div class="select-wrapper">
												<select name="destination" id="destination">
													<option value="" style="color:#000">-- Select Destination --</option>
										  			 <?php $view_user=mysqli_query($con,"SELECT * FROM route WHERE source='$source'") or die(mysqli_error($con));
													if(mysqli_num_rows($view_user))
													{
                                                       $c=9112;
													   while($bag=mysqli_fetch_array($view_user))
													   {
														   ?><option value="<?php echo $bag['destination'];?>" style="color:#000"><?php echo $bag['destination'];?></option>
														<?php $c++;
													  }
													}
													?> </select>
                                                    </div></td>

</tr>
                                           
                                           
                                           
                                           
                                           
                                           
                               
                                        
                                            
                                                    
                                                    
                                                   
                                                   
                                                    <tr>
<td width="50%" align="center"><p>Fare per K.M:</p></td>
<td><input type="text" name="fareperkm" value="<?php echo $car['fareperkm']?>" readonly/></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>


<tr>
<td width="50%" align="center"><p>Driver ID:</p></td>
<td><input type="text" name="driverid" value="<?php echo $car['driverid']?>" readonly/></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Car registration no:</p></td>
<td><input type="text" name="regno" value="<?php echo $car['regno']?>" readonly /></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>
                                                    
                                                   
													
                                                    <tr>
<td width="50%" align="center"><p>Enter the date:</p></td>
<td><input type="text" name="date" value=""></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>
</table></div>
                                                    
                                                    
                                                    
													
                                        
                                        
													
													
												
													
													</div>
													<?php
                                                    
									   }
									   ?>
                                       
                                        
                                        
                                        <div class="12u$">
											<div class="row uniform" style="margin-right:50px; margin-left:50px;" align="center">
									            <div><a href="bookaride.php"><button name="back" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><input type="submit" name="submit" value="Register"></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
                                        <br>
                                        
                                       
                                        
                                        </form>
						
					
                    
                   
				</article>
                    
				</div>
			</section>

		<!-- Footer -->
			<?php
			require('footer.inc.php');
			?>
            

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>