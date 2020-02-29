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
				<div class="logo"><a href="profile.php">Logged as <span><?php echo $_SESSION['GCELT']['name']?></span></a></div>
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
			<section id="post" class="wrapper bg-img" data-bg="banner3.jpg">
				<div class="inner">
					
						

				<?php
				
				
$Query=mysqli_query($con,"SELECT * FROM user");

#now check how many rows found;

if(mysqli_num_rows($Query)>0)
{
	?>
    <h2 align="center" style="font-family:segoe script; ">View All Registered Users :</h2>
    <table border="1" align="center" width="60%" height="auto">
	<thead>
	<tr>
    <th>Image</th>
	<th>Reg No. </th>
	<th>Name</th>
	<th>Date of Birth</th>
    <th>Gender</th>
    <th>Address</th>
    <th>LandMark</th>
    
    <th>City</th>
    <th>State</th>
    <th>Pin Code</th>
    <th>Mobile</th>
    <th>E-Mail</th>
    
    </tr>
    </thead>
    <tbody>
    <?php 
	
	while ($bag=mysqli_fetch_array($Query))
	{
		?>
    <tr>
    <td><a href="<?php echo $bag['fpath']?>" target="_blank"><img src="../<?php echo $bag['fpath']?>"  height="110" width="100" alt="No Image Available" /></a></td>
    <td><?php echo $bag['regno']?></td>
    <td><?php echo $bag['name']?></td>
    <td><?php echo $bag['birth']?></td>
    <td><?php echo $bag['gen']?></td>
    <td><?php echo $bag['address']?></td>
    <td><?php echo $bag['landmark']?></td>
    
    <td><?php echo $bag['city']?></td>
    <td><?php echo $bag['state']?></td>
    <td><?php echo $bag['pin']?></td>
    <td><?php echo $bag['mob']?></td>
    <td><?php echo $bag['email']?></td>
    
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php
}
else{
	echo "No Results Found";
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