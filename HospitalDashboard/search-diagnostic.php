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
        <a href="index.php" class="nav-link">
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
        <a href="search-diagnostic.php" class="nav-link active">
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
        <a href="reward-point.php" class="nav-link">
          <i class="bx bx-wallet"></i>
          <span class="mx-2">Reward Point</span>
        </a>
        <a href="#" class="nav-link">
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
            <div class="left">
                <a class="btn border-0" id="menu-btn"><i id="menu-icon" class="fas fa-arrow-left"></i></a>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex me-2 text-light">
                    <div class="dropdown">
                        <div class="d-flex justify-content-between align-items-center cursor-pointer" id="dropdownnotif" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="d-flex justify-content-between align-items-center dropdown-toggle cursor-pointer" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="row d-flex align-items-center justify-content-between my-3 mx-2">
                <div class="col-sm-12 col-md-4 mb-2">
                   <span class="text-ems-green h4">Test</span>
                </div>
                <div class="col-3 col-md-4 d-flex justify-content-end gap-2 text-ems-green cursor-pointer">

                    <i class='bx bx-list-ul fs-3' id="list"></i>
                    <i class='bx bx-grid-alt fs-3' id="grid"></i>
                </div>
                <div class="col-7 col-md-4 form-outline">
                    <input type="search" class="form-control" id="searchDoctor" placeholder="Search..">
                </div>
            </div>
            <div class="row p-3" id="diagnostics">
                <div class="item col-12 col-md-6 col-lg-4 col-xl-3" id="test">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <!-- examname -->
                            <h5 class="fw-bold">X-RAY (PLAIN)</h5>
                            <!-- departmentname -->
                            <h6 class="mt-2 mb-0 fw-bold">Elbow Joint (UR)</h6>
                            <p class="fs-7 my-0 opacity-75">A/P, Oblique, and Lateral</p>
                            <!-- diagonisticname -->
                            <p class="fs-6 my-1 opacity-75">LABAID Diagnostic</p>
                            <!-- normalrate -->
                            <p class="fs-6">Price: 300TK</p>
                            <div class="">
                                <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i class="fas fa-diagnoses fs-5 me-1"></i> Make a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-12 col-md-6 col-lg-4 col-xl-3" id="test">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <!-- examname -->
                            <h5 class="fw-bold">X-RAAY (PLAIN)</h5>
                            <!-- departmentname -->
                            <h6 class="mt-2 mb-0 fw-bold">Elbow Joint (UR)</h6>
                            <p class="fs-7 my-0 opacity-75">A/P, Oblique, and Lateral</p>
                            <!-- diagonisticname -->
                            <p class="fs-6 my-1 opacity-75">LABAID Diagnostic</p>
                            <!-- normalrate -->
                            <p class="fs-6">Price: 300TK</p>
                            <div class="">
                                <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i class="fas fa-diagnoses fs-5 me-1"></i> Make a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-12 col-md-6 col-lg-4 col-xl-3" id="test">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <!-- examname -->
                            <h5 class="fw-bold">X-RAY (PLAIN)</h5>
                            <!-- departmentname -->
                            <h6 class="mt-2 mb-0 fw-bold">Elbow Joint (UR)</h6>
                            <p class="fs-7 my-0 opacity-75">A/P, Oblique, and Lateral</p>
                            <!-- diagonisticname -->
                            <p class="fs-6 my-1 opacity-75">LABAID Diagnostic</p>
                            <!-- normalrate -->
                            <p class="fs-6">Price: 300TK</p>
                            <div class="">
                                <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i class="fas fa-diagnoses fs-5 me-1"></i> Make a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-12 col-md-6 col-lg-4 col-xl-3" id="test">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <!-- examname -->
                            <h5 class="fw-bold">X-RAY (PLAIN)</h5>
                            <!-- departmentname -->
                            <h6 class="mt-2 mb-0 fw-bold">Elbow Joint (UR)</h6>
                            <p class="fs-7 my-0 opacity-75">A/P, Oblique, and Lateral</p>
                            <!-- diagonisticname -->
                            <p class="fs-6 my-1 opacity-75">LABAID Diagnostic</p>
                            <!-- normalrate -->
                            <p class="fs-6">Price: 300TK</p>
                            <div class="">
                                <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i class="fas fa-diagnoses fs-5 me-1"></i> Make a Request</a>
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
    <script>
        $(document).ready(function() {
            $("#searchDiagTest").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#diagnostics #test").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        $(document).ready(function () {
            $('#list').click(function (event) { event.preventDefault(); $('#diagnostics .item').addClass('list-ems-item'); });
            $('#grid').click(function (event) { event.preventDefault(); $('#diagnostics .item').removeClass('list-ems-item'); $('#doctors .item').addClass('grid-ems-item'); });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>