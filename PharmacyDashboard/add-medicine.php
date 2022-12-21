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

    <?php $page = 'addmedicine';
    include 'sidebar.php'; ?>

    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <div class="text-center h3 pt-2">
                Welcome
                <strong>Jhon Doe</strong>
            </div>
            <div class="text-center h6 text-decoration-underline">Update your profile</div>
            <form action="#" method="post">
                <div class="row p-3 bg-light rounded-2 m-2 mt-4 shadow-sm">
                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="brandname" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" id="brandname" required placeholder="E.g. XRay" />
                        </div>

                        <div class="mb-3">
                            <label for="dosage" class="form-label">Forms/Dosage</label>
                            <input class="form-control" type="text" id="dosage">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="genericname" class="form-label">Generic Name</label>
                            <input type="text" class="form-control" id="genericname" placeholder="E.g. XRay" />
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input class="form-control" type="text" id="stock" placeholder="E.g. .." />
                        </div>

                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="strength" class="form-label">Strength</label>
                            <input type="text" class="form-control" id="strength" placeholder="E.g. Mg" />
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">MRP(per pack)</label>
                            <input type="Number" class="form-control" id="price" placeholder="E.g.1000" />
                        </div>

                    </div>
                    <div class="col-12 text-center my-3">
                        <button type="submit" class="btn btn-success bg-ems-green">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- MAIN BODY CONTENT END -->

        <!-- Footer Start -->

        <footer class="container-fluid bg-ems-green mt-auto">
            <p class="text-light text-center py-3 mb-0">
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
    <!-- JS SCRIPT END -->
</body>

</html>