<?php include('config.php'); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Edit Password</title>
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
			require('navadmin.inc.php');?>
            
           
            
            
            
            

		<!-- Content -->
		
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner" align="center" style="width:45%; height:50%;">
					<article class="box" style="border-radius:50px;">
						<h3 align="center" style=" font-family:segoe script; font-size:20px">Edit Password</h3>
						<form method="post" >
									<div class="row uniform" align="center" >
										<div class="12u 12u$" align="center" >
											<input type="password" name="password" id="password" value="" placeholder="Old password :"  />
                                            
										</div>
										                                       
										
                                        <div class="12u 12u$" align="center" >
											<input type="password" name="pass1" id="pass1" value="" placeholder="New password :" required  />
                                            
										</div>
                                        <div class="12u 12u$" align="center" >
											<input type="password" name="pass2" id="pass2" value="" placeholder="Confirm password :" required  />
                                            
										</div>
                                    		
															
									
									
										
										<div class="row uniform" style="margin-right:100px; margin-left:100px;" align="center">
									            
                                                <div><input type="submit" value="Edit" name="submit"/></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
									</div>
								</form>
						
					
					</article>
                    <?php
if(isset($_POST['submit']))
{
	
	$id= $_SESSION['GCELT']['id'];
	$password=$_POST['password'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	
  if($password!=0 || $pass1!=0 || $pass2!=0)
  {	
	if($password == $_SESSION['GCELT']['password'])
	{
		if($pass1==$pass2)
		{
			$update = mysqli_query($con,"UPDATE adminlogin SET password = '$pass1' WHERE id = '$id'") or die(mysqli_error($con));
			if($update)
			{
				?><script>
				
				window.location.href = 'profile.php';
				alert('Update Success....');
        		</script>
       			<?php
				exit();
			}
			else
			{
				?><script>
				alert('Update Unsuccess....');
				</script>
       			<?php
				exit();		
			}
		}
		else
		{
			?><script>
		    alert('New and Confirm password are not same.please try again......');
		    </script><?php
		}
			
	}
	else
	{
		?><script>
		alert('Wrong Old Password.Please try again.....');
		</script><?php
	}
  }
  else
  {
	  ?><script>
	  alert('Please fillup all the entries.....');
	  </script><?php
	  
  }
}
?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
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