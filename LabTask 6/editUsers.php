<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/userinfo.php';
$tableName = 'user_info';
$users = fetchuser($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
  <style>
    legend{
      font-size: 25px;
    }
  body{
    margin-top: 100px;
             margin-left: 500px;
             margin-right: 800px;
  }
  </style>
</head>
<body>

<form action="controller/editUsersController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<fieldset>
<legend><B>Edit User</B></legend> <br> 

  Name
  <br><input type="text" name="name" size="40" value="<?php echo $users['Name']; ?>">
  <br><br>
  Address
  <br><input type="text" name="address" size="40" value="<?php echo $users['Address']; ?>">
  <br><br>
  Designation
  <br><input type="text" name="designtion" size="40" value="<?php echo $users['Designation']; ?>">
  <br><br>
  Password
  <br><input type="text" name="password" size="40" value="<?php echo $users['Password']; ?>">
  <br><br><hr>
  <input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>
<?php }
else{
  echo "You are not allowed to visit this page";
} ?>