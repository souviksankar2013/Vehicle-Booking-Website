<?php include('config.php'); ?>
<!DOCTYPE HTML>
<?php if(isset($_POST['totalcost'])){ $total = $_POST['totalcost']; }else{ $total =  '';}?>
<html>
	<head>
		<title>Login</title>
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
			require('navpro.inc.php');
			
			?>
    
                                               
                                               
                                               
                                               <script>
										function f1()
										{
											alert("Are you sure to continue??");
										}
										</script>
                                        
		<!-- Content -->
		
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner" align="center" style="width:45%; height:50%;">
					<article class="box" style="border-radius:50px;">
                    
                    <h3 align="center" style="font-family:segoe script">-- Your Payments  --</h3>
						
						<form method="post">
                      
                        
                        <div class="row uniform">
     
                                        
                                       
                                        <div class="6u 12u$(xsmall)">
                                        
											<div class="select-wrapper">
												<select name="payment" id="payment">
													<option value="" style="color:#000">-- Select Payment Method --</option>
                                                    <option value="creditdebit" style="color:#000">Credit/Debit Card</option>
                                                    <option value="netbanking" style="color:#000">Net Banking</option>
														<input type="hidden" name="total" value="<?php echo $total;?>">
														
                                                    </select>
                                                    
											   </div>
										</div>
                                        <div><input type="submit" value="Select" name="submit1"/></div>
                                        </div>
                                       
</form>
										
                                        
                                        
                                        
                                        
                                        
										
                                      
                                       
                                       <?php
									   if(isset($_POST['submit1']))
									   {
										   if($_POST['total'] == ""){
											   ?><script> alert('You just refreshed your page which is not allowed so you will be redirected to Home page'); window.location.href = 'profile.php';</script><?php
										   }
										   $payment=$_POST['payment'];
										  	$total = $_POST['total'];
										  if($payment == "netbanking")
										  {?>
                                          
                                          <div class="row uniform">
                                          <form method="post" action="happyjourney.php" onSubmit="return f1()" >
                                          
                                          <div class="12u$">
											<div class="select-wrapper">
												<select name="payment" id="payment">
													<option value="" style="color:#000">-- Select Your Bank --</option>
                                                    <option value="sbi" style="color:#000">State Bank of India</option>
                                                    <option value="axis" style="color:#000">Axis Bank</option>
                                                    <option value="allahabad" style="color:#000">Allahabad Bank</option>
                                                    <option value="bb" style="color:#000">Bandhan Bank</option>
														
														
                                                    </select>
                                                    
                                                    
											   </div>
                                              
                                               <table> <tr>
													<td width="50%" align="center"><p>Total Payable Amount:</p></td>
													<td><input type="text" name="total" value="<?php echo $total;?>" readonly></td>
													<input type="hidden" name="id" value="" readonly />
														</tr>
															</table>
										</div>
											  
										 <?php }
										 
										 else if($payment == "creditdebit")
										 {?>
											 
                                             <div class="12u$">
											<input type="text" name="cname" id="cname" value="" placeholder="Enter Card Number :" />
										</div>
                                        
                                        
                                        <div class="12u$">
											<input type="text" name="name" id="name" value="" placeholder="Enter Name as on Card :" />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="date" id="date" value="" placeholder="Enter Card Expiry Date :" />
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
											<input type="text" name="cvv" id="cvv" value="" placeholder="Enter C.V.V :" />
										</div>
                                           
                                           
                                           <div class="12u$">  
                                          <input type="text" name="total" id="toatl" value="<?php echo $total;?>" readonly>
													
										</div>
                                             
                                             
                                             
										 <?php } ?>
										 
                                         
                                         
                                         <div class="12u$">
											<div class="row uniform" style="margin-right:50px; margin-left:50px;" align="center">
									            <div><a href="booking.php"><button name="back" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><a href="happyjourney.php"><button name="submit" value="register" type="submit" >Pay Now</button></a></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
                                        
                                        
                                       
                                        
                                        
										 
										 
										
									 <?php  }
									   

									?>



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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>