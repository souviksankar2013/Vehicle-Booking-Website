<?php
                   include('config.php'); 
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
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="profile.php">Logged as <span>Admin</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php
			
			require('navadmin.inc.php');
			?>

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner">
					<article class="box" style="border-radius:50px;">
						<form method="post" enctype="multipart/form-data">
                        <h3 align="center" style="font-family:segoe script">Add Cars</h3>
                        <div class="row uniform">
     
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="vehiclename" id="vehiclename" value="" placeholder="Enter Vehicle Name"  />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="vehicletype" id="vehicletype" value="" placeholder="Enter Vehicle Type" />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="regno" id="regno" value="" placeholder="Enter Vehicle Registration Number"  />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="capacity" id="capacity" value="" placeholder="Enter Seating Capacity"  />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="fareperkm" id="fareperkm" value="" placeholder="Enter Fair/K.M" />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="driver" id="driver">
													<option value="" style="color:#000">--Select Driver--</option>
													<option value="<?php $view_user=mysqli_query($con,"SELECT * FROM driver WHERE driverid='7829'") or die(mysqli_error($con));
													if($view_user)
													{
														$bag=mysqli_fetch_array($view_user);
														echo $bag['driverid'];
														} ?>" style="color:#000"><?php $view_user=mysqli_query($con,"SELECT * FROM driver WHERE driverid='7829'") or die(mysqli_error($con));
													if($view_user)
													{
														$bag=mysqli_fetch_array($view_user);
														echo $bag['name'];
														} ?></option>
													
                                                    
                                                    
                                                   
                                                   
                                                    <option value="<?php $view_user=mysqli_query($con,"SELECT * FROM driver WHERE driverid='7830'") or die(mysqli_error($con));
													if($view_user)
													{
														$bag=mysqli_fetch_array($view_user);
														echo $bag['driverid'];
														} ?>" style="color:#000"><?php 
														echo $bag['name'];
														 ?></option>
													
                                                    
                                                    
                                                    
                                                    
                                                    <option value="<?php $view_user=mysqli_query($con,"SELECT * FROM driver WHERE driverid='7831'") or die(mysqli_error($con));
													if($view_user)
													{
														$bag=mysqli_fetch_array($view_user);
														echo $bag['driverid'];
														} ?>" style="color:#000"><?php 
														echo $bag['name'];
														 ?></option>
													
												</select>
											</div>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">Upload Photo
					<input type="file" name="file" id="file" value="" />
										</div>
                                        
                                        <div class="12u$">
											<div class="row uniform" style="margin-right:170px; margin-left:170px;" align="center">
									            <div><a href="profile.php"><button name="name" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><input type="submit" value="Register" name="submit"/></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
                                        <br>
                                        
                                       <form method="post">
									<input type="submit" name="view" value="Registered Cars">
                                    
                                    </form>
                                        
                                        </form>
						
					
                    
                    <?php
			if (isset($_POST['submit']))
			{
				#Collect all Variables in Local Variables
				
				$vehname=$_POST['vehiclename'];
				$vehtype=$_POST['vehicletype'];
				$regno=$_POST['regno'];
				$capacity=$_POST['capacity'];
				$fare=$_POST['fareperkm'];
				$driverid=$_POST['driver'];
				
				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];
				
				if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG"){

	# create server path
	$server_path = "uploaded_IMAGES/".rand(0000,9999).$file_name;
	
	
	# upload the file in server directory
	$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path) or die($_FILES['file']['error']);
	
	
	if($up){
		#lets save the data in database table named signup
		$insert = mysqli_query($con,"INSERT INTO car values ('','$vehname','$vehtype','$regno','$capacity','$fare','$server_path','$driverid')") or die(mysqli_error($con));
		
		if($insert){
		
			?><script>
				alert('Data Has been Saved')
        		</script>
				<?php
		}
	}

}
	
}
?>

				<?php
				
				if(isset($_POST['view']))
{
$Query=mysqli_query($con,"SELECT * FROM car");

#now check how many rows found;

if(mysqli_num_rows($Query)>0)
{
	?><table cellpadding="5" border="5">
	<thead>
	<tr>
	<th>Vehicle ID </th>
	<th>Vehicle Name</th>
	<th>Vehicle Type</th>
    <th>Vehicle Registration No.</th>
    <th>Vehicle Capacity</th>
    <th>Fare/K.M</th>
    <th>Image</th>
    <th>Driver ID</th>
    <th>Delete</th>
    <th>Update</th>
    
    </tr>
    </thead>
    <tbody>
    <?php 
	
	while ($bag=mysqli_fetch_array($Query))
	{
		?>
    <tr>
    <td><?php echo $bag['vehicleid']?></td>
    <td><?php echo $bag['name']?></td>
    <td><?php echo $bag['type']?></td>
    <td><?php echo $bag['regno']?></td>
    <td><?php echo $bag['seatingcap']?></td>
    <td><?php echo $bag['fareperkm']?></td>
    
    <td><a href="<?php echo $bag['fpath']?>" target="_blank"><img src="<?php echo $bag['fpath']?>" width="115" height="74"></a></td>
    <td><?php echo $bag['driverid']?></td>
    <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete Mr./Ms.<?php echo $bag['name']?>')" href="deletecars.php?id=<?php echo $bag['vehicleid']?>"><img src="delete.jpg" height="55" width="50"></a></td>
    <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update Mr./Ms.<?php echo $bag['name']?>')" href="upcars.php?id=<?php echo $bag['vehicleid']?>"><img src="update.png" height="55" width="50"></a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php
}
else{
	echo "No Results Found";
}
}

?>

				</article>
                    
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="copyright">
						Copyright &copy; All Rights Reserved &reg; Created By GCELT PHP Batch. Design: <a href="http://www.gcelt.gov.in">GCELT PHP Batch.</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>