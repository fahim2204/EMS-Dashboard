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
  <?php $page='medicalhistory'; include 'sidebar.php'; ?>
  <!-- SIDE-NAV END -->

  <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
    <!-- Top Nav -->
    <?php include 'header.php';?>
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
                <input class="form-check-input" type="radio" name="smokerCheck" id="smokeYesCheck" onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="smokerCheck" id="smokeNoCheck" onclick="yesnoCheck();" value="option2" checked />
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
                <input class="form-check-input" type="radio" name="AlcoholCheck" id="alcoholYesCheck" onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="AlcoholCheck" id="alcoholNoCheck" onclick="yesnoCheck();" value="option2" checked/>
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
                <input class="form-check-input" type="radio" name="hptCheck" id="hptYesCheck" onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="hptCheck" id="hptNoCheck" onclick="yesnoCheck();" value="option2" checked/>
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
                <input class="form-check-input" type="radio" name="DiabetesCheck" id="diabetesYesCheck" onclick="yesnoCheck();" value="option1" />
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="DiabetesCheck" id="diabetesNoCheck" onclick="yesnoCheck();" value="option2" checked/>
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
      } else document.getElementById('ifSmokeYes').style.display = 'none';

      if (document.getElementById('alcoholYesCheck').checked) {
        document.getElementById('ifAlcoholYes').style.display = 'block';
      } else document.getElementById('ifAlcoholYes').style.display = 'none';

      if (document.getElementById('diabetesYesCheck').checked) {
        document.getElementById('ifdiabetesYes').style.display = 'block';
      } else document.getElementById('ifdiabetesYes').style.display = 'none';

      if (document.getElementById('hptYesCheck').checked) {
        document.getElementById('ifhptYes').style.display = 'block';
      } else document.getElementById('ifhptYes').style.display = 'none';
    }
  </script>
</body>

</html>