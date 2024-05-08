<?php 
include("db/connect.php");

if(isset($_GET['resident_id'])){
    $resident_id = $_GET['resident_id'];

    $query = "SELECT * FROM resident WHERE resident_id=:resident_id";
    $statement = $conn->prepare($query);
    $statement->bindParam(':resident_id', $resident_id);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    $resident_id = $result['resident_id'];
    $resident_firstname = $result['resident_firstname'];
    $resident_lastname = $result['resident_lastname'];
    $resident_contactNumber = $result['resident_contactNumber'];
    $resident_brgyID = $result['resident_brgyID'];
    $resident_gender = $result['resident_gender'];
    $resident_dob = $result['resident_dob'];
    $resident_age = $result['resident_age'];
    $resident_civilstatus = $result['resident_civilstatus'];
    $resident_project = $result['resident_project'];
    $resident_householdNumber = $result['resident_householdnumber'];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Resident</title>
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
                                <h5 class="form-title" id="updateResident">Update Resident</h5>
                                <hr>
                                <form action="././saves/residentsSave.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- First Name -->
                                            <input type="hidden" name="resident_id" value="<?= $resident_id ?>">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">First Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?= $resident_firstname ?>"class="form-control" id="resident_firstname" name="resident_firstname">
                                                </div>
                                            </div>
                                            <!-- Gender -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Gender</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" value="<?= $resident_gender ?>" id="resident_gender" name="resident_gender">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Prefer not to say</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Civil Status -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Civil Status</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" value="<?= $resident_civilstatus ?>"id="resident_civilstatus" name="resident_civilstatus">
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Divorced</option>
                                                        <option>Widowed</option>
                                                        <option>Separated</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Contact Number -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Contact Number</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" value="<?= $resident_contactNumber ?>" id="resident_contactnumber" name="resident_contactnumber">
                                                </div>
                                            </div>
                                            <!-- Barangay ID -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Barangay ID</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?= $resident_brgyID ?>"class="form-control" id="resident_brgyID" name="resident_brgyID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Last Name -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Last Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?= $resident_lastname ?>" class="form-control" id="resident_lastname" name="resident_lastname">
                                                </div>
                                            </div>
                                            <!-- Date of Birth -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control"value="<?= $resident_dob?>" placeholder="dd/mm/yyyy" id="resident_dob" name="resident_dob">
                                                </div>
                                            </div>
                                            <!-- Age -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Age</label>
                                                <div class="col-sm-9">
                                                    <input type="number"value="<?= $resident_age ?>" class="form-control" id="resident_age" name="resident_age">
                                                </div>
                                            </div>
                                            <!-- Project -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Project</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" value="<?= $resident_project ?>"id="resident_project" name="resident_project">
                                                        <option>Project 1</option>
                                                        <option>Project 2</option>
                                                        <option>Project 3</option>
                                                        <option>Project 4</option>
                                                        <option>Project 5</option>
                                                        <option>Project 6</option>
                                                        <option>Project 7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Household No. -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Household No.</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="<?= $resident_householdNumber ?>"id="resident_householdnumber" name="resident_householdnumber">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="window.location.href='residents.php'">Close</button>
                                        <input type="submit" name="update_resident_btn" value="Update Resident" class="btn btn-block btn-primary ">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <?php require("tables/residentsTable.php") ?>
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
</body>
</html>
