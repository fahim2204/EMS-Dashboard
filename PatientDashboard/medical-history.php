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
            <a href="medical-history.php" class="nav-link active">
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

  <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
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
      <div class="text-center fs-6 mt-2 lsp-1">Jhon Doe's</div>
      <div class="text-center fs-4 fw-bold pb-2 mb-3 border-bottom">Medical History</div>
      <form action="">
        <div class="mb-3">
          <ul>
            <li>
              <label for="ncuBed" class="form-label fw-bold">Are you a Smoker?</label>
            </li>
            <div class="mt-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="smokerCheck" id="smokeYesCheck"
                  onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="smokerCheck" id="smokeNoCheck"
                  onclick="yesnoCheck();" value="option2" />
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="mb-3 mt-2" id="ifSmokeYes" style="display: none;">
                <div class="row">
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Year</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="2 year">
                  </div>
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Month</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="6 month">
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="mb-3">
          <ul>
            <li>
              <label for="ncuBed" class="form-label fw-bold">Are you an Alcholic?</label>
            </li>
            <div class="mt-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="AlcoholCheck" id="alcoholYesCheck"
                  onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="AlcoholCheck" id="alcoholNoCheck"
                  onclick="yesnoCheck();" value="option2" />
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="mb-3 mt-2" id="ifAlcoholYes" style="display: none;">
                <div class="row">
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Year</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="2 year">
                  </div>
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Month</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="6 month">
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="mb-3">
          <ul>
            <li>
              <label for="ncuBed" class="form-label fw-bold">Your Height</label>
            </li>
            <div class="mt-1">
              <div class="mb-3 mt-2" id="ifAlcoholYes">
                <div class="row">
                  <div class="col-3">
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="INCH">
                  </div>
                  <div class="col-3">
                    <!-- <label for="" class="text-center mb-1">CM</label> -->
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="CM">
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="mb-3">
          <ul>
            <li>
              <label for="ncuBed" class="form-label fw-bold">Your Weight</label>
            </li>
            <div class="mt-1">
              <div class="mb-3 mt-2" id="ifAlcoholYes">
                <div class="row">
                  <div class="col-3">
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="KGS">
                  </div>
                  <div class="col-3">
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="LBS">
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="mb-3">
          <ul>
            <li>
              <label for="ncuBed" class="form-label fw-bold">Do you have Hyperparathyroidism?</label>
            </li>
            <div class="mt-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hptCheck" id="hptYesCheck" onclick="yesnoCheck();"
                  value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hptCheck" id="hptNoCheck" onclick="yesnoCheck();"
                  value="option2" />
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="mb-3 mt-2" id="ifhptYes" style="display: none;">
                <div class="row">
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Year</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="2 year">
                  </div>
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Month</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="6 month">
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="mb-3">
          <ul>
            <li>
              <label for="ncuBed" class="form-label fw-bold">Do you have Diabetes?</label>
            </li>
            <div class="mt-1">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="DiabetesCheck" id="diabetesYesCheck"
                  onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="DiabetesCheck" id="diabetesNoCheck"
                  onclick="yesnoCheck();" value="option2" />
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
              <div class="mb-3 mt-2" id="ifdiabetesYes" style="display: none;">
                <div class="row">
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Year</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="2 year">
                  </div>
                  <div class="col-3">
                    <label for="" class="text-center mb-1">Month</label>
                    <input type='text' id='yes' name='yes' class="form-control" placeholder="6 month">
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="text-center my-4 mb-3">
          <button class="btn btn-success bg-ems-green px-5">Submit</button>
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
  <!-- initial js -->
  <script>
    function yesnoCheck() {
      if (document.getElementById('smokeYesCheck').checked) {
        document.getElementById('ifSmokeYes').style.display = 'block';
      }
      else document.getElementById('ifSmokeYes').style.display = 'none';

      if (document.getElementById('alcoholYesCheck').checked) {
        document.getElementById('ifAlcoholYes').style.display = 'block';
      }
      else document.getElementById('ifAlcoholYes').style.display = 'none';

      if (document.getElementById('diabetesYesCheck').checked) {
        document.getElementById('ifdiabetesYes').style.display = 'block';
      }
      else document.getElementById('ifdiabetesYes').style.display = 'none';

      if (document.getElementById('hptYesCheck').checked) {
        document.getElementById('ifhptYes').style.display = 'block';
      }
      else document.getElementById('ifhptYes').style.display = 'none';
    }
  </script>
</body>

</html>