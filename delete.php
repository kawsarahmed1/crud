<?php 	

include "data/user.php";

$obj= new Kawsar();

$id = $_GET['id'];

$obj->delete_student($id);


 ?>