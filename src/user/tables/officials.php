<?php
require("../db/connect.php");
?>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Position</th>
                    <th>Contact No.</th>
                    <th>Email</th>
                    <th>Project</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM officials";
                $statement = $conn->prepare($query);
                $statement->execute();

                $result = $statement->fetchAll();
                if ($result) {
                    foreach ($result as $row) {
                        ?>
                        <tr>
                            <td><?= $row['official_lastname'] ?></td>
                            <td><?= $row['official_firstname'] ?></td>
                            <td><?= $row['official_position'] ?></td>
                            <td><?= '0' . $row['official_contactNumber'] ?></td>
                            <td><?= $row['official_email'] ?></td>
                            <td><?= $row['official_project']?></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">No officials Added</td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
