<?php include('config.php'); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="../index.php">LineBus <span>Admin</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					
				</ul>
			</nav>

		<!-- Content -->
		
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner" align="center" style="width:45%; height:50%;">
					<article class="box" style="border-radius:50px;">
						<h3 align="center" style=" font-family:segoe script; font-size:20px">ADMIN LOGIN</h3>
						<form method="post" action="log_code.php">
									<div class="row uniform" align="center" >
										<div class="12u 12u$" align="center" >
											<input type="text" name="name" id="name" value="" placeholder="Enter your Name:"  />
										</div>
										                                       
										
                                        <div class="12u$ 12u$(xsmall)" align="center" >
											<input type="password" name="password" id="password" value="" placeholder="Enter your Password :" />
										</div>
                                    		
															
									
									
										
										<div class="row uniform" style="margin-right:100px; margin-left:100px;" align="center">
									            
                                                <div><input type="submit" value="login" name="submit"/></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
									</div>
								</form>
						
					
					</article>    
                    
				</div>
			</section>

	
					
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