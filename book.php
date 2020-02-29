<?php include ('config.php');

if(empty($_SESSION['GCELT'])){
	header('location:index.php');
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
			font-family:Consolas;
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
			<section id="post" class="wrapper bg-img" data-bg="banner3.jpg">
				<div class="inner" style="width:100%; height:150%;">
												
                       <h1 align="center" style="font-family:segoe script">-- Book a Car --</h1>
                       <hr color="#FFFFFF">
                        
                        
                        
                                    
                                    
                                    
                                    
                                    
                             
                                    
                                   <?php
								    $query=mysqli_query($con,"SELECT * FROM car");
	
	#now checking the number of rows found
	if(mysqli_num_rows($query))
	{
		 
          
		  $c=654445;
		  while($bag=mysqli_fetch_array($query))
          {
			  ?><article class="box" align="center" style="width:50%; border-radius:50px; height:auto; float:right;" >
						
						<div class="content">

			  
			  
			<span class="image left" style="width:200px;"><?php $view_user=mysqli_query($con,"SELECT * FROM car WHERE vehicleid='$c'") or die(mysqli_error($con));
													if($view_user)
													{
														$bag=mysqli_fetch_array($view_user);
														
														
													}?><img src="admin/<?php echo $bag['fpath'];?>" alt="" height="170px" /></object></span>
			              
             <p><p1>Name: </p1> <?php echo $bag['name']?><br> 
                           <p1> Type:</p1> <?php echo $bag['type'] ?><br>
                            <p1>Registration No.: </p1> <?php echo $bag['regno']?><br>
                            <p1>Seating Capacity: </p1> <?php echo $bag['seatingcap']?><br>
                            <p1>Fare/K.M:</p1> <?php echo $bag['fareperkm']?><br>
                            <p1>Name of Driver: </p1> <?php $driverid=$bag['driverid'];$view_user1=mysqli_query($con,"SELECT * FROM driver WHERE driverid= '$driverid'") or die(mysqli_error($con));
													if($view_user1)
													{
														$bag1=mysqli_fetch_array($view_user1);
														echo $bag1['name'];
													}?> </p>
                            <ul class="actions fit" style="border-radius:35px;">
									<li style="font-family:segoe script; border-radius:35px;"><a href="booking.php?id=<?php echo $bag['vehicleid'];?>" class="button special fit">Ride now </a></li>
                                    </ul>
                                    </div></div></article>
                        
                        
                        
               
                       
			  
			 <?php
             $c++;   
		 
         
          }
          
	}
	else
	{
		?><script>
		alert('No Results Found......');
		</script><?php
	}
                                    
    ?>                                
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                        
						
                        
                        
                        
                        
                        
                       
						
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
				</div>    
                    
                    
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