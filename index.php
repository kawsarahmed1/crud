<?php 

include "data/user.php";

$obj= new Kawsar();
if (isset($_POST['singup'])) {
	$mes=$obj->save_user($_POST);
}

$all = $obj->all_student();



  ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>
	
	  	<div class="jumbotron">
			<h1 class="text-center">Object Oriented Crud</h1><br><br>	
			<hr/>
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-center text-primary ">Sing up table</h3>
					<hr>
					<br><br>
					<div>
						<form action="" method="POST" class="offset-1">

							<div class="form-group">
								<label for="name">Name</label>
								<input type="texr" name="name"  class="form-control col-md-10" placeholder="enter your name" required="">
							</div>
							<div class="form-group">
								<label for="dept">Department</label>
								<input type="texr" name="dept"  class="form-control col-md-10" placeholder="enter your dept" required="">
							</div>
							<div class="form-group">
								<label for="age">Age</label>
								<input type="texr" name="age"  class="form-control col-md-10" placeholder="enter your Age" required="">
							</div>
							<div class="form-group">
								<input type="submit" name="singup" value="Sing up" class="btn  btn-success">
							</div>
						</form>
						<h2><?php
							if (isset($mes)) {
								echo $mes;
							}
						?></h2>
					</div>

				</div>				
				<div class="col-md-6">
					<h3 class="text-center text-danger">View Table</h3>
					<hr><br><br>
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Department</th>
							<th>Age</th>
							<th>Action</th>

						</tr>
						<?php
							while ($row = mysqli_fetch_assoc($all) ) {
								?>
						<tr>
							<th><?=	$row['id']?></th>
							<th><?= ucwords($row['name']); ?></th>
							<th><?= ucwords($row['dept']); ?></th>
							<th><?= $row['age']; ?></th>
							<th>
								<a class="btn btn-success" href="update.php?id=<?= $row['id']; ?>">Edit</a>
								<a class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>">Delete</a>
							</th>
							
						</tr>
						<?php
							}

							?>
					
						
					</table>

				</div>
				
			</div>
			<br><br><br>
			<div class="footer">
				<p class="text-center text-danger bg-dark">kawsar&copyright</p>
			</div>
		</div>	
		
	</body>
</html>