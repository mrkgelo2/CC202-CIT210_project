<?php 
require("../db/connect.php");

$query = "SELECT * FROM announcement";
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
if ($result) {
    $count = 0; 
    foreach ($result as $row){
        if ($count % 2 == 0) {           
            echo '<div class="row">';
        }
        ?>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4><b><?=$row['ann_title']?></b></h4>
                    <p><?=$row['ann_time']?> | <?=$row['ann_date']?> | <?=$row['ann_location']?></p>
                    <hr>
                    <p><?=$row['ann_description']?></p>
                    <br>
                </div>
                
            </div>
        </div>
        <?php
        $count++;
        if ($count % 2 == 0 || $count == count($result)) {
            echo '</div>';
        }
    }
}else{
    ?>
    <center>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3><b>No announcements yet</b></h3>
                </div>
            </div>
        </div>
    </center>
    <?php
}
?>