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
            <a href="update-details.php" class="nav-link active">
                <i class="bx bxs-edit-alt"></i>
                <span class="mx-2">Update Your Details</span>
            </a>
            <a href="update-details.php" class="nav-link">
                <i class="bx bxs-edit-alt"></i>
                <span class="mx-2">Search Your Needs</span>
            </a>
            <a href="search-doctor.php" class="nav-link">
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

    <div class="my-container active-cont d-flex flex-column vh-100">
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
            <div class="text-center h3 pt-2">
                Welcome
                <strong>Jhon Doe</strong>
            </div>
            <div class="text-center h6 text-decoration-underline">Update your profile</div>
            <form action="#" method="post">
                <div class="row p-3 bg-light rounded-2 m-2 mt-4 shadow-sm">
                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="emsId" class="form-label">EMS ID</label>
                            <input type="text" disabled class="form-control" id="emsId" value="PT-2022123"
                                placeholder="E.g. PT-XXXXX" />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" value="Albert Einstein"
                                placeholder="E.g. Jhon Doe" />
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Your Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" value="01713456789"
                                placeholder="E.g. 0134567xxxx" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email Address</label>
                            <input type="email" class="form-control" id="email" value=""
                                placeholder="E.g. name@example.com" />
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Your Age</label>
                            <input type="text" class="form-control" id="age" value="" placeholder="E.g. 25" />
                        </div>
                        <div class="mb-3">
                            <label for="bloodgroup" class="form-label">Your Blood group</label>
                            <select id="bloodgroup" class="form-select" aria-label="Blood Group">
                                <option value="" selected>Select Your Blood Group</option>
                                <option value="1">A (+ve)</option>
                                <option value="2">B (+ve)</option>
                                <option value="1">O (+ve)</option>
                                <option value="3">AB (+ve)</option>
                                <option value="5">A (-ve)</option>
                                <option value="5">B (-ve)</option>
                                <option value="6">O (-ve)</option>
                                <option value="7">AB (-ve)</option>
                            </select>
                        </div>
                        <div class="mb-3 fs-7">
                            <label for="identity" class="form-label fs-6">Your Identity</label>
                            <div class="mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="identityType" id="inlineRadio1"
                                        value="option1" checked />
                                    <label class="form-check-label" for="inlineRadio1">NID</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="identityType" id="inlineRadio2"
                                        value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">Birth Reg No.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="identityType" id="inlineRadio3"
                                        value="option3" />
                                    <label class="form-check-label" for="inlineRadio3">Passport No.</label>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="identityNumber" value="19433535343434"
                                placeholder="E.g. 2001XXXXXXXX" />
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="fathername" class="form-label">Your Father's Name</label>
                            <input type="text" class="form-control" id="fathername" value="Newton Doe"
                                placeholder="E.g. Jhon Doe" />
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Your Profession</label>
                            <select id="profession" class="form-select" aria-label="profession">
                                <option value="" selected>Select Your Profession</option>
                                <option value="1">Business</option>
                                <option value="2">Govt. Service</option>
                                <option value="3">Housewife</option>
                                <option value="4">Private Service</option>
                                <option value="5">Retired</option>
                                <option value="6">Self Employed</option>
                                <option value="7">Student</option>
                                <option value="8">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Your Date of Birth</label>
                            <input type="date" class="form-control" id="dob" value="2022-04-22"
                                placeholder="E.g. Jhon Doe" />
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Your Address-1</label>
                            <input type="text" class="form-control" id="Address"
                                value="H-30, B-12, South Banasree, Dhaka"
                                placeholder="E.g. H-30, B-12, South Banasree, Dhaka" />
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Your Address-2</label>
                            <input type="text" class="form-control" id="Address"
                                value="H-30, B-12, South Banasree, Dhaka"
                                placeholder="E.g. H-30, B-12, South Banasree, Dhaka" />
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Select Gender</label>
                            <select id="gender" class="form-select" aria-label="Gender Select">
                                <option value="" selected>Select Your Gender</option>
                                <option value="2">Male</option>
                                <option value="3">Female</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Do you want to support helpless People?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isSupportPeople"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isSupportPeople"
                                        id="inlineRadio2" value="option2" checked />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Emergency Contact Name</label>
                            <input type="text" class="form-control" id="name" value="Albert Einstein"
                                placeholder="E.g. Jhon Doe" />
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Emergency Contact Number</label>
                            <input type="tel" class="form-control" id="mobile" value="01713456789"
                                placeholder="E.g. 0134567xxxx" />
                        </div>
                        <div class="mb-3">
                            <label for="referrer" class="form-label">Realation With Emergency Contact</label>
                            <input type="text" class="form-control" id="referrer" value=""
                                placeholder="E.g. Relationship" />
                        </div>
                        <div class="mb-3">
                            <label for="userImg" class="form-label">Upload Your Photo</label>
                            <input class="form-control" type="file" id="userImg">
                        </div>
                        <div class="mb-3">
                            <label for="userImg" class="form-label">Upload Your NID Card</label>
                            <input class="form-control" type="file" id="userImg">
                        </div>
                        <div class="mb-3">
                            <label for="userImg" class="form-label">Upload Your Passport</label>
                            <input class="form-control" type="file" id="userImg">
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Do you want to be a blood donor?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isDonateBlood" id="inlineRadio1"
                                        value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isDonateBlood" id="inlineRadio2"
                                        value="option2" checked />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
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