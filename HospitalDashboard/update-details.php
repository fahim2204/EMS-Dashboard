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
    <?php $page='detail'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php'; ?>
        <!--End Top Nav -->
        <!-- MAIN BODY CONTENT START -->
        <div class="container">
            <!-- <div class="text-end">
          <div class="alert alert-warning d-inline-block py-2 mt-2 text-start" role="alert">
            Please Update all information to access the full feature.
          </div>
        </div> -->
            <div class="text-center h3 pt-2">
                Welcome
                <strong>Jhon Doe</strong>
            </div>
            <div class="text-center h6 text-decoration-underline">Update your profile</div>
            <form action="#" method="post">
                <div class="row p-3 bg-light rounded-2 m-2 mt-4 shadow-sm">
                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="regNumber" class="form-label">Registration Number[DG Health]</label>
                            <input type="text" disabled class="form-control" id="regNumber" value="REG.No-2022123"
                                placeholder="E.g. REG-No:XXXXX" />
                        </div>
                        <div class="mb-3">
                            <label for="EnvironmentClearance" class="form-label">Has Environment Clearance?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasEnvironmentClearance"
                                        id="inlineRadio1" value="option1"/>
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasEnvironmentClearance"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pharmacyFacility" class="form-label">Has Pharmacy Facilities?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasPharmacyFacilities"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasPharmacyFacilities"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ncuBed" class="form-label">Has NCU Bed Available?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasNCUBedAvailable" id="yesCheck"
                                        onclick="yesnoCheck();" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasNCUBedAvailable" id="noCheck"
                                        onclick="yesnoCheck();" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="mb-3 mt-2" id="ifYes" style="display: none;">
                                    <input type='text' id='yes' name='yes' class="form-control"
                                        placeholder="There is 20 room Available">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="hduBed" class="form-label">Has HDU Bed Available?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasHDUBedAvailable"
                                        id="hduBedYesCheck" onclick="yesnoCheck();" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasHDUBedAvailable"
                                        id="hduBedNoCheck" onclick="yesnoCheck();" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="mb-3 mt-2" id="ifHduAvail" style="display: none;">
                                    <input type='text' id='yes' name='yes' class="form-control"
                                        placeholder="There is 20 room Available">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="medicalOfficer" class="form-label">Number of Medical Officer</label>
                            <input type="tel" class="form-control" id="Bed" value="" placeholder="Num.of.Med.officer- 150" />
                        </div>
                        <div class="mb-3">
                            <label for="narcoticsApproval" class="form-label">Has Narcotics Approval?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasNarcoticsApproval" id="inlineRadio1"
                                        value="option1"/>
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasNarcoticsApproval" id="inlineRadio2"
                                        value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Would you like to be a blood donor?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isDonateBlood" id="inlineRadio1"
                                        value="option1"/>
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isDonateBlood" id="inlineRadio2"
                                        value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="tradeLicence" class="form-label">Trade Licence</label>
                            <input class="form-control" type="file" id="tradeLicence">
                        </div>
                        <div class="mb-3">
                            <label for="fireLicence" class="form-label">Fire Licence</label>
                            <input class="form-control" type="file" id="fireLicence">
                        </div>
                        <div class="mb-3">
                            <label for="DiagnosticFacility" class="form-label">Has Diagnostic Facilities?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasDiagnosticFacilities"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasDiagnosticFacilities"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="oxyzenFacilities" class="form-label">Has Oxyzen Facilities?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasOxyzenFacilities"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasOxyzenFacilities"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="picuBed" class="form-label">Has PICU Bed Available?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasPICUBedAvailable"
                                        id="picuBedYesCheck" onclick="yesnoCheck();" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasPICUBedAvailable"
                                        id="picuNoCheck" onclick="yesnoCheck();" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="mb-3 mt-2" id="ifpicuAvail" style="display: none;">
                                    <input type='text' id='yes' name='yes' class="form-control"
                                        placeholder="There is 20 room Available">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="OtFacilities" class="form-label">Has Operation Theater Facilities?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasOperationTheaterFacilities"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasOperationTheaterFacilities"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="medicalOfficer" class="form-label">Number of Medical Officer(Outdoor)</label>
                            <input type="tel" class="form-control" id="medicalOfficer" value="" placeholder="Num.of.Med.officer- 150" />
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Wants to be a donor?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isSupportedPeople" id="inlineRadio1"
                                        value="option1"/>
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isSupportedPeople" id="inlineRadio2"
                                        value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <div class="mb-3">
                            <label for="atomicEnergy" class="form-label">Has Atomic Energy Facilities?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isDonateBlood" id="inlineRadio1"
                                        value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isDonateBlood" id="inlineRadio2"
                                        value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Bed" class="form-label">Number of Bed</label>
                            <input type="tel" class="form-control" id="Bed" value="" placeholder="Num.of.bed- 150" />
                        </div>
                        <div class="mb-3">
                            <label for="emergencyService" class="form-label">Has Emergency Service?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasEmergencyService"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasEmergencyService"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ambulanceService" class="form-label">Has Ambulance Service?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasAmbulanceService"
                                        id="inlineRadio1" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasAmbulanceService"
                                        id="inlineRadio2" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="iCUBedFacility" class="form-label">Has ICU Bed Available?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasICUBedAvailable"
                                        id="icuBedYesCheck" onclick="yesnoCheck();" value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hasICUBedAvailable"
                                        id="icuBedNoCheck" onclick="yesnoCheck();" value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="mb-3 mt-2" id="ifIcuavail" style="display: none;">
                                    <input type='text' id='yes' name='yes' class="form-control"
                                        placeholder="There is 20 room Available">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="bloodBank" class="form-label">Do you have Blood Bank?</label>
                            <div class="mt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bloodBank" id="inlineRadio1"
                                        value="option1" />
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bloodBank" id="inlineRadio2"
                                        value="option2" />
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="referrer" class="form-label">Refered By</label>
                            <input type="text" class="form-control" id="referrer" value="EMS-2022120"
                                placeholder="E.g. EMS-2022121" />
                        </div>

                    </div>
                    <div class="col-12 text-center my-3">
                        <a href=""><button type="submit" class="btn btn-success bg-ems-green">Update</button></a>
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
    <!-- initial js -->
    <script>
        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.display = 'block';
            }
            else document.getElementById('ifYes').style.display = 'none';
            if (document.getElementById('icuBedYesCheck').checked) {
                document.getElementById('ifIcuavail').style.display = 'block';
            }
            else document.getElementById('ifIcuavail').style.display = 'none';
            if (document.getElementById('hduBedYesCheck').checked) {
                document.getElementById('ifHduAvail').style.display = 'block';
            }
            else document.getElementById('ifHduAvail').style.display = 'none';
            if (document.getElementById('picuBedYesCheck').checked) {
                document.getElementById('ifpicuAvail').style.display = 'block';
            }
            else document.getElementById('ifpicuAvail').style.display = 'none';
        }
    </script>
</body>

</html>