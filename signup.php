

<html>
	<head>
		<title>Signup</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">LineBus <span>Bus Booking Service</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php
			require('nav.inc.php');?>
            <?php
                   include('config.php'); 
             ?>
		<!-- Content -->
		
	
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner" style="width:50%; height:auto;" >
					<article class="box" style="border-radius:50px;">
						
						<form method="post" enctype="multipart/form-data">
                        <h3 align="center" style="font-family:segoe script">REGISTRATION FORM</h3>
									<div class="row uniform">
                                    <div class="6u 12u$(xsmall)">
											<input type="text" name="id" id="id" value="" placeholder="YOUR REGISTRATION ID IS:" readonly/>
										</div>
                                    <div class="6u 12u$(xsmall)">
											<input type="text" name="regno" id="regno" value="<?php echo rand(00000,99999);?>"  readonly />
										</div>
										
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="fname" id="name" value="" placeholder="Enter your first name :" />
										</div>
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="lname" id="name" value="" placeholder="Enter your last name :" />
										</div>
                                        <!-- Break -->
										
										
                                        
                                        <div class="6u 12u$(xsmall)" >
											<input type="text" name="birth" id="birth" value="" placeholder="Date of birth(dd-mm-yyyy):" />
										</div>
                                        
                                       									
										<div class="2u 12u$(small)">
											<input type="radio" id="priority-low" name="gen" value="male" >
											<label for="priority-low">Male</label>
										</div>
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="gen" value="female">
											<label for="priority-normal">Female</label>
										</div>
										
                                      										
										<!-- Break -->
										<div class="12u$">
											<textarea name="address" id="address" placeholder="Enter your address :" rows="3"></textarea>
										</div>
                                        
                                        <div class="12u$">
											<textarea name="landmark" id="address" placeholder="Landmark:" rows="1"></textarea>
										</div>
                                        
										<!-- Break -->
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="city" id="city" value="" placeholder=" City :" />
										</div>
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="state" id="state" value="" placeholder="State :" />
										</div>
                                         <div class="6u 12u$(xsmall)">
											<input type="text" name="pin" id="pin" value="" placeholder="Pincode :" />
										</div>
                                       
                                         <div class="6u 12u$(xsmall)">
											<input type="text" name="mob" id="mob" value="" placeholder="Contact no : " />
										</div>
                                          <div class="12u$">
											<input type="email" name="email" id="email" value="" placeholder="Enter your email-id : " />
										</div>
                                         <div class="6u 12u$(xsmall)">
											<input type="password" name="pass1" id="pass1" value="" placeholder="password :" />
										</div>
                                       
                                         <div class="6u 12u$(xsmall)">
											<input type="password" name="pass2" id="pass2" value="" placeholder="Confirm Password : " />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">Upload Your Photo Here:
											<input type="file" name="file" id="file" value="" />
										</div>
                                        
                                        
                                        <!-- break --->
										<div class="12u$">
											<div class="row uniform" style="margin-right:70px; margin-left:70px;" align="center">
									            <div><a href="index.php"><button name="name" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><input type="submit" value="Register" name="submit"/></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
                                                
											
											
										</div>
											
										</div>
									</div>
								</form>
						
					
					</article>
				
                <?php
			if(isset($_POST['submit']))
			{
				
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$birth=$_POST['birth'];
				if(!empty($_POST['gen'])) {
				$gen=$_POST['gen'];
				}
				$address=$_POST['address'];
				$landmark=$_POST['landmark'];
				$city=$_POST['city'];
				$state=$_POST['state'];
				$pin=$_POST['pin'];
				$mob=$_POST['mob'];
				$email=$_POST['email'];
				$pass1=$_POST['pass1'];
				$pass2=$_POST['pass2'];
				$regno=$_POST['regno'];
				$name=$fname.' '.$lname;
				
				
				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];
				
				
				
	
					if(!empty($_POST['gen'])) {
					if($name!=0 || $email!=0 || $city!=0 || $state!=0 || $pin!=0 || $mob!=0 || $address!=0 || $birth!=0 || $gen!=0 || $pass1!=0 || $pass2!=0 )
	{
		$check=mysqli_query($con,"SELECT * FROM user WHERE email like '$email'") or die(mysqli_error($con));
		$r=$check->num_rows;
		if($r==0)
		{	
			#insert into database
			
			if($pass1 == $pass2)
			{
				
				
				if($_FILES['file']['error'] == 0)
			
			{
				
				
				
				
				if($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/jpg" || $file_type == "image/JPG" || $file_type == "image/PNG" || $file_type == "image/JPEG")
				{
				$server_path = "uploaded_IMAGES/".$regno.$file_name;
				$up = move_uploaded_file($_FILES['file']['tmp_name'],$server_path);
	
				if($up)
				{
$insert=mysqli_query($con,"INSERT INTO user values('','$regno','$name','$birth','$gen','$address','$landmark','$city','$state','$pin','$mob','$email','$pass1','$server_path')") or die(mysqli_error($con));
			if($insert)
			{	
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete.Your generated ID is:<?php echo $regno ?>......')
        		window.location.href="login.php";
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
				$insert1 = mysqli_query($con,"INSERT INTO user values('','$regno','$name','$birth','$gen','$address','$landmark','$city','$state','$pin','$mob','$email','$pass1','')") or die(mysqli_error($con));
			if($insert1)
			{
				?><script>
				alert('Mr/Mrs. <?php echo $name ?> ,your registration is complete.Your generated ID is:<?php echo $regno ?>......')
        		window.location.href="login.php";
                </script>
				<?php
			}
			}
			}
			
			
			
			
			
			
			
			else
			{
				?><script>
				alert('Confirm password is not same with password  ......')
        		</script>
				<?php
				
			}
		}
		else
		{
			?><script>
			alert('Email is already registered.Please try again with another email......')
       	 </script>
			<?php
		}
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













