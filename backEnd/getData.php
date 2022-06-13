<?php

include 'connection.php';

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
?>


<div id="showUser" class="login">
    <div class="text-center">
        <img src="../frontEnd/images/1.jpg" class="show rounded-circle" alt="">
    </div>
        <form  action="#">
            <div class="text-center">
              <strong><p style="font-size: 20px;"><?=$row['nom'];?></p></strong>
              <p><?=$row['email'];?></p>
              <p>9 contributions</p>
            </div>
        </form>
</div>


<?php
  }
} else {
  echo "0 results";
}


mysqli_close($conn);

?>