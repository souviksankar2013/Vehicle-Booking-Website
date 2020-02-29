<?php include('config.php'); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Edit Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="profile.php">Logged as <span><?php echo $_SESSION['GCELT']['name']?></span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php
			require('navpro.inc.php');?>
            
            <?php
if(!empty($_GET['id']))
{ 
    $id=$_GET['id'];
	$view_user=mysqli_query($con,"SELECT * FROM user WHERE id = '$id'") or die(mysqli_error($con));
	
	if(mysqli_num_rows($view_user)>0)
	{
		# get user data from table signup via mysqli_fetch_array
		$bag=mysqli_fetch_array($view_user);
	}
}
?>
            
            
            
            

		<!-- Content -->
		
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner" align="center" style="width:50%; height:50%;">
					<article class="box" style="border-radius:50px;">
						<h3 align="center" style=" font-family:segoe script; font-size:20px">Edit Profile</h3>
						<form method="post" enctype="multipart/form-data" >
									<div class="row uniform" align="center" >
                                    
                                      <div class="6u 12u$(xsmall)">
											<input type="text" name="id" id="id" value="" placeholder="YOUR REGISTRATION ID IS:" readonly/>
										</div>
                                    <div class="6u 12u$(xsmall)">
											<input type="text" name="regno" id="regno" value="<?php echo $_SESSION['GCELT']['regno'];?>"  readonly />
										</div>
                                    
                                    
										<div class="6u 12u$(xsmall)" >
											<input type="text" name="name" id="name" value="<?php echo $_SESSION['GCELT']['name']?>" placeholder="Name :"  />
                                           
										</div>
                                        
                                        <div class="6u 12u$(xsmall)" >
											<input type="text" name="birth" id="birth" value="<?php echo $_SESSION['GCELT']['birth']?>" placeholder="Date of Birth:"  />
                                            
										</div>
										                                       
										
                                        
                                        <div class="12u$">
											<textarea name="address" id="address" placeholder="Enter your address :" required rows="3" ><?php echo $_SESSION['GCELT']['address']?></textarea>
                                            
										</div>
                                        
                                         <div class="12u$">
											<textarea name="landmark"  id="address" placeholder="Landmark: :" rows="1" required ><?php echo $_SESSION['GCELT']['landmark']?></textarea>
                                            
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" >
											<input type="text" name="city" id="city" value="<?php echo $_SESSION['GCELT']['city']?>" placeholder="City :"  />
                                            
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" >
											<input type="text" name="state" id="state" value="<?php echo $_SESSION['GCELT']['state']?>" placeholder="State :"  />
                                            
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" >
											<input type="text" name="pin" id="pin" value="<?php echo $_SESSION['GCELT']['pin']?>" placeholder="Pincode :"  />
                                            
										</div>
                                        
                                         <div class="6u 12u$(xsmall)" >
											<input type="text" name="mob" id="mob" value="<?php echo $_SESSION['GCELT']['mob']?>" placeholder="Contact No :"  />
                                            
										</div>
                                        <div class="12u$" >
											<input type="email" name="email" id="email" value="<?php echo $_SESSION['GCELT']['email']?>" placeholder="Email id:"  />
                                            
										</div>
                                        
                                        <div class="6u 12u$(xsmall)"><object data="<?= $_SESSION['GCELT']['fpath'] ?>" height="210" width="200"><img src="avatar.png"  height="210" width="200" alt="" /></object> <p>Change Photo :
											<input type="file" name="file" id="file" value="" /></p>
										</div>
                                        
                                       <h5>Note: You will be automatically logged out after editing your profile.</h5>
                                        
										<div class="row uniform" style="margin-right:140px; margin-left:140px;" align="center">
									            
                                                <div><input type="submit" value="Edit" name="submit"/></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
									</div>
                                    
								</form>
						
					
					</article>
                    <?php
if(isset($_POST['submit']))
{
	
	$id=$_SESSION['GCELT']['id'];
	$name=$_POST['name'];
	$birth=$_POST['birth'];
	$address=$_POST['address'];
	$landmark=$_POST['landmark'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	
	
				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];
				$fpath1=  $_SESSION['GCELT']['fpath'];
	
 
    	$check=mysqli_query($con,"SELECT * FROM user WHERE email like '$email' and id != '$id'") or die(mysqli_error($con));
		$r=$check->num_rows;
		if($r==0)
		{
			if($_FILES['file']['error'] == 0)
			
			{
			
			
			if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
				{
					
					
				$server_path = "uploaded_IMAGES/".$regno.$file_name;
				$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
	
				if($up)
				{
			
			
			$update = mysqli_query($con,"UPDATE user SET name='$name',birth='$birth',address='$address',landmark='$landmark',city='$city',state='$state',pin='$pin',mob='$mob',email='$email',fpath='$server_path' WHERE id = '$id'") or die(mysqli_error($con));
			if($update)
			{
				?><script>
				window.location.href = 'login.php';
				alert('Update Success....');
       			</script>
    			<?php	exit();
			}
			else
			{
				?><script>
	    		alert('Update Unsuccess....');
				</script>
       			<?php exit();		
			}
	    }
		}
	
		
		
		else
			{
				?><script>
				alert('Please Upload a JPG Photo')
        		</script>
				<?php
			}
			}
				
			else 
			{
				$update1 = mysqli_query($con,"UPDATE user SET name='$name',birth='$birth',address='$address',landmark='$landmark',city='$city',state='$state',pin='$pin',mob='$mob',email='$email',fpath='$fpath1' WHERE id = '$id'") or die(mysqli_error($con));
			if($update1)
			{
				?><script>
				window.location.href = 'login.php';
				alert('Update Success....');
       			</script>
    			<?php	exit();
			}
			}
				
			
			
			
		
		
		}
		
		if($r>0)
		{
			?><script>
			alert('Same Email is already registered.Please try again with another email......')
       	 </script>
			<?php
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>