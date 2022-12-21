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
                <span class="mx-2">Your Dashboard</span>
            </a>
            <a href="update-details.php" class="nav-link">
                <i class="bx bxs-edit-alt"></i>
                <span class="mx-2">Update Your Details</span>
            </a>
            <a href="update-details.php" class="nav-link">
                <i class="bx bxs-edit-alt"></i>
                <span class="mx-2">Search Your Needs</span>
            </a>
            <a href="search-doctor.php" class="nav-link active">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Doctor</span>
            </a>
            <a href="search-diagnostic.php" class="nav-link">
                <i class="bx bxs-flask"></i>
                <span class="mx-2">Diagnostic</span>
            </a>
            <a href="search-hospital.php" class="nav-link">
                <i class="bx bxs-clinic"></i>
                <span class="mx-2">Hospital</span>
            </a>
            <a href="search-medicine.php" class="nav-link">
                <i class="bx bxs-capsule"></i>
                <span class="mx-2">Medicine</span>
            </a>
            <a href="add-family-member.php" class="nav-link">
                <i class="bx bx-user-plus"></i>
                <span class="mx-2">Add Members</span>
            </a>
            <a href="family-members-list.php" class="nav-link">
                <i class="bx bxs-user-account"></i>
                <span class="mx-2">Member Details</span>
            </a>
            <a href="reward-point.php" class="nav-link">
                <i class="bx bx-wallet"></i>
                <span class="mx-2">Reward Points</span>
            </a>
            <a href="prescription.php" class="nav-link">
                <i class='bx bx-bookmark-alt-plus'></i>
                <span class="mx-2">Your Prescription</span>
            </a>
            <a href="#" class="nav-link">
                <i class='bx bxs-capsule'></i>
                <span class="mx-2">Your Current Medication</span>
            </a>
            <a href="medical-report.php" class="nav-link">
                <i class='bx bxs-report'></i>
                <span class="mx-2">Your Medical Reports</span>
            </a>
            <a href="medical-history.php" class="nav-link">
                <i class='bx bx-history'></i>
                <span class="mx-2">Your Medical History</span>
            </a>
            <a href="#" class="nav-link">
                <i class='bx bx-plus-medical'></i>
                <span class="mx-2">Your Doctors</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bx bxs-clinic"></i>
                <span class="mx-2">Your Hospitals</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bx bx-wallet"></i>
                <span class="mx-2">Patient Stories</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bx bxs-log-out"></i>
                <span class="mx-2">logout</span>
            </a>
        </ul>
    </div>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light sticky-top top-0 bg-ems-green px-5 d-flex">
            <div class="left">
                <a class="btn border-0" id="menu-btn"><i id="menu-icon" class="fas fa-arrow-left"></i></a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="medical-history.html"><button type="submit" class="btn btn-success bg-ems-white text-ems-green fs-7">Are you in a Medication?</button></a>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex me-2 text-light">
                    <div class="dropdown">
                        <div class="d-flex justify-content-between align-items-center cursor-pointer" id="dropdownnotif"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="d-flex justify-content-between align-items-center dropdown-toggle cursor-pointer"
                            id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
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