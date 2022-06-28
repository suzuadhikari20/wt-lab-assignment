<?php
require_once "../../utils/db.php";
if (!isset($_POST['id'])) {
	header("location:../?error=invalid id");
}
$id = $_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$favorite_color=$_POST['color'];
$weight=$_POST['weight'];
$gender=$_POST['gender'];
$hobbies=implode(",",$_POST['hobbies']);
$nationality=$_POST['nationality'];
$sql="UPDATE students SET 'name'='$name','email'='$email', 'dob'='$dob', 'favorite_color'='$favourite_color', 'weight' ='$weight', 'gender'='$gender', 'hobbies'='$hobbies', 'nationality'='$nationality' WHERE 'id'='$id'";
?>