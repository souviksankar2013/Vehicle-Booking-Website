<?php include ('config.php');


if(empty($_SESSION['GCELT'])){
	header('location:index.php');
	exit();
}
if(empty($_POST)){
	header('location:profile.php');
	exit();
}
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
        <style>
        p
        {
			font-family:consolas;
			font-size:16px;
			
		}
		p1
		{
			font-family:Consolas;
			font-size:18px;
			
		}
        </style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">LineBus <span>Bus Booking Service</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php
			require('navpro.inc.php');?>
            

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="banner3.jpg" style="height:700px;">
				<div class="inner" style="width:99%;" >
					
                        <article class="box" style="border-radius:50px; width:35%; float:left ">
						<div class="content" align="center">
                          <h3 align="center" style="font-family:segoe script">-- user information --</h3>
                          <hr color="#FFFFFF">
							<p> <p1>Registration No : </p1> <?php echo $_SESSION['GCELT']['regno']?><br>
                            <p1>Name : </p1> <?php echo $_SESSION['GCELT']['name']?><br>
                            <p1> Date of Birth:</p1> <?php echo $_SESSION['GCELT']['birth']?><br>
                           <p1>Gender : </p1> <?php echo $_SESSION['GCELT']['gen']?><br>
                            <p1>Address: </p1> <?php echo $_SESSION['GCELT']['address']?><br>
                            <p1>Landmark: </p1> <?php echo $_SESSION['GCELT']['landmark']?><br>
                            <p1>City : </p1> <?php echo $_SESSION['GCELT']['city']?><br>
                            <p1>State : </p1> <?php echo $_SESSION['GCELT']['state']?><br>
                            <p1>Pincode : </p1> <?php echo $_SESSION['GCELT']['pin']?><br>
                            <p1>Contact no :</p1> <?php echo $_SESSION['GCELT']['mob']?><br>
                            <p1>E-Mail: </p1> <?php echo $_SESSION['GCELT']['email']?></p>
                            </div></article>
                           
						   
						   <?php
						  $driverid=$_POST['driverid'];
						  $regno=$_POST['regno'];
						  $driver=mysqli_query($con,"SELECT * FROM driver WHERE driverid='$driverid'") or die(mysqli_error($con));
						  $car=mysqli_query($con,"SELECT * FROM car WHERE regno='$regno'") or die(mysqli_error($con));
						  $bag=mysqli_fetch_array($car);
						  $bag1=mysqli_fetch_array($driver);
						   $source=$_POST['source'];
						  $destination=$_POST['destination'];
						  $route=mysqli_query($con,"SELECT * FROM route WHERE source='$source' AND destination='$destination'") or die(mysqli_error($con));
						  $bag2=mysqli_fetch_array($route);
						  $t=$bag['fareperkm']*$bag2['km']+60+15+7.50;
						  ?>
                          
                         <article class="box" style="border-radius:50px; width:30%; float:right; ">
						<div class="content" align="center"> 
                        <h3 align="center" style="font-family:segoe script">-- Cost Details --</h3>
                        <hr color="#FFFFFF">
                          <p><p1>Source : </p1> <?php echo $bag2['source'];?><br>
                          <p1>Destination : </p1> <?php echo $bag2['destination'];?><br>
                          <p1>Distance(in K.M.) : </p1> <?php echo $bag2['km'];?><br>
                          <p1>Fare/K.M : </p1>Rs. <?php echo $bag['fareperkm'];?><br>
                          <p1>VATE : </p1>Rs. 60<br>
                          <p1>TAX : </p1>Rs. 15<br>
                          <p1>OTHER CHARGES : </p1>Rs. 7.50<br>
                          <p1>TOTAL COST : </p1>Rs. <?php echo $t;?> <br>
                          </p>
                          <div class="12u$">
                          <form action="payment.php" method="post">
                          						<div class="row uniform" style="margin-right:5px; margin-left:5px;" align="center">
									            <div><input type="hidden" name="totalcost" value="<?php echo $t;?>" />
                                                <a href="profile.php"><button name="name" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><input type="submit" value="Payment" name="submit"/></div>
                                                
											
											
										</div>
						</div>
						</article>
                          
                          <article class="box" style="border-radius:50px; width:35%; float:right; ">
						  <div class="content" align="center"> 
                          <h3 align="center" style="font-family:segoe script">-- Car information --</h3>
                          <hr color="#FFFFFF">
                          <p> <p1>Vehicle id : </p1> <?php echo $bag['vehicleid'];?><br>
                          <p1>Car Registration no : </p1> <?php echo $bag['regno'];?><br>
                          <p1>Car Name : </p1> <?php echo $bag['name'];?><br>
                          <p1>Type : </p1> <?php echo $bag['type'];?><br>
                          <p1>Seating Capacity : </p1> <?php echo $bag['seatingcap'];?><br>
                          <p1>Driver Name : </p1> <?php echo $bag1['name'];?><br>
                          <p1>Driver id : </p1> <?php echo $bag1['driverid'];?><br>
                          <p1>Licence no : </p1> <?php echo $bag1['lin'];?><br>
                          <p1>Contact no : </p1> <?php echo $bag1['mob'];?><br>
                          <p>
                          </p></p></div></article>
                          
						
				
                
                
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