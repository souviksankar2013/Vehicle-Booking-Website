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
if(!empty($_GET['id']))
{ 
    $vehicleid=$_GET['id'];
	$view_user=mysqli_query($con,"SELECT * FROM car WHERE vehicleid = '$vehicleid'") or die(mysqli_error($con));
	
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
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Type :</p></td>
<td><input type="text" name="type" placeholder="Enter the Type" value="<?php echo $bag['type']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Registration No :</p></td>
<td><input type="text" name="regno" placeholder="Enter the registration no" value="<?php echo $bag['regno']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Seating Capacity :</p></td>
<td><input type="text" name="seatingcap" placeholder="Enter the Seating capacity" value="<?php echo $bag['seatingcap']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Fare/K.M. :</p></td>
<td><input type="text" name="fareperkm" placeholder="Enter the fare/km" value="<?php echo $bag['fareperkm']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
</tr>


<tr>
<td width="50%" align="center"><p>Driverid :</p></td>
<td><input type="text" name="driverid" placeholder="Enter the driverid" value="<?php echo $bag['driverid']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['vehicleid']?>">
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
	$type = $_POST['type'];
	$regno = $_POST['regno'];
	$seatingcap = $_POST['seatingcap'];
	$fareperkm = $_POST['fareperkm'];
	$driverid = $_POST['driverid'];
	
	
	
	
			$update = mysqli_query($con,"UPDATE car SET name = '$name',type = '$type',regno = '$regno',seatingcap = '$seatingcap',fareperkm = '$fareperkm',driverid = '$driverid' WHERE vehicleid = '$vehicleid'") or die(mysqli_error($con));
			
			if($update)
			{
				?><script>
				alert('Update Success....');
				window.location.href = 'cars.php';
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

