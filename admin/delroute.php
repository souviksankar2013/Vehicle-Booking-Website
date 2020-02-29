<?php
include('config.php');
if(empty($_GET['id']))
{
	header('location:route.php');
	exit();
	
}

#if id found then execute delete query
$delete=mysqli_query($con,"DELETE FROM route WHERE id = '".$_GET['id']."'") or die(mysqli_error($con));

if($delete==1)
{
	?><script>
	alert('Delete Success....');
	window.location.href = 'routes.php';
    </script><?php
	exit();
}

?>