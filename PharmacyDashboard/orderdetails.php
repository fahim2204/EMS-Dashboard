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
    <!-- <div class="side-navbar active-nav d-flex flex-column shadow-sm" id="sidebar">
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
        <a href="update-details.php" class="nav-link">
          <i class="bx bxs-edit-alt"></i>
          <span class="mx-2">Search Your Needs</span>
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
        <a href="add-medicine.php" class="nav-link">
          <i class="bx bxs-clinic"></i>
          <span class="mx-2">Add Medicine</span>
      </a>
        <a href="viewtable.php" class="nav-link active">
          <i class="bx bxs-capsule"></i>
          <span class="mx-2">Stock</span>
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
    </div> -->
    <?php $page='home'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <h4 class="text-ems-green text-center mt-3">View Medicine</h4>
            <div class="row p-1 p-md-3">

                <!-- Static Table Start -->
                <table id="orderDetails" class="table  table-hover align-middle  w-100 bg-light rounded shadow">
                    <thead>
                        <tr>
                            <th class="text-center">SL-No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Medicine</th>
                            <th class="text-center">Piece</th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Lionel Messi</td>
                            <td>20.12.2022</td>
                            <td>Napa</td>
                            <td>22</td>
                            <td>2200</td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Lionel Messi</td>
                            <td>20.12.2022</td>
                            <td>Napa</td>
                            <td>22</td>
                            <td>2200</td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td>Lionel Messi</td>
                            <td>20.12.2022</td>
                            <td>Napa</td>
                            <td>22</td>
                            <td>2200</td>
                        </tr>
                        <tr class="text-center">
                            <td>4</td>
                            <td>Lionel Messi</td>
                            <td>20.12.2022</td>
                            <td>Napa</td>
                            <td>22</td>
                            <td>2200</td>
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
        $(document).ready(function () {
            $('#orderDetails').DataTable({
                scrollX: true,
            });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>