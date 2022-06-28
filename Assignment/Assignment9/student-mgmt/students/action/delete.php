<?php 

require_once "../../utils/db.php";

$id = $_POST['id'];

$sql = "DELETE FROM students WHERE id = $id;";

if($conn->query($sql) == TRUE) {
	header("location:../?success=deleted successfully");
} else {
	header("location:../?error=error occured");
}