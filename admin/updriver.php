<?php include('config.php');?>
<!doctype html>
<html>
<head>
		<title>Update Here</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	
<style>
 p{
	 text-align:center;
	 font-family:consolas;
	 
}
</style>
</head>

<?php
if(!empty($_GET['driverid']))
{ 
    $driverid=$_GET['driverid'];
	$view_user=mysqli_query($con,"SELECT * FROM driver WHERE driverid = '$driverid'") or die(mysqli_error($con));
	
	if(mysqli_num_rows($view_user)>0)
	{
		# get user data from table signup via mysqli_fetch_array
		$bag=mysqli_fetch_array($view_user);
	}
}
?>
<body class="subpage">

<header id="header" class="alt">
				<div class="logo"><a href="../index.html">Road Trip <span>by TEMPLATED</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>
            
            <?php
			
			require('navadmin.inc.php');
			?>
            
            
            
            <section id="post" class="wrapper bg-img" data-bg="banner3.jpg">
				<div class="inner">
					<article class="box" style="border-radius:50px;">

<h1 align="center" ><u>Update Here :</u></h1>
<form method="post">
<table width="45%" height="145" border="0" align="center" style="font:garamond; font-size:18px;">
<tr>
<td width="50%" align="center"><p>Name :</p></td>
<td><input type="text" name="name" placeholder="Enter the name" value="<?php echo $bag['name']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Address :</p></td>
<td><input type="text" name="street" placeholder="Enter the Address" value="<?php echo $bag['street']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Location :</p></td>
<td><input type="text" name="location" placeholder="Enter the Location" value="<?php echo $bag['location']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>City:</p></td>
<td><input type="text" name="city" placeholder="Enter the city" value="<?php echo $bag['city']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>State :</p></td>
<td><input type="text" name="state" placeholder="Enter the state" value="<?php echo $bag['state']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>


<tr>
<td width="50%" align="center"><p>Pincode :</p></td>
<td><input type="text" name="pincode" placeholder="Enter the Pincode" value="<?php echo $bag['pincode']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Contact :</p></td>
<td><input type="text" name="mob" placeholder="Enter the contact no" value="<?php echo $bag['mob']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Licence no: :</p></td>
<td><input type="text" name="lin" placeholder="Enter the Lincence" value="<?php echo $bag['lin']?>" readonly></td>
<input type="hidden" name="id" value="<?php echo $bag['driverid']?>">
</tr>



</table>
<div class="12u$">
<div class="row uniform" style="margin-right:350px; margin-left:350px;" align="center">
<div><button  type="submit" name="submit" value="Submit" style="text-align:center;">Submit</button></div>
</div></div></form>

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
	
	
	
			$update = mysqli_query($con,"UPDATE driver SET name = '$name',street = '$street',location = '$location',city = '$city',state = '$state',pincode = '$pincode',mob = '$mob' WHERE driverid = '$driverid'") or die(mysqli_error($con));
			
			if($update)
			{
				?><script>
				alert('Update Success....');
				window.location.href = 'drivers.php';
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
?>



</td></tr>
</table>
</article>
                    
				</div>
			</section>
            <footer id="footer">
				<div class="inner">

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
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

