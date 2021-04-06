<?php  
require_once '../model/model.php';


if (isset($_POST['create'])) {
	$data['name'] = $_POST['name'];
	$data['address'] = $_POST['address'];
	$data['phonenum'] = $_POST['phonenum'];
	$data['dob'] = $_POST['dob'];
	$data['gender'] = $_POST['gender'];
  $data['designation'] = $_POST['designation'];
    $data['pass'] = $_POST['pass'];

  if (addStudent($data)) {
  	echo 'Successfully added!!';
  }
  else if (addTeacher($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>