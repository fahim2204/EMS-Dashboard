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
    <?php $page='hospital'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between my-3 mx-2">
                <div class="col-sm-12 col-md-4 mb-2">
                    <span class="text-ems-green h4">Hospitals</span>
                </div>
                <div class="col-3 col-md-4 d-flex justify-content-end gap-2 text-ems-green cursor-pointer">

                    <i class='bx bx-list-ul fs-3' id="list"></i>
                    <i class='bx bx-grid-alt fs-3' id="grid"></i>
                </div>
                <div class="col-7 col-md-4 form-outline">
                    <input type="search" class="form-control" id="searchDoctor" placeholder="Search..">
                </div>
            </div>
            <div class="row p-3" id="hospitals">
                <div class="item col-12 col-md-6 col-lg-4" id="hospital">
                    <div class="card card-border-top l-bg-green-dark ">
                        <div class="p-3">
                            <div class="d-flex align-items-center mb-2">
                                <img class="rounded-circle align-self-start me-2" width="60" src="./img/hospital.jpg"
                                    alt="hospital">
                                <div>
                                    <!-- hospitalname -->
                                    <span class="h6">Banasree General & Kidney Hospital Ltd</span>
                                    <!-- hospitaladdress -->
                                    <div class="fs-7 opacity-75">City Tower, 44/7 Panthapath, Dhaka 1205</div>
                                </div>
                            </div>
                            <div class="ms-1">
                                <!-- hospitalcontact -->
                                <div>Contact: <span style="font-weight: 600;">0143xxxxxx</span> </div>
                                <!-- hospitalemail -->
                                <div>Email: <span style="font-weight: 600;">xxxxx@gmxx.com</span> </div>
                                <!-- HospitalTotalBed -->
                                <div>No. of Bed: <span style="font-weight: 600;">150</span> </div>
                                <!-- Optional -->
                                <div>No. of Consultant: <span style="font-weight: 600;">20</span> </div>
                                <!-- HospitalRegNumber -->
                                <div>Registration Number: <span style="font-weight: 600;">343488xxxxx</span> </div>
                            </div>
                            <div class="">
                                <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-3">Learn More</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="item col-12 col-md-6 col-lg-4" id="hospital">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <div class="d-flex align-items-center mb-2">
                                <img class="rounded-circle align-self-start me-2" width="60" src="./img/hospital.jpg"
                                    alt="hospital">
                                <div>
                                    <!-- hospitalname -->
                                    <span class="h6">Dhanmondi General & Kidney Hospital Ltd</span>
                                    <!-- hospitaladdress -->
                                    <div class="fs-7 opacity-75">City Tower, 44/7 Panthapath, Dhaka 1205</div>
                                </div>
                            </div>
                            <div class="ms-1">
                                <!-- hospitalcontact -->
                                <div>Contact: <span style="font-weight: 600;">0143xxxxxx</span> </div>
                                <!-- hospitalemail -->
                                <div>Email: <span style="font-weight: 600;">xxxxx@gmxx.com</span> </div>
                                <!-- HospitalTotalBed -->
                                <div>No. of Bed: <span style="font-weight: 600;">150</span> </div>
                                <!-- Optional -->
                                <div>No. of Consultant: <span style="font-weight: 600;">20</span> </div>
                                <!-- HospitalRegNumber -->
                                <div>Registration Number: <span style="font-weight: 600;">343488xxxxx</span> </div>
                            </div>
                            <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item col-12 col-md-6 col-lg-4" id="hospital">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <div class="d-flex align-items-center mb-2">
                                <img class="rounded-circle align-self-start me-2" width="60" src="./img/hospital.jpg"
                                    alt="hospital">
                                <div>
                                    <!-- hospitalname -->
                                    <span class="h6">Dhanmondi General & Kidney Hospital Ltd</span>
                                    <!-- hospitaladdress -->
                                    <div class="fs-7 opacity-75">City Tower, 44/7 Panthapath, Dhaka 1205</div>
                                </div>
                            </div>
                            <div class="ms-1">
                                <!-- hospitalcontact -->
                                <div>Contact: <span style="font-weight: 600;">0143xxxxxx</span> </div>
                                <!-- hospitalemail -->
                                <div>Email: <span style="font-weight: 600;">xxxxx@gmxx.com</span> </div>
                                <!-- HospitalTotalBed -->
                                <div>No. of Bed: <span style="font-weight: 600;">150</span> </div>
                                <!-- Optional -->
                                <div>No. of Consultant: <span style="font-weight: 600;">20</span> </div>
                                <!-- HospitalRegNumber -->
                                <div>Registration Number: <span style="font-weight: 600;">343488xxxxx</span> </div>
                            </div>
                            <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="item col-12 col-md-6 col-lg-4" id="hospital">
                    <div class="card card-border-top l-bg-green-dark">
                        <div class="p-3">
                            <div class="d-flex align-items-center mb-2">
                                <img class="rounded-circle align-self-start me-2" width="60" src="./img/hospital.jpg"
                                    alt="hospital">
                                <div>
                                    <!-- hospitalname -->
                                    <span class="h6">Dhanmondi General & Kidney Hospital Ltd</span>
                                    <!-- hospitaladdress -->
                                    <div class="fs-7 opacity-75">City Tower, 44/7 Panthapath, Dhaka 1205</div>
                                </div>
                            </div>
                            <div class="ms-1">
                                <!-- hospitalcontact -->
                                <div>Contact: <span style="font-weight: 600;">0143xxxxxx</span> </div>
                                <!-- hospitalemail -->
                                <div>Email: <span style="font-weight: 600;">xxxxx@gmxx.com</span> </div>
                                <!-- HospitalTotalBed -->
                                <div>No. of Bed: <span style="font-weight: 600;">150</span> </div>
                                <!-- Optional -->
                                <div>No. of Consultant: <span style="font-weight: 600;">20</span> </div>
                                <!-- HospitalRegNumber -->
                                <div>Registration Number: <span style="font-weight: 600;">343488xxxxx</span> </div>
                            </div>
                            <a href="#" class="btn btn-sm btn-danger bg-ems-red mt-3">Learn More</a>
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
            $("#searchHospital").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#doctors #hospital").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        $(document).ready(function () {
            $('#list').click(function (event) { event.preventDefault(); $('#hospitals .item').addClass('list-ems-item'); });
            $('#grid').click(function (event) { event.preventDefault(); $('#hospitals .item').removeClass('list-ems-item'); $('#doctors .item').addClass('grid-ems-item'); });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>