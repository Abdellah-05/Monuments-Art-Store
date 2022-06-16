<?php

include 'connection.php';

$sql = "SELECT * FROM monuments";
$result = $conn->query($sql);

?>
                    <div class="col-sm-4" style="border-radius: 8px; margin-top: 25px; height: 300px; ">                               
                        <div class="card" style=" padding: 0; margin: 0; width: 100%; height: 100%;" >
                            
                        </div>                
                    </div>

<?php

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
?>
                    <div class="col-sm-4" style="border-radius: 8px; margin-top: 25px; height: 300px; ">                               
                        <div class="card" style=" padding: 0; margin: 0; width: 100%; height: 100%;" >
                            <img class="card-img-top" src="Images/1.jpg" alt="Card image" style="width: 100%; height: 100%;">
                            <div class="card-img-overlay" >
                                <div class="card-header" style="display: flex; flex-wrap: wrap; color: white; font-weight: bold;">
                                    <div class="title" style=" width: 70%;"><?=$row['title'];?></div>
                                    <div class="bottons" style=" width: 30%; margin-top: -64px; margin-left: 257px; z-index: 10;">
                                        <div class="rounded-circle" style=" width: 40px; height: 40px; position: absolute;  margin-left: 10%; font-size: 20px; z-index: 10; background-color: rgba(255, 166, 0, 0.842); color: rgb(253, 253, 253);" >
                                            <a href="" data-id="<?php echo $row['id'];?>"><i class="fa fa-pencil" aria-hidden="true" style="margin-left: 25%; margin-top: 11px; color: white;" ></i> </a>
                                        </div>
                                        <div class="rounded-circle" style=" width: 40px; height: 40px; position: absolute;  margin-left: 22%; font-size: 20px; z-index: 10; background-color: rgba(243, 20, 20, 0.842); color: rgb(253, 253, 253);" >
                                            <a href="../backEnd/deleteMonuments.php" name="<?php echo $row["id"]; ?>"  id="butdelete"><i class="fa fa-trash" aria-hidden="true" style="margin-left: 28%; margin-top: 11px; color: white;" ></i> </a>
                                        </div>                                                                
                                    </div>
                                </div>
                                <div class="card-body" style="color:white; font-size:10px;">
                                    <h6 class="card-title"><?=$row['place'];?></h6>
                                    <p class="card-text" style="position: relative; font-size: 12px; overflow:hidden; width: 100%; height: 130px; "><?=$row['description'];?></p>
                                </div>
                                <div class="card-footer" style="width: 90%; text-align: center;font-weight: bold; color: white; position: absolute; bottom:1px;">
                                    <div style="width: 30%; float: left;"><?=$row['price'];?>$</div> <div style="width: 30%; float: right;"><?=$row['copie'];?> Copies</div>
                                </div>
                            </div>
                        </div>                
                    </div>

<?php
  }
} 

mysqli_close($conn);

?>