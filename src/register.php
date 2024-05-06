<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SBMIS | Register</title>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- Form -->
              <h4>New here?</h4>
              <h6 class="font-weight-light">Sign up to request barangay forms easier.</h6>
              <form class="pt-3" action="saves/registerSave.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="user_firstname" name="user_firstname" placeholder="Firstname">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="user_lastname" name="user_lastname" placeholder="Lastname">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="user_email" name="user_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="user_password" name="user_password" placeholder="Password">
                </div>
                <div class="mt-3 d-grid gap-2">
                  <input type="submit" value="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btnn">
                </div>
                <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a></div>
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- End content-wrapper -->
    </div>
    <!-- End page-body-wrapper -->
  </div>
  <!-- End container-scroller -->
  <!-- JS -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
</body>
</html>
