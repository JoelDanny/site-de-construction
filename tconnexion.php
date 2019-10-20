<?php
require "../database.php";
if (isset($_POST)) {
	$email = verifyInput($_POST['email']);
	$password = verifyInput($_POST['password']);
}
$db=Database::connect();
$search = $db->prepare(" SELECT * FROM user WHERE email_user=? AND password_user=? ");
$search->execute(array($email,$password));
if ($OK = $search->fetch()) {
	header("location:../sign.php");
}
else{
	header("location:../login.php");
}
function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
