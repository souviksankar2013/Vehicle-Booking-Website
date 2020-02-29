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
    $id=$_GET['id'];
	$view_user=mysqli_query($con,"SELECT * FROM route WHERE id = '$id'") or die(mysqli_error($con));
	
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
<td><input type="text" name="source" placeholder="Enter the source" value="<?php echo $bag['source']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['id']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Type :</p></td>
<td><input type="text" name="destination" placeholder="Enter the destination" value="<?php echo $bag['destination']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['id']?>">
</tr>

<tr>
<td width="50%" align="center"><p>Registration No :</p></td>
<td><input type="text" name="km" placeholder="Enter the kilometer" value="<?php echo $bag['km']?>"></td>
<input type="hidden" name="id" value="<?php echo $bag['id']?>">
</tr>






</table>
<div class="12u$">
<div class="row uniform" style="margin-right:350px; margin-left:350px;" align="center">
<div><button  type="submit" name="submit" value="Submit" style="text-align:center;">Submit</button></div>
</div></div></form>
<?php
if(isset($_POST['submit']))
{
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$km = $_POST['km'];
	
	
	
			$update = mysqli_query($con,"UPDATE route SET source = '$source',destination = '$destination',km = '$km' WHERE id = '$id'") or die(mysqli_error($con));
			
			if($update)
			{
				?><script>
				alert('Update Success....');
				window.location.href = 'routes.php';
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

