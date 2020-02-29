<?php
include('config.php');
if(empty($_GET['driverid']))
{
	header('location:driver.php');
	exit();
	
}

#if id found then execute delete query
$delete=mysqli_query($con,"DELETE FROM driver WHERE driverid = '".$_GET['driverid']."'") or die(mysqli_error($con));

if($delete==1)
{
	?><script>
	alert('Delete Success....');
	window.location.href = 'drivers.php';
    </script><?php
	exit();
}

?>