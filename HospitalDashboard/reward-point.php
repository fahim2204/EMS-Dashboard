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
    <link rel="stylesheet" href="css/datatables.min.css">
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
    <?php $page='reward'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <h4 class="text-ems-green text-center mt-3">Reward Points</h4>
            <div class="row p-1 p-md-3">

                <!-- Static Table Start -->
                <table id="familyMembers" class="table table-striped table-hover align-middle w-100 bg-light rounded shadow">
                    <thead>
                        <tr>
                            <th class="text-center">Bill No.</th>
                            <th class="text-center">Bill Type</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Discount</th>
                            <th class="text-center">Customer Point</th>
                            <th class="text-center">VIP Point</th>
                            <th class="text-center">Welfare Point</th>
                            <th class="text-center">Everspecial Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>H-15052</td>
                            <td>Hospital</td>
                            <td>10-08-2022</td>
                            <td>5000</td>
                            <td>500</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                        <tr class="text-center">
                            <td>D-18081</td>
                            <td>Diagnostic</td>
                            <td>10-08-2022</td>
                            <td>5000</td>
                            <td>500</td>
                            <td>20</td>
                            <td>10</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                        <tr class="text-center">
                            <td>M-15052</td>
                            <td>Medicine</td>
                            <td>10-08-2022</td>
                            <td>5000</td>
                            <td>500</td>
                            <td>20</td>
                            <td>10</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                        <tr class="text-center">
                            <td>H-15052</td>
                            <td>Hospital</td>
                            <td>10-08-2022</td>
                            <td>5000</td>
                            <td>500</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                            <td>30</td>
                        </tr>
                        <tr class="text-center">
                            <td>H-15052</td>
                            <td>Hospital</td>
                            <td>10-08-2022</td>
                            <td>5000</td>
                            <td>500</td>
                            <td>40</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Static Table End -->


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
    <script src="js/datatables.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#familyMembers').DataTable({
                scrollX: true,
            });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>