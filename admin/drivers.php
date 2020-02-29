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
						<form method="post">
                        <h3 align="center" style="font-family:segoe script">Add Drivers</h3>
                        <div class="row uniform">
     
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="name" id="name" placeholder="Enter the  Driver Name :- " value=""/>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="street" id="street" placeholder="Enter the address :- " value=""/>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="location" id="location" placeholder="Enter the Landmark :- " value=""/>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="city" id="city" placeholder="Enter the city :-" value=""/>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="state" id="state" placeholder="Enter the state :-" value=""/>
										</div>
                                        
                                            <div class="6u 12u$(xsmall)">
					<input type="text" name="pincode" id="pincode" placeholder="Enter the Pincode :-" value=""/>
										</div>
                                        
                                                 <div class="6u 12u$(xsmall)">
					<input type="text" name="mob" id="mob" placeholder="Enter the contact no :-" value=""/>
										</div>
                                        
                                                          <div class="6u 12u$(xsmall)">
					<input type="text" name="lin" placeholder="Enter the licence no :-" value=""/>
										</div>
                                       	
                                       <div class="12u$">
											<div class="row uniform" style="margin-right:130px; margin-left:130px;" align="center">
									            <div><a href="profile.php"><button name="name" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><input type="submit" name="submit" value="Submit"></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											</div></div></form>
						</select>
                        
                        <form method="post">
									<input type="submit" name="view" value="Registered Drivers">
                                    
                                    </form>
											</div>
										</div>
					
                    
                    <?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$street = $_POST['street'];
	$location = $_POST['location'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$mob = $_POST['mob'];
	$lin = $_POST['lin'];
	
			
	if($name!=0 || $street!=0 || $location!=0 || $city!=0 || $state!=0 || $pincode!=0 || $mob!=0 || $lin!=0)
	{
		$check=mysqli_query($con,"SELECT * FROM driver WHERE lin like '$lin'") or die(mysqli_error($con));
		$r=$check->num_rows;
		if($r==0)
		{	
		    #insert into database
			$insert=mysqli_query($con,"INSERT INTO driver values('','$name','$street','$location','$city','$state','$pincode','$mob','$lin')") or die(mysqli_error($con));
			if($insert)
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete.Your generated ID is:<?php echo $driverid ?>......')
        		</script>
				<?php
			}
			else
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,registration is not done ......')
        		</script>
				<?php
			}
		}
		else
		{
			
			?><script>
			alert('Licence no is already registered.Please try again with another no......')
       	 </script>
			<?php
		}
     
	}
	else
	{
		?><script>
		alert('Please fillup all the entries......')
       	</script>
		<?php
		
	}
}
?>

<?php
if(isset($_POST['view']))
{
	$query=mysqli_query($con,"SELECT * FROM driver");
	
	#now checking the number of rows found
	if(mysqli_num_rows($query))
	{
		?><h2 align="center" style="font-family:segoe script; ">View All Registered Drivers :</h2>
        <table border="1" align="center" width="60%" height="auto" >
          <thead>
          <tr>
          	<th> <p>Id.</p> </th>
	     	<th> <p>Name </p></th>
            <th> <p>Address </p></th>
			<th> <p>location </p></th>
            <th> <p>City </p></th>
            <th> <p>State </p></th>
    		<th> <p>Pincode </p></th>
            <th> <p>Contact no </p></th>
            <th> <p>Licence No </p></th>
            <th> <p>Update </p></th>
            <th> <p>Delete </p></th>
    		</tr>
          </thead>
          <tbody>
          <?php
		  $c=1;
		  while($bag=mysqli_fetch_array($query))
          {?>
          <tr>
		  <td><p><?php echo $bag['driverid']?></p></td>
          <td><p><?php echo $bag['name']?></p></td>
          <td><p><?php echo $bag['street']?></p></td>
          <td><p><?php echo $bag['location']?></p></td>
          <td><p><?php echo $bag['city']?></p></td>
          <td><p><?php echo $bag['state']?></p></td>
          <td><p><?php echo $bag['pincode']?></p></td>
          <td><p><?php echo $bag['mob']?></p></td>
          <td><p><?php echo $bag['lin']?></p></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update Mr/Mrs.<?php echo $bag['name']?>?')" href="updriver.php?driverid=<?php echo $bag['driverid']?>"><img src="2.png"></a></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete Mr/mrs.<?php echo $bag['name']?>?')" href="deldriver.php?driverid=<?php echo $bag['driverid']?>"><img src="1.gif"></a></td>
          </tr>
          <?php
		  $c++;}?>
          </tbody>
          </table>
          <?php
	}
	else
	{
		?><script>
		alert('No Results Found......');
		</script><?php
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