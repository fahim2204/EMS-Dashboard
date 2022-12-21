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
    <?php include 'sidebar.php';?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php';?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container mt-5 mb-5">
            <div class="text-center text-secondary  fw-bold fs-4 mb-4">Make an Appointment</div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center offset-md-3 border p-4 shadow bg-light">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fs-5 text-secondary fw-bold">Appointment Date</label>
                                <input type="date" class="form-control" placeholder="Enter Appointment Date">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="email" class="form-label fs-5 text-secondary fw-bold">Appointment for</label>
                                <select class="form-select">
                                    <option selected>Select</option>
                                    <option value="1">Online Consulting</option>
                                    <option value="2">Chamber Consulting</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p class="form-label fs-5 text-secondary fw-bold ">Available Hours</p>
                                <input type="radio" name="medi" id="feed-cat-1" class="cat-radio" />
                                <label for="feed-cat-1" class="feed-emo feed-emo-1">4.00 PM</label>
                                <input type="radio" name="medi" id="feed-cat-2" class="cat-radio" />
                                <label for="feed-cat-2" class="feed-emo feed-emo-2">4.15 PM</label>
                                <input type="radio" name="medi" id="feed-cat-3" class="cat-radio" />
                                <label for="feed-cat-3" class="feed-emo feed-emo-3">4.30 PM</label>
                                <input type="radio" name="medi" id="feed-cat-4" class="cat-radio" />
                                <label for="feed-cat-4" class="feed-emo feed-emo-4">4.45 PM</label>
                                <input type="radio" name="medi" id="feed-cat-5" class="cat-radio" />
                                <label for="feed-cat-5" class="feed-emo feed-emo-5">5.00 PM</label>
                                <input type="radio" name="medi" id="feed-cat-6" class="cat-radio" />
                                <label for="feed-cat-6" class="feed-emo feed-emo-6">5.15 PM</label>
                                <input type="radio" name="medi" id="feed-cat-7" class="cat-radio" />
                                <label for="feed-cat-7" class="feed-emo feed-emo-7">5.30 PM</label>
                                <input type="radio" name="medi" id="feed-cat-8" class="cat-radio" />
                                <label for="feed-cat-8" class="feed-emo feed-emo-8">5.45 PM</label>
                                <input type="radio" name="medi" id="feed-cat-9" class="cat-radio" />
                                <label for="feed-cat-9" class="feed-emo feed-emo-9">6.00 PM</label>
                                <input type="radio" name="medi" id="feed-cat-10" class="cat-radio" />
                                <label for="feed-cat-10" class="feed-emo feed-emo-10">6.15 PM</label>
                                <input type="radio" name="medi" id="feed-cat-11" class="cat-radio" />
                                <label for="feed-cat-11" class="feed-emo feed-emo-11">6.30 PM</label>
                                <input type="radio" name="medi" id="feed-cat-12" class="cat-radio" />
                                <label for="feed-cat-12" class="feed-emo feed-emo-12">6.45 PM</label>
                                <input type="radio" name="medi" id="feed-cat-13" class="cat-radio" />
                                <label for="feed-cat-13" class="feed-emo feed-emo-13">7.00 PM</label>
                                <input type="radio" name="medi" id="feed-cat-14" class="cat-radio" />
                                <label for="feed-cat-14" class="feed-emo feed-emo-14">7.15 PM</label>
                                <input type="radio" name="medi" id="feed-cat-15" class="cat-radio" />
                                <label for="feed-cat-15" class="feed-emo feed-emo-15">7.30 PM</label>
                                <input type="radio" name="medi" id="feed-cat-16" class="cat-radio" />
                                <label for="feed-cat-16" class="feed-emo feed-emo-16">7.45 PM</label>
                                <input type="radio" name="medi" id="feed-cat-17" class="cat-radio" />
                                <label for="feed-cat-17" class="feed-emo feed-emo-17" >8.00 PM</label>
                                <!-- <input type="radio" name="medi" id="feed-cat-18" class="cat-radio" />
                                <label for="feed-cat-18" class="feed-emo feed-emo-18">6.40 PM</label>
                                <input type="radio" name="medi" id="feed-cat-19" class="cat-radio" />
                                <label for="feed-cat-19" class="feed-emo feed-emo-19">6.50 PM</label>
                                <input type="radio" name="medi" id="feed-cat-20" class="cat-radio" />
                                <label for="feed-cat-20" class="feed-emo feed-emo-20">7.00 PM</label>
                                <input type="radio" name="medi" id="feed-cat-21" class="cat-radio" />
                                <label for="feed-cat-21" class="feed-emo feed-emo-21">7.10 PM</label>
                                <input type="radio" name="medi" id="feed-cat-22" class="cat-radio" />
                                <label for="feed-cat-22" class="feed-emo feed-emo-22">7.20 PM</label>
                                <input type="radio" name="medi" id="feed-cat-23" class="cat-radio" />
                                <label for="feed-cat-23" class="feed-emo feed-emo-23">7.30 PM</label>
                                <input type="radio" name="medi" id="feed-cat-24" class="cat-radio" />
                                <label for="feed-cat-24" class="feed-emo feed-emo-24">7.40 PM</label>
                                <input type="radio" name="medi" id="feed-cat-25" class="cat-radio" />
                                <label for="feed-cat-25" class="feed-emo feed-emo-25">7.50 PM</label>
                                <input type="radio" name="medi" id="feed-cat-26" class="cat-radio" />
                                <label for="feed-cat-26" class="feed-emo feed-emo-26">8.00 PM</label> -->
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit"
                                    class="btn btn-outline-success bg-ems-green float-end text-white fw-normal ">Book
                                    Appointment</button>
                                <button type="button"
                                    class="btn btn-outline-success float-end me-2 text-ems-green">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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