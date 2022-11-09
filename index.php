<?php 
	include 'connect.php';
		if (isset($_POST['submit'])) {
				$name=$_POST['name'];
				$email=$_POST['email'];
				$mobile=$_POST['mobile'];
				$idnumber=$_POST['idnumber'];
				$address=$_POST['address'];
				$course=$_POST['course'];

			$sql="INSERT INTO `users` (name,email,mobile,idnumber,address,course)
				  VALUES('$name','$email','$mobile','$idnumber','$address','$course')";

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
</head>
<body>
	<div class="login-box">
  <h2>Registration Form</h2>
  <form method="POST">
    <div class="user-box">
      <input type="text" name="name" required="" autocomplete="off">
      <label>Name</label>
    </div>
     <div class="user-box">
      <input type="email" name="email" required="" autocomplete="off">
      <label>Email</label>
    </div>
     <div class="user-box">
      <input type="text" name="mobile" required="" autocomplete="off" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');">
      <label>Mobile</label>
    </div>
    <div class="user-box">
      <input type="text" name="idnumber" required="" autocomplete="off" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');">
      <label>ID number with dash -</label>
    </div>
     <div class="user-box">
      <input type="text" name="address" required="" autocomplete="off">
      <label>Address</label>
    </div>
    <h4>Course:</h4>
    <div class="user-box">
      <select name="course" required="" autocomplete="off">
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
      Submit
    </button></a>
  </form>
</div>
</body>
</html>