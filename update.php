<?php 
	include 'connect.php';
	$id=$_GET['update'];
	$sql="SELECT * FROM `users` WHERE id=$id";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);

		$name=$row['name'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$idnumber=$row['idnumber'];
		$address=$row['address'];
		$course=$row['course'];


		if (isset($_POST['submit'])) {
				$name=$_POST['name'];
				$email=$_POST['email'];
				$mobile=$_POST['mobile'];
				$idnumber=$_POST['idnumber'];
				$address=$_POST['address'];
				$course=$_POST['course'];

			$sql="UPDATE `users` set id=$id,name='$name',email='$email',mobile='$mobile',idnumber='$idnumber',address='$address',course= '$course'
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
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="/finals/style.css">
	<div class="login-box">
  <h2>Registration Form</h2>
  <form method="POST">
    <div class="user-box">
      <input type="text" name="name" autocomplete="off" value=<?php echo $name;?>>
      <label>Name</label>
    </div>
     <div class="user-box">
      <input type="email" name="email"  autocomplete="off" value=<?php echo $email;?>>
      <label>Email</label>
    </div>
     <div class="user-box">
      <input type="text" name="mobile"  autocomplete="off" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');" value=<?php echo $mobile; ?>>
      <label>Mobile</label>
    </div>
    <div class="user-box">
      <input type="text" name="idnumber"  autocomplete="off" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');" value=<?php echo $idnumber; ?>>
      <label>ID number with dash -</label>
    </div>
     <div class="user-box">
      <input type="text" name="address" autocomplete="off" value=<?php echo $address; ?>>
      <label>Address</label>
    </div>
    <h4>Course:</h4>
    <div class="user-box">
      <select name="course"  autocomplete="off" value=<?php echo $course; ?>>
                 <option value="BSIT">Bachelor of Science In Information Technology</option>
                 <option value="BSCS">Bachelor of Science In Computer Science</option>
                 <option value="BAPS">Bachelor of Arts in Political Science</option>
                 <option value="BSCPE">Bachelor of Science in Computer Engineering</option>
	             <option value="BSAcc">Bachelor of Science in Accountancy</option>
	           <option value="BSArchi">Bachelor of Science in Architecture</option>
        </select>
    </div>
   
    <a><button type="submit" name="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Update
    </button></a>
     <a href="/finals/display.php" style="margin-left: 95px; color: #03e9f4;">
      Cancel
    </a>
  </form>
</div>
</body>
</html>
