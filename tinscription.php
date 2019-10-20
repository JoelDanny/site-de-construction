<?php 
require "../database.php";
if (isset($_POST)) {
	$name = verifyInput($_POST['name']);
	$firstname = verifyInput($_POST['firstname']);
	$email = verifyInput($_POST['email']);
	$nationality = verifyInput($_POST['nationality']);
	$country = verifyInput($_POST['country']);
	$password = verifyInput($_POST['password']);

}
$db = Database::connect();
$insert = $db->prepare("INSERT INTO user(name_user, firstname_user, email_user, country_user, nationality_user, password_user) VALUES (?,?,?,?,?,?)");
$insert->execute(array($name,$firstname,$email,$country,$nationality,$password));
Database::disconnect();
header("location:../login.php");
function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

 ?>