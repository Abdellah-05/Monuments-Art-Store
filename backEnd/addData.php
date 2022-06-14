<?php

include 'connection.php';

$request = $_REQUEST; 
$nom = $request['nom']; 
$email = $request['email']; 
$passwd = $request['passwd']; 

    $sql = "INSERT INTO `users`(`nom`, `email`, `passwd`) 
    VALUES ('".$nom."','".$email."','".$passwd."')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
    
?>