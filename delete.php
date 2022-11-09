<?php 
	include 'connect.php';
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];

		$sql="delete from `users` where id=$id";
		$result=mysqli_query($con,$sql);
		if ($result) {
			header('location: display.php');
		}else{
			die(mysqli_error($con));
		}
	}
 ?>