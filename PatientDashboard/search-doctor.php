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
    <link rel="stylesheet" href="css/doctor.css" />
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
    <?php $page = 'doctor';
    include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">

            <div class="row d-flex align-items-center justify-content-between my-3 mx-2">
                <div class="col-sm-12 col-md-6 mb-2">
                    <i class='bx bx-plus-medical fs-5 text-ems-red'><span class="text-ems-green h4" style="padding-left: 5px;">Doctors</span></i>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-group">
                        <select id="doctor" class="form-select" aria-label="doctor_details">
                            <option value="1">Name</option>
                            <option value="2">Specialty</option>
                            <option value="3">Chamber</option>
                            <option value="4">Location</option>
                        </select>
                        <input type="search" class="form-control w-50" id="searchDoctor" aria-label="Text input with dropdown button" placeholder="Search..">
                    </div>
                </div>
            </div>
            <div class="table-responsive table-voucher">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Doctor Name</th>
                            <th>Designation</th>
                            <th>Specialty</th>
                            <th>Qualification</th>
                            <th>Age</th>
                            <th>P/Y of MBBS</th>
                            <th>Location</th>
                            <th>Chamber</th>
                            <th>Action</th>
                            <th>Appointment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Doctor Name">DR. Sayem</td>
                            <td data-label="Designation">Professor</td>
                            <td data-label="Specialty">Neuro</td>
                            <td data-label="Qualification">MBBS, FCPS</td>
                            <td data-label="Age">30</td>
                            <td data-label="P/Y of MBBS">2015</td>
                            <td data-label="Location">Dhaka</td>
                            <td data-label="Chamber">Popular Hospital
                            </td>
                            <td data-label="View Doctors Profile"><i class='bx bx-low-vision fs-5'></i></td>
                            <td data-label="Type of appointment"><button class="btn btn-sm btn-success rounded-pill py-1">Online</button>
                                <button class="btn btn-sm btn-success rounded-pill py-1">Chamber</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Doctor Name">DR. Afaz Uddin</td>
                            <td data-label="Designation">Professor</td>
                            <td data-label="Specialty">Medicine</td>
                            <td data-label="Qualification">MBBS, FCPS</td>
                            <td data-label="Age">30</td>
                            <td data-label="P/Y of MBBS">2015</td>
                            <td data-label="Location">Dhaka</td>
                            <td data-label="Chamber">Popular Hospital
                            </td>
                            <td data-label="View Doctors Profile"><i class='bx bx-low-vision fs-5'></i></td>
                            <td data-label="Type of appointment"><button class="btn btn-sm btn-success rounded-pill py-1">Online</button>
                                <button class="btn btn-sm btn-success rounded-pill py-1">Chamber</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Doctor Name">DR. Sayem</td>
                            <td data-label="Designation">Professor</td>
                            <td data-label="Specialty">Neuro</td>
                            <td data-label="Qualification">MBBS, FCPS</td>
                            <td data-label="Age">30</td>
                            <td data-label="P/Y of MBBS">2015</td>
                            <td data-label="Location">Dhaka</td>
                            <td data-label="Chamber">Popular Hospital
                            </td>
                            <td data-label="View Doctors Profile"><i class='bx bx-low-vision fs-5'></i></td>
                            <td data-label="Type of appointment"><button class="btn btn-sm btn-success rounded-pill py-1">Online</button>
                                <button class="btn btn-sm btn-success rounded-pill py-1">Chamber</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Doctor Name">DR. Sayem</td>
                            <td data-label="Designation">Professor</td>
                            <td data-label="Specialty">Neuro</td>
                            <td data-label="Qualification">MBBS, FCPS</td>
                            <td data-label="Age">30</td>
                            <td data-label="P/Y of MBBS">2015</td>
                            <td data-label="Location">Dhaka</td>
                            <td data-label="Chamber">Popular Hospital
                            </td>
                            <td data-label="View Doctors Profile"><i class='bx bx-low-vision fs-5'></i></td>
                            <td data-label="Type of appointment"><button class="btn btn-sm btn-success rounded-pill py-1">Online</button>
                                <button class="btn btn-sm btn-success rounded-pill py-1">Chamber</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Doctor Name">DR. Sayem</td>
                            <td data-label="Designation">Professor</td>
                            <td data-label="Specialty">Neuro</td>
                            <td data-label="Qualification">MBBS, FCPS</td>
                            <td data-label="Age">30</td>
                            <td data-label="P/Y of MBBS">2015</td>
                            <td data-label="Location">Dhaka</td>
                            <td data-label="Chamber">Popular Hospital
                            </td>
                            <td data-label="View Doctors Profile"><i class='bx bx-low-vision fs-5'></i></td>
                            <td data-label="Type of appointment"><button class="btn btn-sm btn-success rounded-pill py-1">Online</button>
                                <button class="btn btn-sm btn-success rounded-pill py-1">Chamber</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Doctor Name">DR. Sayem</td>
                            <td data-label="Designation">Professor</td>
                            <td data-label="Specialty">Neuro</td>
                            <td data-label="Qualification">MBBS, FCPS</td>
                            <td data-label="Age">30</td>
                            <td data-label="P/Y of MBBS">2015</td>
                            <td data-label="Location">Dhaka</td>
                            <td data-label="Chamber">Popular Hospital
                            </td>
                            <td data-label="View Doctors Profile"><i class='bx bx-low-vision fs-5'></i></td>
                            <td data-label="Type of appointment"><button class="btn btn-sm btn-success rounded-pill py-1 bt">Online</button>
                                <button class="btn btn-sm btn-success rounded-pill py-1 bt">Chamber</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- MAIN BODY CONTENT END -->

    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End  -->
    </div>

    <!-- JS SCRIPT START -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/boxicons.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // search doctor function
        // $(document).ready(function() {
        //     $("#searchDoctor").on("keyup", function() {
        //         var value = $(this).val().toLowerCase();
        //         $("#doctors #doctor").filter(function() {
        //             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //         });
        //     });
        // });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>