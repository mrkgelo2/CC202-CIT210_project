<?php 
include("db/connect.php");

if(isset($_GET['official_id'])){
    $official_id = $_GET['official_id'];

    $query = "SELECT * FROM officials WHERE official_id=:official_id";
    $statement = $conn->prepare($query);
    $statement->bindParam(':official_id', $official_id);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    $official_id = $result['official_id'];
    $official_firstname = $result['official_firstname'];
    $official_lastname = $result['official_lastname'];
    $official_contact = $result['official_contactNumber'];
    $official_position = $result['official_position'];
    $official_email = $result['official_email'];
    $official_project = $result['official_project'];
}
?> 

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Officials</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <?php include("partials/_navbar.php") ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar-->
            <?php include("partials/_sidebar.php") ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                        <h5 class="form-title" id="updateOfficial">Update Official</h5>
                        <hr>
                            <form class="form-sample" action="././saves/officialsSave.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <input type="hidden" name="official_id" value="<?= $official_id ?>">
                                            <label class="col-sm-3 col-form-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<?= $official_firstname ?>" class="form-control" id="official_firstname" name="official_firstname">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Contact Number</label>
                                            <div class="col-sm-9">
                                                <input type="number" value="<?= $official_contact ?>" class="form-control" id="official_contact" name="official_contact">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<?= $official_lastname ?>" class="form-control" id="official_lastname" name="official_lastname">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Appointed Position</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="official_position" name="official_position">
                                                    <option value="" disabled="" selected="">Select your Option</option>
                                                    <option <?php if($official_position == 'Punong Baranggay') echo 'selected'; ?>>Punong Baranggay</option>
                                                    <option <?php if($official_position == 'Baranggay Kagawad') echo 'selected'; ?>>Baranggay Kagawad</option>
                                                    <option <?php if($official_position == 'Baranggay Treasurer') echo 'selected'; ?>>Baranggay Treasurer</option>
                                                    <option <?php if($official_position == 'Baranggay Secretary') echo 'selected'; ?>>Baranggay Secretary</option>
                                                    <option <?php if($official_position == 'SK Chairperson') echo 'selected'; ?>>SK Chairperson</option>
                                                    <option <?php if($official_position == 'SK Member') echo 'selected'; ?>>SK Member</option>
                                                    <option <?php if($official_position == 'Other Appointed Baranggay Official') echo 'selected'; ?>>Other Appointed Baranggay Official</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" value="<?= $official_email ?>" class="form-control" placeholder="email" id="official_email" name="official_email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Project</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="official_project" name="official_project">
                                                    <option value="" disabled="" selected="">Select your option</option>
                                                    <option <?php if($official_project == 'Project 1') echo 'selected'; ?>>Project 1</option>
                                                    <option <?php if($official_project == 'Project 2') echo 'selected'; ?>>Project 2</option>
                                                    <option <?php if($official_project == 'Project 3') echo 'selected'; ?>>Project 3</option>
                                                    <option <?php if($official_project == 'Project 4') echo 'selected'; ?>>Project 4</option>
                                                    <option <?php if($official_project == 'Project 5') echo 'selected'; ?>>Project 5</option>
                                                    <option <?php if($official_project == 'Project 6') echo 'selected'; ?>>Project 6</option>
                                                    <option <?php if($official_project == 'Project 7') echo 'selected'; ?>>Project 7</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="window.location.href='officials.php'">Close</button>
                                    <input type="submit" name="update_official_btn" value="Update Official" class="btn btn-info">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <?php require("tables/officialsTable.php"); ?>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include("partials/_footer.php") ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
   