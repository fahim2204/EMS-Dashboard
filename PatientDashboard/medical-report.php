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
    <?php $page='medicalreport'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php';?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <h4 class="text-ems-green text-center mt-3">Medical Reports</h4>
            <div class="row p-1 p-md-3">

                <!-- Static Table Start -->
                <table id="familyMembers"
                    class="table table-striped table-hover align-middle w-100 bg-light rounded shadow">
                    <thead>
                        <tr>
                            <th class="text-center">SL-No</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Diagonstics</th>
                            <th class="text-center">Pharmacy</th>
                            <th class="text-center">Total Payment</th>
                            <th class="text-center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>12/12/2022</td>
                            <td>AL-AQSA</td>
                            <td>AL-AQSA</td>
                            <td>2100</td>
                            <!-- <td><i class='bx bx-low-vision fs-5'></i></td> -->
                            <td><a href="#" data-toggle="popover" title="Report Details" data-content="Some content inside the popover"><i class='bx bx-low-vision fs-5'></i></a></td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>12/12/2022</td>
                            <td>AL-AQSA</td>
                            <td>AL-AQSA</td>
                            <td>2100</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td>12/12/2022</td>
                            <td>AL-AQSA</td>
                            <td>AL-AQSA</td>
                            <td>2100</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                        </tr>
                        <tr class="text-center">
                            <td>4</td>
                            <td>12/12/2022</td>
                            <td>AL-AQSA</td>
                            <td>AL-AQSA</td>
                            <td>2100</td>
                            <td><i class='bx bx-low-vision fs-5'></i></td>
                        </tr>

                    </tbody>
                </table>
                <!-- Static Table End -->


            </div>
        </div>
        <!-- MAIN BODY CONTENT END -->

        <!-- Footer Start -->

        <?php include 'footer.php';?>

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
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
        });
    </script>
    <!-- JS SCRIPT END -->
</body>

</html>