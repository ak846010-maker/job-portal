<?php
session_start();

if (isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) {
  header("Location: index.php");
  exit();
}
?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
  <title>Candidate Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="assets/css/login.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">


  <!-- <link rel="stylesheet" href="assets/vendor/linearicons/style.css"> -->
  <!-- MAIN CSS -->

  <link rel="stylesheet" href="assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <!-- <link rel="stylesheet" href="assets/css/demo.css"> -->
  <!-- GOOGLE FONTS -->
  <!-- ICONS -->
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png"> -->
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <div class="vertical-align-wrap">
      <div class="vertical-align-middle">

        <div class="container w-100 d-flex align-items-center py-3 px-4">
          <a href="index.php">
            <svg xmlns="http://www.w3.org/2000g" width="35" height="35" fill="currentColor"
              class="bi bi-arrow-left-short " viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
            </svg>
          </a>
          <a href="index.php">
            <p class="p-0 m-0  test">Home</p>
          </a>
        </div>


        <div class="auth-box ">
          <div class="left">
            <div class="content">
              <div class="header">

                <p class="lead">Login to your account</p>
              </div>
              <form method="post" action="checklogin.php">

                <div class="form-group">
                  <label for="signin-email" class="control-label sr-only">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email....">
                </div>
                <div class="form-group pt-3">
                  <label for="signin-password" class="control-label sr-only">Password</label>
                  <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter Password....">
                </div>

                <div class="py-2">


                  <?php
                  //If User have successfully registered then show them this success message
                  //Todo: Remove Success Message without reload?
                  if (isset($_SESSION['registerCompleted'])) {
                    ?>

                    <p id="successMessage" class="text-center">Check your email!</p>
                    <?php
                    unset($_SESSION['registerCompleted']);
                  }
                  ?>
                  <?php
                  //If User Failed To log in then show error message.
                  if (isset($_SESSION['loginError'])) {
                    ?>

                    <p class="text-center">Invalid Email/Password! Try Again!</p>
                    <?php
                    unset($_SESSION['loginError']);
                  }
                  ?>

                  <?php
                  //If User Failed To log in then show error message.
                  if (isset($_SESSION['userActivated'])) {
                    ?>

                    <p class="text-center">Your Account Is Active. You Can Login</p>
                    <?php
                    unset($_SESSION['userActivated']);
                  }
                  ?>

                  <?php
                  //If User Failed To log in then show error message.
                  if (isset($_SESSION['loginActiveError'])) {
                    ?>

                    <p class="text-center"><?php echo $_SESSION['loginActiveError']; ?></p>
                    <?php
                    unset($_SESSION['loginActiveError']);
                  }
                  ?>
                </div>
                <button type="submit" class="btn btn-primary btn-sm btn-block">LOGIN</button>
                <div class="bottom">
                  <br>
                  <span><a href="register-candidates.php">Not A member? SignUp Now!</a></span><br>
                  <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                </div>
              </form>
            </div>
          </div>
          <div class="right">
            <div class="overlay"></div>
            <div class="content text">
              <h1 class="heading">Signup for free to experience your dream job! </h1>
              <p>by Job Portal</p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->

  <!-- Bootstrap 3.3.7 -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
  <!-- iCheck -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <script type="text/javascript">
    $(function () {
      $("#successMessage:visible").fadeOut(8000);
    });
  </script>

</body>

</html>