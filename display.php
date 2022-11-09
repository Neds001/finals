<?php 
	include 'connect.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Display</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
 </head>
 <body style="background: cadetblue;">
 	<div class="container">
		<a href="index.php" class="text-light"><button class="btn btn-primary my-5">Add user</button></a>
		<table class="table">
  			<thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Mobile</th>
			      <th scope="col">ID number</th>
			      <th scope="col">Address</th>
			      <th scope="col">Course</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		$sql="SELECT * FROM `users`";
			  		$result=mysqli_query($con,$sql);
			  		if($result){
			  			while ($row=mysqli_fetch_assoc($result)) {
			  				$id=$row['id'];
			  				$name=$row['name'];
			  				$email=$row['email'];
			  				$mobile=$row['mobile'];
			  				$idnumber=$row['idnumber'];
			  				$address=$row['address'];
			  				$course=$row['course'];
			  				echo '
			  					<tr>
      								<th scope="row">'.$id.'</th>
      								<td>'.$name.'</td>
      								<td>'.$email.'</td>
      								<td>'.$mobile.'</td>
      								<td>'.$idnumber.'</td>
      								<td>'.$address.'</td>
      								<td>'.$course.'</td>
      								<td>
      									<a href="update.php?update='.$id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
      									<a href="delete.php?delete='.$id.'" class="text-light"><button class="btn btn-danger">Delete</button></a>
      								</td>
    							</tr>';
			  			}
			  		}
			  	 ?>
			  </tbody>
		</table>
	</div>
 </body>
 </html>