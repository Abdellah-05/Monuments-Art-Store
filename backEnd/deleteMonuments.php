<?php
	include 'connection.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM monuments WHERE id='". $id ."'";
		if (mysqli_query($conn, $sql)) {
			echo '<script> alert("Data Deleted"); </script>';
			header("location:../frontEnd/store.html");
		} 
		else {
			echo '<script> alert("Data not Deleted"); </script>';
		}
		mysqli_close($conn);
	}
	
?>