<?php 
	include 'connect.php';
	$id=$_GET['update'];
	$sql="SELECT * FROM `users` WHERE id=$id";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);

		$name=$row['name'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$password=$row['password'];


		if (isset($_POST['submit'])) {
				$name=$_POST['name'];
				$email=$_POST['email'];
				$mobile=$_POST['mobile'];
				$password=$_POST['password'];

			$sql="UPDATE `users` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'
				  WHERE id=$id";

			$result=mysqli_query($con,$sql);
			if ($result) {
				//echo "Data inserted successfully!";
				header('location: display.php');
			}else{
				die(mysqli_error($con));
			}

		}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container my-5">
		<form method="POST">
  			<div class="form-control">
    			<label>Name</label>
   				<input type="text" class="form-control" placeholder="Enter your name" name="name"
   				 autocomplete="off"
   				 value = <?php echo $name;?>>

  			</div>
  			<div class="form-control">
    			<label>Email</label>
   				<input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>

  			</div>
  			<div class="form-control">
    			<label>Mobile</label>
   				<input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>

  			</div>
  			<div class="form-control">
    			<label>Password</label>
   				<input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"value=<?php echo $password;?>>

  			</div>


  			<button type="submit" class="btn btn-primary" name="submit">Update</button>

		</form>

	</div>

</body>
</html>