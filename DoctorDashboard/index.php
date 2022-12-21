<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS - EVERSPECIAL MEDICAL SUPPORT</title>
    <!-- CSS SECTION START -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome-all.css" />
    <link rel="stylesheet" href="css/boxicons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS SECTION END -->
  </head>

  <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/EMS-logo.png" alt="logo" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->

    <!-- SIDE-NAV START -->
    <div class="side-navbar active-nav d-flex flex-column shadow-sm" id="sidebar">
      <div class="d-flex justify-content-center py-2">
        <a href="index.php"><img src="img/EMS-logo.svg" alt="LOGO" height="60" /></a>
      </div>
      <ul class="nav flex-column text-white w-100 cursor-pointer mt-2">
        <a href="index.php" class="nav-link active">
          <i class="bx bxs-dashboard"></i>
          <span class="mx-2">Home</span>
        </a>
        <a href="update-details.php" class="nav-link">
          <i class="bx bxs-edit-alt"></i>
          <span class="mx-2">Update Your Details</span>
        </a>
        <a href="search-doctor.php" class="nav-link">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Search Doctor</span>
        </a>
        <a href="search-diagnostic.php" class="nav-link">
          <i class="bx bxs-flask"></i>
          <span class="mx-2">Search Diagnostic</span>
        </a>
        <a href="search-hospital.php" class="nav-link">
          <i class="bx bxs-clinic"></i>
          <span class="mx-2">Search Hospital</span>
        </a>
        <a href="search-medicine.php" class="nav-link">
          <i class="bx bxs-capsule"></i>
          <span class="mx-2">Search Medicine</span>
        </a>
        <a href="prescription.php" class="nav-link">
          <i class="bx bxs-capsule"></i>
          <span class="mx-2">Add Prescription</span>
        </a>
        <a href="reward-point.php" class="nav-link">
          <i class="bx bx-wallet"></i>
          <span class="mx-2">Reward Point</span>
        </a>
        <a href="" class="nav-link">
          <i class="bx bxs-log-out"></i>
          <span class="mx-2">logout</span>
        </a>
      </ul>
      <div class="left">
        <a class="btn border-0" id="menu-btn"><i id="menu-icon" class="fas fa-arrow-left"></i></a>
      </div>
    </div>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
      <!-- Top Nav -->
      <nav class="navbar top-navbar navbar-light sticky-top top-0 bg-ems-green px-5 d-flex">
        <div class="d-flex align-items-center">
          <div class="d-flex me-2 text-light">
            <div class="dropdown">
              <div
                class="d-flex justify-content-between align-items-center cursor-pointer"
                id="dropdownnotif"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bx bx-bell bx-sm me-1 fw-lighter hover-rounded-light"></i>
              </div>
              <ul class="dropdown-menu dropdown-menu-end pb-0" aria-labelledby="dropdownnotif">
                <div class="text-center border-bottom pb-1">
                  <span class="text-center mx-auto">Notification</span>
                </div>
                <li><button class="dropdown-item" type="button">My Account</button></li>
                <li><button class="dropdown-item" type="button">My Profile</button></li>
                <li><button class="dropdown-item" type="button">Settings</button></li>
                <li>
                  <button class="dropdown-item border-top text-center lsp-1" type="button">
                    View All
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="d-flex text-light">
            <div class="dropdown">
              <div
                class="d-flex justify-content-between align-items-center dropdown-toggle cursor-pointer"
                id="dropdownprofile"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bx bxs-user-circle bx-md me-2"></i>
                <span class="lsp-1">Jhon Doe</span>
              </div>
              <ul class="dropdown-menu" aria-labelledby="dropdownprofile">
                <li><button class="dropdown-item" type="button">My Account</button></li>
                <li><button class="dropdown-item" type="button">My Profile</button></li>
                <li><button class="dropdown-item" type="button">Settings</button></li>
                <li><button class="dropdown-item" type="button">Logout</button></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--End Top Nav -->
      <!-- MAIN BODY CONTENT START -->
      <div class="container">
        <div class="row p-3">
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-hospital-user"></i></div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Patient</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">15,000</h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-cyan"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-user-md"></i></div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Doctor</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">300</h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-cyan"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-hospital-alt"></i></div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Hospital</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">150</h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-green"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large">
                  <i class="fas fa-prescription-bottle-alt"></i>
                </div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Pharmacy</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">220</h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-orange"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-flask"></i></div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Diagnostic</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">50</h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-cyan"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-user-friends"></i></div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Family Member</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">2</h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-cyan"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large">
                  <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Bill</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">
                    50,000
                    <span class="fs-6 ms-1">TK</span>
                  </h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-cyan"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card card-border-left l-bg-green-dark">
              <div class="p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-percent"></i></div>
                <div class="mb-4">
                  <h5 class="card-title mb-0">Total Discount</h5>
                </div>
                <div class="d-flex align-items-center mb-2 justify-content-between">
                  <h4 class="d-flex align-items-center mb-0">
                    15,000
                    <span class="fs-6 ms-1">TK</span>
                  </h4>
                  <span>
                    12.5%
                    <i class="fa fa-arrow-up"></i>
                  </span>
                </div>
                <div class="progress mt-1" data-height="8" style="height: 8px">
                  <div
                    class="progress-bar l-bg-cyan"
                    role="progressbar"
                    data-width="25%"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 25%"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- MAIN BODY CONTENT END -->

      <!-- Footer Start -->

      <footer class="container-fluid bg-ems-green mt-auto">
        <p class="text-light text-center pt-3">
          Copyright © 2022. All rights reserved
          <a class="text-decoration-none text-light fw-bold" href="http://sfgroup.com.bd">
            SF GROUP
          </a>
        </p>
      </footer>

      <!-- Footer End  -->
    </div>

    <!-- JS SCRIPT START -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/boxicons.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/main.js"></script>
    <!-- JS SCRIPT END -->
  </body>
</html>
