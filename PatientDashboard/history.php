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
    <?php $page = 'history';
    include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <h3 class="text-ems-green text-center fw-bold mt-3">History</h3>

            <!-- Nav tabs -->
            <ul class="nav nav-pills mt-3 mb-3 d-flex justify-content-center">

                <li class="nav-item p-3">
                    <a class="nav-link active" data-bs-toggle="pill" href="#doctor">Doctor</a>
                </li>


                <li class="nav-item p-3">
                    <a class="nav-link" data-bs-toggle="pill" href="#hospital">Hospital</a>
                </li>


                <li class="nav-item p-3">
                    <a class="nav-link" data-bs-toggle="pill" href="#medicine">Medicine</a>
                </li>


                <li class="nav-item p-3">
                    <a class="nav-link " data-bs-toggle="pill" href="#diagonstic">Diagonstic</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane container bg-light active" id="doctor">
                    <div class="row text-black">
                        <div class="col-md-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped data-table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL No.</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Doctor Name</th>
                                                    <th class="text-center">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>3</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>4</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>5</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>6</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>7</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>8</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>10</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container bg-light fade" id="hospital">
                    <div class="row text-black">
                        <div class="col-md-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped data-table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL No.</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Hospital Name</th>
                                                    <th class="text-center">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>3</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>4</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>5</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>6</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>7</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>8</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>10</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane container bg-light fade" id="medicine">
                    <div class="row text-black">
                        <div class="col-md-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped data-table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL No.</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Medicine Name</th>
                                                    <th class="text-center">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>3</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>4</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>5</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>6</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>7</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>8</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>10</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane container bg-light fade" id="diagonstic">
                    <div class="row text-black">
                        <div class="col-md-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped data-table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">SL No.</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Diagonstic Name</th>
                                                    <th class="text-center">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>3</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>4</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>5</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>6</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>7</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>8</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>10</td>
                                                    <td>12/12/2022</td>
                                                    <td>AL-AQSA</td>
                                                    <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
    <script src="js/datatables.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('#doctors').DataTable({
        //         scrollX: true,
        //     });
        //     $('#hospitals').DataTable();
        //     $('#medicines').DataTable();
        //     $('#diagonstics').DataTable();
        // });
        $(document).ready(function() {
            $(".data-table").each(function(_, table) {
                $(table).DataTable();
            });
        });
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>