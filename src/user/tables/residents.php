<?php 
    require("../db/connect.php")
?>
<div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Brgy Id</th>
                                    <th>Fullname</th>
                                    <th>Age</th>
                                    <th>Civil Status</th>
                                    <th>Gender</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM resident";
                                        $statement = $conn -> prepare($query);
                                        $statement->execute();

                                        $result = $statement-> fetchAll();
                                        if($result){
                                            foreach ($result as $row) { ?>
                                                <tr>
                                                    <td><?= $row['resident_brgyID'] ?></td>
                                                    <td><?= $row['resident_firstname']. " ".$row['resident_lastname']?></td>
                                                    <td><?= $row['resident_age'] ?></td>
                                                    <td><?= $row['resident_civilstatus'] ?></td>
                                                    <td><?= $row['resident_gender'] ?></td>                                                   
                                                </tr>
                                                <?php
                                        }
                                        }else{
                                            ?>
                                            <tr>
                                                <td colspan="7">No Residents Added</td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>