<?php

include 'connection.php';

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

?>
 <div class="login">
                        <div class="text-center">
                            <button class="add rounded-circle btn btn-success"><span style="font-size: 30px; ">+</span></button>
                        </div>
                        <form  id="fupForm" method="POST" name="form!">
                            <div class="text-center">
                                <input type="text"  placeholder="Nom" name="nom" id="nom">
                                <i style="margin-top: -95px; margin-left: 70%; color: gray;" class="fa-solid fa-keyboard" aria-hidden="true"></i>
                                <input type="email" placeholder="E-mail" name="email" id="email">
                                <i style="margin-top: -95px; margin-left: 70%; color: gray;" class="fa-solid fa-keyboard" aria-hidden="true"></i>
                                <input type="password" placeholder="Mot de passe" name="passwd" id="passwd">
                                <i style="margin-top: -95px; margin-left: 70%; color: gray;" class="fa-solid fa-keyboard" aria-hidden="true"></i>
                                <br>
                            </div>
                            <div class="text-center">
                                <button class="add2 btn btn-success" name="save" id="butsave">Ajouter</button>
                            </div>
                        </form>
                    </div>

<?php

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
?>


<div class="login">
    <div class="text-center">
        <img src="<?=$row['image'];?>" class="show rounded-circle" alt="">
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