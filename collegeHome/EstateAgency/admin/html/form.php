<?php
include("config.php");

if(isset($_POST['listPG'])){

  //fetching data
  // Taking all values from the form data(input)
  $pgname = $_POST['pgname'];
  $locality = $_POST['locality'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];
  
  $img1name = $_FILES['img1']['name'];
  $img1tmp = $_FILES['img1']['tmp_name'];
  $img2name = $_FILES['img2']['name'];
  $img2tmp = $_FILES['img2']['tmp_name'];
  $img3name = $_FILES['img3']['name'];
  $img3tmp = $_FILES['img3']['tmp_name'];
  $img4name = $_FILES['img4']['name'];
  $img4tmp = $_FILES['img4']['tmp_name'];
  $img5name = $_FILES['img5']['name'];
  $img5tmp = $_FILES['img5']['tmp_name'];
  $pgIsFor = $_POST['pgIsFor'];
  $roomtype = $_POST['roomtype'];
  $rent = $_POST['rent'];

  $common = $_POST['common'];
  $facilities = $_POST['facilities'];
  
  $securityDeposit = $_POST['securityDeposit'];
  $noticePeriod = $_POST['noticePeriod'];
  $lastEntry = $_POST['lastEntry'];
  $meals = $_POST['meals'];
  $visitors = $_POST['visitors'];
  $oppGender = $_POST['oppGender'];
  $nonVeg = $_POST['nonVeg'];
  $music = $_POST['music'];
  $party = $_POST['party'];
  $smoking = $_POST['smoking'];
  $drinking = $_POST['drinking'];
  $videoname = $_FILES['video']['name'];
  $videotmp = $_FILES['video']['tmp_name'];


    $folder = '../assets/' .$img1name;
    $folder = '../assets/' .$img2name;
    $folder = '../assets/' .$img3name;
    $folder = '../assets/' .$img4name;
    $folder = '../assets/' .$img5name;
    $folder = '../assets/' .$videoname;
    
    foreach($common as $common, $facilities as $facilities )

      // Performing insert query execution
      $sql = "INSERT INTO property  VALUES ('','$pgname',
          '$locality','$city','$state','$pincode'
          '$img1','$img2','$img3','$img4'
          '$img5','$pgIsFor','$roomtype','$rent'
          '$common','$facilities','$securityDeposit'
          '$noticePeriod','$lastEntry','$meals','$visitors'
          '$oppGender','$nonVeg','$music','$party'
          '$smoking','$drinking','$video')";
      
      $query = mysqli_query($conn, $sql);

      if ($query) {
        move_uploaded_file($img1tmp, $folder);
        move_uploaded_file($img2tmp, $folder);
        move_uploaded_file($img3tmp, $folder);
        move_uploaded_file($img4tmp, $folder);
        move_uploaded_file($img5tmp, $folder);
        move_uploaded_file($videoname, $folder);

      }else{
        echo"error";
      }



  // Close connection
  mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
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

    <title>Forms</title>

    <!-- Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


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

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Layouts</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections">Connections</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Misc</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Components
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
             Cards 
            <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
              </a>
            </li>
             User interface 
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">User interface</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Accordion</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Alerts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Badges</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Buttons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Carousel</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">Collapse</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">Dropdowns</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">Footer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-list-groups.html" class="menu-link">
                    <div data-i18n="List Groups">List groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-modals.html" class="menu-link">
                    <div data-i18n="Modals">Modals</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">Navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">Offcanvas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-progress.html" class="menu-link">
                    <div data-i18n="Progress">Progress</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">Spinners</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tabs-pills.html" class="menu-link">
                    <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-toasts.html" class="menu-link">
                    <div data-i18n="Toasts">Toasts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-typography.html" class="menu-link">
                    <div data-i18n="Typography">Typography</div>
                  </a>
                </li>
              </ul>
            </li> 

            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Extended UI</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Boxicons</div>
              </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
            <!-- Forms -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
              </ul>
            </li>



            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"> Your Property is just a step away to be listed! <br> <span class="text-muted fw-light">Please fill this form </span></h4>

<!-- <form action="" method="post" enctype="multipart/form-data"> -->
<form action=".../property-single.php" method="post" enctype="multipart/form-data">

              <div class="row">
                <!-- Basic -->
                <div class="col-md-6">
                  <div class="card mb-4">
                     <h5 class="card-header">Address <span class="text-danger">*</span>  🏡</h5> 
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Name of PG</span>
                        <input type="text" class="form-control" placeholder=" Enter Name of PG" name="pgname" required >
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Locality</span>
                        <input type="text" class="form-control" placeholder="Enter Your Locality" name="locality" required >
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">City name</span>
                        <input type="text" class="form-control" placeholder="Enter Name of the City" name="city" required >
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">State</span>
                        <input type="text" class="form-control" placeholder="Enter Name of the State" name="state" required >
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Pincode</span>
                        <input type="text" class="form-control" placeholder = "Enter Pincode" name="pincode" required >
                      </div>

                    </div> 
                  </div>
                </div>

                <!-- images of PG -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Upload images of your PG <span class="text-danger">*</span> 🏝️</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <small class="text-light fw-semibold d-block">Minimum 2 required</small>
                      <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" name="img1" required>Upload Image</label>
                      </div>
                      <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" name="img2" required>Upload Image</label>
                      </div>
                      <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" name="img3">Upload Image</label>
                      </div>
                      <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" name="img4">Upload Image</label>
                      </div>
                      <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" name="img5">Upload Image</label>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- basic information -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Basic Information <span class="text-danger">*</span> 📑</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                    
                      <div class="mb-3">
                        <label class="form-label">PG is for :</label>
                        <select class="form-select" id="exampleFormControlSelect1" name="pgIsFor" required>
                          <!-- <option selected>PG is for</option> -->
                          <option value="girls">Girls</option>
                          <option value="boys">Boys</option>
                          <option value="both">Girls/Boys</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">Select Room Type</label>
                        <select
                          multiple
                          class="form-select"
                          id="exampleFormControlSelect2"
                          aria-label="Multiple select example"
                          name="roomtype" required
                        >
                          <option selected value="private">Private Room</option>
                          <option value="double">Double Sharing </option>
                          <option value="triple">Triple Sharing</option>
                          <option value="3plus">3+ Sharing</option>
                        </select>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Rent per Month</span>
                        <input type="numbers" aria-label="Price" class="form-control" value="Rs. " name="rent" required/>
                      </div>

                    </div>
                  </div>
                </div>


                <!-- Checkbox and radio addons -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Common Area <span class="text-danger">*</span> 🏕️</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <div class="input-group">
                        <span class="input-group-text form-control">Dining Hall 🍽️</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value ="Dining" name ="common" />
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">Living Room</span>

                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Living" name ="common"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">Kitchen 🍳🍴</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Kitchen" name ="common"/>
                        </div> 
                      </div>
                      <div class="input-group">
                        <span class="input-group-text form-control">Library/Study Room 📚</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Library" name ="common"/>
                        </div> 
                      </div>
                      <div class="input-group">
                        <span class="input-group-text form-control">Break out room 🏓</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Breakout room " name ="common"/>
                        </div> 
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Multiple inputs & addon -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Facilities Available <span class="text-danger">*</span> 🏥</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <div class="input-group">
                        <span class="input-group-text form-control">A/C</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="A/C" name="facilities"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">House Keeping 🧹</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="House Keeping" name="facilities"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">Wifi &nbsp; <i class="bi bi-wifi"></i></span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Wifi" name="facilities"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">Regular Water Supply 🚰</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Regular Water Supply" name="facilities"/>
                        </div> 
                      </div>
                      <div class="input-group">
                        <span class="input-group-text form-control">Personal Cupboard</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Personal Cupboard" name="facilities"/>
                        </div> 
                      </div>
                      <div class="input-group">
                        <span class="input-group-text form-control">Table & Chair 🪑</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Table & Chair" name="facilities"/>
                        </div> 
                      </div>
                      <div class="input-group">
                        <span class="input-group-text form-control">Attached Bathroom 🛁🚿</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Attached Bathroom" name="facilities"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">Attached Balcony</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Attached Balcony" name="facilities"/>
                        </div> 
                      </div>
                      
                      <div class="input-group">
                        <span class="input-group-text form-control">Washing Machine 👕</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Washing Machine" name="facilities"/>
                        </div> 
                      </div>
                      
                      
                      <div class="input-group">
                        <span class="input-group-text form-control">Fridge <i class="fas fa-refrigerator"></i></span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Fridge" name="facilities"/>
                        </div> 
                      </div>
                      
                      <div class="input-group">
                        <span class="input-group-text form-control">TV 📺</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="TV" name="facilities"/>
                        </div> 
                      </div>
                      
                      <div class="input-group">
                        <span class="input-group-text form-control">Parking 🅿️</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Parking" name="facilities"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">24X7 Power Supply 🔋</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="24X7 Power Supply" name="facilities"/>
                        </div> 
                      </div>

                      <div class="input-group">
                        <span class="input-group-text form-control">Geyser</span>
                        <div class="input-group-text">
                          <input class="form-check-input mt-0" type="checkbox" value="Geyser" name="facilities"/>
                        </div> 
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Housing Rules -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Housing Rules <span class="text-danger">*</span> 📜</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <div class="input-group">
                        <span class="input-group-text">Security Deposit </span>
                        <input type="numbers" class="form-control" value="Rs. " name="securityDeposit" required/>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text"> Notice Period</span>
                        <input type="numbers" class="form-control"  value="Days: " name="noticePeriod" required/>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Last Entry Time 🕑</span>
                        <input type="time" class="form-control" name="lastEntry" id="" required>
                      </div>




                      <div class="input-group">
                        <span class="input-group-text">Meals Offered 🍝</span>
                        <span class=" input-group-text ">
                          <input name="meals" class="" type="radio" value="Meals - Offered ✅" id="mealoffer"/>
                          <label class="mx-3" for="mealoffer"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="meals" class="" type="radio" value="Meals - not Offered ❌" id="mealnotoffer"/>
                          <label class="mx-3" for="mealnotoffer"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Visitors allowed 🙋🏼‍♂️</span>
                        <span class=" input-group-text ">
                          <input name="visitors" class="" type="radio" value="Visitors - allowed ✅" id="visitorallow"/>
                          <label class="mx-3" for="visitorallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="visitors" class="" type="radio" value="Visitors - not allowed ❌" id="visitornotallow"/>
                          <label class="mx-3" for="visitornotallow"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Opposite gender allowed👧🏻👦🏻</span>
                        <span class=" input-group-text ">
                          <input name="oppGender" class="" type="radio" value="Opposite gender - allowed ✅" id="oppgenallow"/>
                          <label class="mx-3" for="oppgenallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="oppGender" class="" type="radio" value="Opposite gender - not allowed ❌" id="oppgennotallow"/>
                          <label class="mx-3" for="oppgennotallow"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Non-veg allowed 🍖</span>
                        <span class=" input-group-text ">
                          <input name="nonVeg" class="" type="radio" value="Non-veg - allowed ✅" id="nvegallow"/>
                          <label class="mx-3" for="nvegallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="nonVeg" class="" type="radio" value="Non-veg - not allowed ❌" id="nvegnotallow"/>
                          <label class="mx-3" for="nvegnotallow"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Loud music 🎸</span>
                        <span class=" input-group-text ">
                          <input name="music" class="" type="radio" value="Loud music - allowed ✅" id="musicallow"/>
                          <label class="mx-3" for="musicallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="music" class="" type="radio" value="Loud music - not allowed ❌" id="musicnotallow"/>
                          <label class="mx-3" for="musicnotallow"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Party allowed🎉</span>
                        <span class=" input-group-text ">
                          <input name="party" class="" type="radio" value="Party - allowed ✅" id="partyallow"/>
                          <label class="mx-3" for="partyallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="party" class="" type="radio" value="Party - not allowed ❌" id="partynotallow"/>
                          <label class="mx-3" for="partynotallow"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Smoking allowed 🚬</span>
                        <span class=" input-group-text ">
                          <input name="smoking" class="" type="radio" value="Smoking - allowed ✅" id="smokiallow"/>
                          <label class="mx-3" for="smokiallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="smoking" class="" type="radio" value="Smoking - not allowed ❌" id="smokinotallow"/>
                          <label class="mx-3" for="smokinotallow"> No </label>
                        </span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">Drinking allowed 🍾</span>
                        <span class=" input-group-text ">
                          <input name="drinking" class="" type="radio" value="Drinking - allowed ✅" id="drinkallow"/>
                          <label class="mx-3" for="drinkallow"> Yes </label>
                        </span>
                        <span class="input-group-text">
                          <input name="drinking" class="" type="radio" value="Drinking - not allowed ❌" id="drinknotallow"/>
                          <label class="mx-3" for="drinknotallow"> No </label>
                        </span>
                      </div>

                    </div>
                    <!-- Video File -->
                    <h5 class="card-header">Upload a video of your PG <span class="text-danger">*</span> 🎥</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <span class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" name="video">Upload a Video</label>
                      </span>
                    </div>
                  </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-12">
                  <div class="card">
                      <div class="input-group">
                        <button type="button" class="btn btn-primary form-control" name="listPG">List My PG</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>

</form>


            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
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
