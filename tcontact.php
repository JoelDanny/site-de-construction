<?php 
require "../database.php";
$today=date('Y-m-d H:i:s');
if (isset($_POST)) {
	$name = verifyInput($_POST['name']);
	$firstname = verifyInput($_POST['firstname']);
	$ville = verifyInput($_POST['ville']);
	$maisonVoulue = verifyInput($_POST['maisonVoulue']);
	$delai = verifyInput($_POST['delai']);
	$budget = verifyInput($_POST['budget']);
	$email = verifyInput($_POST['email']);

}
$db = Database::connect();
$insert = $db->prepare("INSERT INTO contact(nom_contact, prenom_contact, ville_contact, maisonVoulue_contact, delaiConstruction_contact, budget_contact, email_contact,today) VALUES (?,?,?,?,?,?,?,?)");
$insert->execute(array($name,$firstname,$ville,$maisonVoulue,$delai,$budget,$email,$today));
Database::disconnect();
header("location:../index.html");
function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

 ?>