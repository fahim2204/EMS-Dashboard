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
   
    <?php $page='stockdetails'; include 'sidebar.php'; ?>
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
                <table id="familyMembers" class="table  table-hover align-middle  w-100 bg-light rounded shadow text-black">
                    <thead>
                        <tr>
                            <th class="text-center">SL-No</th>
                            <th class="text-center">Brand Name</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">Strength</th>
                            <th class="text-center">MRP</th>
                            <th class="text-center">View</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Hospital</td>
                            <td>56</td>
                            <td>21</td>
                            <td>22</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                            <td>
                                <i class='bx bx-edit fs-5'></i>
                            </td>
                            <td>
                                <i class='bx bxs-trash fs-5'></i>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Hospital</td>
                            <td>56</td>
                            <td>21</td>
                            <td>22</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                            <td>
                                <i class='bx bx-edit fs-5'></i>
                            </td>
                            <td>
                                <i class='bx bxs-trash fs-5'></i>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td>Hospital</td>
                            <td>56</td>
                            <td>21</td>
                            <td>22</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                            <td>
                                <i class='bx bx-edit fs-5'></i>
                            </td>
                            <td>
                                <i class='bx bxs-trash fs-5'></i>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>4</td>
                            <td>Hospital</td>
                            <td>56</td>
                            <td>21</td>
                            <td>22</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                            <td>
                                <i class='bx bx-edit fs-5'></i>
                            </td>
                            <td>
                                <i class='bx bxs-trash fs-5'></i>
                            </td>
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
            $('#familyMembers').DataTable({
                scrollX: true,
            });
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>