<?php

include 'connection.php';

$request = $_REQUEST; 
$title = $request['title']; 
$place = $request['place']; 
$description = $request['description'];
$image = $request['image'];
$price = $request['price']; 
$copie = $request['copie']; 

    $sql = "INSERT INTO `monuments` (`title`, `place`, `description`, `price`, `copie`, `idUser`) 
    VALUES ('".$title."', '".$place."', '".$description."', '".$price."', '".$copie."', '14');";

    // VALUES ('Mosque koutoubia', 'Marrakech', 'Monument historique', '5', '19', '14');";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
    
?>