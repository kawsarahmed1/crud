<?php 	

include "data/user.php";
$obj= new Kawsar;


$id = $_GET['id'];
$demp = $obj->update_user($id);

$data = mysqli_fetch_assoc($demp);

if (isset($_POST['update'])) {
	$obj->update_save($_POST);
}


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>
		<div class="container">
	  		<div class="jumbotron">
			<h1 class="text-center">Object Oriented Crud</h1><br><br>	
			<hr/>
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-center text-primary ">Udate table</h3>
					<hr>
					<br><br>
					<div>
						<form action="" method="POST" class="offset-1">
							<input type="hidden" name="id" name="name" value="<?= $data['id']?>">	
							<div class="form-group">
								<label for="name">Name</label>
								<input type="texr" name="name"  class="form-control col-md-10" placeholder="enter your name" required="" value="<?= $data['name'];?>" >
							</div>
							<div class="form-group">
								<label for="dept">Department</label>
								<input type="texr" name="dept"  class="form-control col-md-10" placeholder="enter your dept" required="" value="<?= $data['dept']?>">
							</div>
							<div class="form-group">
								<label for="age">Age</label>
								<input type="texr" name="age"  class="form-control col-md-10" placeholder="enter your Age" required="" value="<?= $data['age'];?>">
							</div>
							<div class="form-group">
								<input type="submit" name="update" value="Update Info" class="btn  btn-success">
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
			