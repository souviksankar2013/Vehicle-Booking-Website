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
				<div class="logo"><a href="profile.php">Logged as <span>Admin</span></a></div>
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
			<section id="post" class="wrapper bg-img" data-bg="pict15.jpg">
				<div class="inner">
					<article class="box" style="border-radius:50px;">
						<form method="post" enctype="multipart/form-data">
                        <h3 align="center" style="font-family:segoe script">Add Routes</h3>
                        <div class="row uniform">
     
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="source" id="source"  value="" placeholder="Enter the Source :- "/>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="destination" id="destination" value="" placeholder="Enter the Destination :- "/>
										</div>
                                        
                                        <div class="6u 12u$(xsmall)">
					<input type="text" name="km" id="km" value="" placeholder="Enter the Kilometer :- "/>
										</div>
                                        
                                        
                                        
                                        <div class="12u$">
											<div class="row uniform" style="margin-right:170px; margin-left:170px;" align="center">
									            <div><a href="profile.php"><button name="name" value="Back" type="button" class="alt">Back</button></a></div>
                                                <div><input type="submit" value="Register" name="submit"/></div>
                                                <div><input type="reset" value="Reset"  class="alt"  align="right"/></div>
											
											
										</div>
                                        <br>
                                        
                                       <form method="post">
									<input type="submit" name="view" value="Registered Routes">
                                    
                                    </form>
                                        
                                        </form>
						
					</select>
											</div>
										</div>
                    
                    <?php
if(isset($_POST['submit']))
{
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$km= $_POST['km'];
	
			
	if($source!=0 || $destination!=0 || $km!=0 )
	{
		    #insert into database
			$insert=mysqli_query($con,"INSERT INTO route values('','$source','$destination','$km')") or die(mysqli_error($con));
			if($insert)
			{
				?><script>
				alert('your submition is complete.Your generated ID is:<?php echo $id ?>......')
        		</script>
				<?php
			}
			else
			{
				?><script>
				alert('submit is not done ......')
        		</script>
				<?php
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

<?php
if(isset($_POST['view']))
{
	$query=mysqli_query($con,"SELECT * FROM route");
	
	#now checking the number of rows found
	if(mysqli_num_rows($query))
	{
		?><h2 align="center" style="font-family:segoe script; ">View All Registered Drivers :</h2>
        <table border="1" align="center" width="60%" height="auto" >
          <thead>
          <tr>
          	<th> <p>Id.</p> </th>
	     	<th> <p>Source </p></th>
            <th> <p>Destination</p></th>
			<th> <p>K.M. </p></th>
            <th> <p>Update </p></th>
            <th> <p>Delete </p></th>
    		</tr>
          </thead>
          <tbody>
          <?php
		  $c=1;
		  while($bag=mysqli_fetch_array($query))
          {?>
          <tr>
		  <td><p><?php echo $bag['id']?></p></td>
          <td><p><?php echo $bag['source']?></p></td>
          <td><p><?php echo $bag['destination']?></p></td>
          <td><p><?php echo $bag['km']?></p></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to update?')" href="uproute.php?id=<?php echo $bag['id']?>"><img src="2.png"></a></td>
          <td style="padding:10px"><a onClick="return confirm('Are you sure you want to delete ?')" href="delroute.php?id=<?php echo $bag['id']?>"><img src="1.gif"></a></td>
          </tr>
          <?php
		  $c++;}?>
          </tbody>
          </table>
          <?php
	}
	else
	{
		?><script>
		alert('No Results Found......');
		</script><?php
	}
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