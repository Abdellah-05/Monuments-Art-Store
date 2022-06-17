<?php

include 'connection.php';

$sql = "SELECT * FROM monuments";
$result = $conn->query($sql);

?>
                    <div id="add" class="col-sm-4" style="border-radius: 8px; margin-top: 25px; height: 300px;">                               
                        <div class="card" style=" padding: 0; margin: 0; width: 100%; height: 100%; background-color: green;" >
                            <button onclick="myFunction()" class="btn" style="width:100%; height:100%;"><i style="font-size:150px; color:white;" class="fa-solid fa-circle-plus"></i></button>
                        </div>                
                    </div>

                    <div id="addN" class="col-sm-4" style="display:none; border-radius: 8px; margin-top: 25px; height: 300px;">                               
                        <div class="card" style=" padding: 0; margin: 0; width: 100%; height: 100%; " >
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" style="width:180px; height:30px; margin-left: 10px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="place" id="place" style="width:180px; height:30px; margin-left: 10px; margin-top:10px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter place">
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="description" style="width:390px; height:100px; margin-left: 10px; margin-top:10px; resize: none;"  class="form-control" id="exampleFormControlTextarea1"  placeholder="Enter description" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <input name="image" id="image" type="file" style="width:310px; height:35px; margin-left: 10px; margin-top:10px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input name="price" id="price" style="width:100px; height:30px; margin-left: 10px; margin-top:10px;" type="text" class="form-control" placeholder="Enter price">
                                    </div>
                                    <div class="col">
                                        <input name="copie" id="copie" style="width:105px; height:30px; margin-left: 10px; margin-top:10px;" type="text" class="form-control" placeholder="Enter copie">
                                    </div>
                                    <div class="col">
                                        <button style="width:60px; margin-left: 50px; margin-top:10px;"  id="butsave"  class="btn btn-outline-success btn-sm">Save</button>                                    
                                    </div>
                                </div>
                            </form>
                        </div>                
                    </div>

<?php

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
?>
                    <div  class="col-sm-4" style="border-radius: 8px; margin-top: 25px; height: 300px; ">                               
                        <div class="card" style=" padding: 0; margin: 0; width: 100%; height: 100%;" >
                            <img class="card-img-top" src="Images/1.jpg" alt="Card image" style="width: 100%; height: 100%;">
                            <div onmouseover="showImg(this)" onmouseout="hideImg(this)"  class="card-img-overlay" >
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