<?php
    include("config.php");

    $email = $pass = "";
   $email_err = $pass_err = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        //CHECK if email is empty
        if (empty(trim($_POST["email"]))) {
            $email_err = "Email id cannot be blank";
        }
        else{
            $sql = "SELECT sno FROM register WHERE email = ?";
            $stmt = mysqli_prepare($con, $sql);
        
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                //set the value of param email
                $param_email = trim($_POST['email']);

                // try to execute this statement
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        $email_err = "This email id had already registered!";
                        echo '<script> alert("This email id had already registered!"); </script>';
                    } else {                        
                        $email = trim($_POST['email']);
                    }
                    
                }else{
                    echo '<script> alert( "Something went wrong"); </script>';
                }

            }
        }
        mysqli_stmt_close($stmt);



        // Check for password
        if (empty(trim($_POST['password']))) {
            $pass_err = "Password cannot be blank";
        }elseif(strlen(trim($_POST['password']))< 4){
            $pass_err = "Password cannot be less than 4 characters";
        }else{
            $pass = trim($_POST['password']);
        }

        // if there were no errors, go ahead and insert in database
        if (empty($email_err) && empty($pass_err) ) {
            $sql = "INSERT INTO register (email, pass) VALUES (?, ?)";
           // echo $sql; die;
            $stmt = mysqli_prepare($con, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt,"ss", $param_email, $param_pass);

                //Set these parameters
                $param_email = $email;
                $param_pass = password_hash($pass, PASSWORD_DEFAULT);

                // try to execute the query
                if (mysqli_stmt_execute($stmt)) {
                    echo '<script> alert("Your Account has been created!"); 
                    location.href= "login.php";
                    </script>';
                    // header("location: login.php");
                }else{
                    echo "Something went wrong.... cannot reditect!";
                }
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($con);
    }
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                
                  <span class="app-brand-text demo text-body fw-bolder">🏡 CollegeHome</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2"> Create an account!</h4>
              <p class="mb-4"> Grab PG as early as possible🚀</p> 

              <form id="formAuthentication" class="mb-3" method="POST">
                <!-- <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div> -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password" name="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <!-- <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div> 
                </div>-->
                <button class="btn btn-primary d-grid w-100" name= "submit" type="submit">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="login.php">
                  <span>Login instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
