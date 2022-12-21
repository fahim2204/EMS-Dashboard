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
    <?php $page='diagonstic'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php';?>
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
            $('#grid').click(function (event) { event.preventDefault(); $('#diagnostics .item').removeClass('list-ems-item'); $('#doctors .item').addClass('grid-group-item'); });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>