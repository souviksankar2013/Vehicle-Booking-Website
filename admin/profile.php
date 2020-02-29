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
		<link rel="stylesheet" href="../assets/css/main.css" />
        <style>
        p
        {
			font-family:garmond;
			font-size:20px;
			
		}
		p1
		{
			font-family:Consolas;
			font-size:16px;
			
		}
        </style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="profile.php">Logged as <span>Admin </span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php
			require('navadmin.inc.php');?>
            

		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="pict12.jpg">
				<div class="inner"  >
					<article class="box" style="border-radius:50px;">
						<header>
							<h2 style=" font-family:Consolas;">Welcome Admin <?php echo $_SESSION['GCELT']['name']; ?></h2>
							
						</header>
						<div class="content">
							<p><span class="image left"><object data="<?= $_SESSION['GCELT']['fpath'] ?>" height="310"><img src="avatar.png"  height="310" alt="" /></object></span>
                            
                            <ul class="actions">
                             <li><a href="cars.php" class="button special">Cars</a></li>
                                    </ul>
                                    
                                    <ul class="actions">
									<li><a href="drivers.php" class="button special">Drivers</a></li>
                                    </ul>
                                    
                                    <ul class="actions">
									<li><a href="routes.php" class="button special">Routes</a></li>
                                    </ul>
                                                                        
                                    <ul class="actions">
									<li><a href="history.php" class="button special">View Booking History</a></li>
                                    </ul>
                                    
                                    <ul class="actions">
									<li><a href="view.php" class="button special">View Registered Users</a></li>
                                    </ul>
                            
                            
                            
						</div>
						
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