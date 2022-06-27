<?php
	include 'connection.php';

	$id=$_POST['id'];
    $title=$_POST['title2'];
	$place=$_POST['place2'];
	$description=$_POST['description2'];
	$price=$_POST['price2'];
    $copie=$_POST['copie2'];
    
	$sql = "UPDATE `monuments` 
            SET `title`='$title',`place`='$place',`description`='$description',`price`='$price',`copie`='$copie'
            WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
        echo '<script> alert("Data Updated"); </script>';
        header("location:../frontEnd/store.html");
    } 
    else {
        echo '<script> alert("Data not Updated"); </script>';
    }
	mysqli_close($conn);
?>