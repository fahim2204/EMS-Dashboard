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
    <?php $page='doctor'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php';?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">

            <div class="row d-flex align-items-center justify-content-between my-3 mx-2">
                <div class="col-sm-12 col-md-4">
                    <i class='bx bx-plus-medical fs-5 text-ems-red'><span class="text-ems-green h4" style="padding-left: 5px;">Doctors</span></i>
                </div>
                <div class="col-3 col-md-4 d-flex justify-content-end gap-2 text-ems-green cursor-pointer">

                    <i class='bx bx-list-ul fs-3' id="list"></i>
                    <i class='bx bx-grid-alt fs-3' id="grid"></i>
                </div>
                <div class="col-7 col-md-4 form-outline">
                    <input type="search" class="form-control" id="searchDoctor" placeholder="Search..">
                </div>
            </div>
            <div class="container">
                <div id="doctors" class="row view-group">
                    <div class="item col-xs-4 col-lg-4" id="doctor">
                        <div class="thumbnail card l-bg-green-dark">
                            <div class="img-event ">
                                <img alt="logo" class=" group list-group-image img-fluid" src="img/doctor.jpg" />
                            </div>
                            <div class="caption card-body p-3">
                                <h5 class="mt-2 fw-bold" id="doctorName">Prof. Dr. Ehsan</h5>
                                <p class="fs-7 mb-0" id="doctorDesig">MBBS, Ph.D., FICS (Neurosurgery)</p>
                                <p class="fs-7" id="doctorSpecial">Medicine Specialist</p>
                                <div class="d-flex justify-content-center ">
                                    <a href="appointment.php" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i
                                            class="far fs-5 fa-calendar-plus me-1"></i> Make an Appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item col-xs-4 col-lg-4" id="doctor">
                        <div class="thumbnail card l-bg-green-dark">
                            <div class="img-event">
                                <img alt="logo" class=" group list-group-image img-fluid" src="img/doctor.jpg" />
                            </div>
                            <div class="caption card-body">
                                <h5 class="mt-2 fw-bold" id="doctorName">Prof. Dr. Sayem</h5>
                                <p class="fs-7 mb-0" id="doctorDesig">MBBS, Ph.D., FICS (Neurosurgery)</p>
                                <p class="fs-7" id="doctorSpecial">Medicine Specialist</p>
                                <div class="text-center">
                                    <a href="appointment.php" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i
                                            class="far fs-5 fa-calendar-plus me-1"></i> Make an Appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-4 col-lg-4" id="doctor">
                        <div class="thumbnail card l-bg-green-dark">
                            <div class="img-event">
                                <img alt="logo" class=" group list-group-image img-fluid" src="img/doctor.jpg" />
                            </div>
                            <div class="caption card-body">
                                <h5 class="mt-2 fw-bold" id="doctorName">Prof. Dr. Fahim Faisal</h5>
                                <p class="fs-7 mb-0" id="doctorDesig">MBBS, Ph.D., FICS (Neurosurgery)</p>
                                <p class="fs-7" id="doctorSpecial">Medicine Specialist</p>
                                <div class="text-center">
                                    <a href="appointment.php" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i
                                            class="far fs-5 fa-calendar-plus me-1"></i> Make an Appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-4 col-lg-4" id="doctor">
                        <div class="thumbnail card l-bg-green-dark">
                            <div class="img-event">
                                <img alt="logo" class=" group list-group-image img-fluid" src="img/doctor.jpg" />
                            </div>
                            <div class="caption card-body">
                                <h5 class="mt-2 fw-bold" id="doctorName">Prof. Dr. Nobi Nawas</h5>
                                <p class="fs-7 mb-0" id="doctorDesig">MBBS, Ph.D., FICS (Neurosurgery)</p>
                                <p class="fs-7" id="doctorSpecial">Medicine Specialist</p>
                                <div class="text-center">
                                    <a href="appointment.php" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i
                                            class="far fs-5 fa-calendar-plus me-1"></i> Make an Appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-4 col-lg-4" id="doctor">
                        <div class="thumbnail card l-bg-green-dark">
                            <div class="img-event">
                                <img alt="logo" class=" group list-group-image img-fluid" src="img/doctor.jpg" />
                            </div>
                            <div class="caption card-body">
                                <h5 class="mt-2 fw-bold" id="doctorName">Prof. Dr. Tasiful Alam</h5>
                                <p class="fs-7 mb-0" id="doctorDesig">MBBS, Ph.D., FICS (Neurosurgery)</p>
                                <p class="fs-7" id="doctorSpecial">Medicine Specialist</p>
                                <div class="text-center">
                                    <a href="appointment.php" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i
                                            class="far fs-5 fa-calendar-plus me-1"></i> Make an Appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-4 col-lg-4" id="doctor">
                        <div class="thumbnail card l-bg-green-dark">
                            <div class="img-event">
                                <img alt="logo" class=" group list-group-image img-fluid" src="img/doctor.jpg" />
                            </div>
                            <div class="caption card-body">
                                <h5 class="mt-2 fw-bold" id="doctorName">Prof. Dr. Albert</h5>
                                <p class="fs-7 mb-0" id="doctorDesig">MBBS, Ph.D., FICS (Neurosurgery)</p>
                                <p class="fs-7" id="doctorSpecial">Medicine Specialist</p>
                                <div class="text-center">
                                    <a href="appointment.php" class="btn btn-sm btn-danger bg-ems-red mt-2"> <i
                                            class="far fs-5 fa-calendar-plus me-1"></i> Make an Appoinment</a>
                                </div>
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
        // search doctor function
        $(document).ready(function () {
            $("#searchDoctor").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#doctors #doctor").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        // list and grid function
        $(document).ready(function () {
            $('#list').click(function (event) { event.preventDefault(); $('#doctors .item').addClass('list-group-item'); });
            $('#grid').click(function (event) { event.preventDefault(); $('#doctors .item').removeClass('list-group-item'); $('#doctors .item').addClass('grid-group-item'); });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>