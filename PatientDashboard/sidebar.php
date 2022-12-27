<div class="side-navbar active-nav d-flex flex-column shadow-sm" id="sidebar">
    <div class="side-header d-flex justify-content-center py-2">
        <a href="index.php"><img src="img/EMS-logo.svg" alt="LOGO" height="60" /></a>
    </div>
    <ul class="side-menus nav flex-column flex-nowrap text-white w-100 cursor-pointer mt-2">
        <a href="index.php" class="nav-link <?php echo $page == 'home' ? 'active' : '' ?>">
            <i class="bx bxs-dashboard"></i>
            <span class="mx-2">Your Dashboard</span>
        </a>
        <a href="update-details.php" class="nav-link <?php if ($page == 'updetails') {
            echo 'active';
        } ?>">
            <i class="bx bxs-edit-alt"></i>
            <span class="mx-2">Update Your Details</span>
        </a>
        <li>
            <a class="nav-link list-unstyled px-3" data-bs-toggle="collapse" href="#needs">
                <span class="me-2"><i class='bx bx-search-alt-2'></i></span>
                <span>Search Your Need</span>
                <span class="ms-auto ">
                    <span class="right-icon">
                        <i class='bx bx-chevron-down mx-2'></i>
                    </span>
                </span>
            </a>
            <div class="collapse" id="needs">
                <ul class="navbar-nav ps-3">
                    <li>
                        <a href="search-doctor.php" class="nav-link p-2 <?php if ($page == 'doctor') {
                            echo 'active';
                        } ?>">
                            <i class="bx bx-user-check"></i>
                            <span class="mx-2">Doctor</span>
                        </a>
                    </li>
                    <li>
                        <a href="search-diagnostic.php" class="nav-link p-2 <?php if ($page == 'diagonstic') {
                            echo 'active';
                        } ?>">
                            <i class="bx bxs-flask"></i>
                            <span class="mx-2">Diagnostic</span>
                        </a>
                    </li>
                    <li>
                        <a href="search-hospital.php" class="nav-link p-2 <?php if ($page == 'hospital') {
                            echo 'active';
                        } ?>">
                            <i class="bx bxs-clinic"></i>
                            <span class="mx-2">Hospital</span>
                        </a>
                    </li>
                    <li>
                        <a href="search-medicine.php" class="nav-link p-2 <?php if ($page == 'medicine') {
                            echo 'active';
                        } ?>">
                            <i class="bx bxs-capsule"></i>
                            <span class="mx-2">Medicine</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <a href="add-family-member.php" class="nav-link <?php if ($page == 'addmember') {
            echo 'active';
        } ?>">
            <i class="bx bx-user-plus"></i>
            <span class="mx-2">Add Members</span>
        </a>
        <a href="family-members-list.php" class="nav-link <?php if ($page == 'memberdetails') {
            echo 'active';
        } ?>">
            <i class="bx bxs-user-account"></i>
            <span class="mx-2">Member Details</span>
        </a>
        <a href="reward-point.php" class="nav-link <?php if ($page == 'rewardpoint') {
            echo 'active';
        } ?>">
            <i class="bx bx-wallet"></i>
            <span class="mx-2">Reward Points</span>
        </a>
        <a href="prescription.php" class="nav-link <?php if ($page == 'prescription') {
            echo 'active';
        } ?>">
            <i class='bx bx-bookmark-alt-plus'></i>
            <span class="mx-2">Your Prescription</span>
        </a>
        <!-- <a href="#" class="nav-link">
            <i class='bx bxs-capsule'></i>
            <span class="mx-2">Your Current Medication</span>
        </a> -->
        <a href="medical-report.php" class="nav-link <?php if ($page == 'medicalreport') {
            echo 'active';
        } ?>">
            <i class='bx bxs-report'></i>
            <span class="mx-2">Your Medical Reports</span>
        </a>
        <a href="medical-history.php" class="nav-link <?php if ($page == 'medicalhistory') {
            echo 'active';
        } ?> ">
            <i class='bx bx-history'></i>
            <span class="mx-2">Your Medical History</span>
        </a>
        <a href="medicaldetails.php" class="nav-link <?php if ($page == 'medicaldetails') {
            echo 'active';
        } ?>">
            <i class='bx bx-history'></i>
            <span class="mx-2">Your Medical Details</span>
        </a>
        <a href="history.php" class="nav-link <?php if ($page == 'history') {
            echo 'active';
        } ?>">
            <i class='bx bx-history'></i>
            <span class="mx-2">History</span>
        </a>

        <!-- <a href="#" class="nav-link <?php if ($page == 'patientstories') {
            echo 'active';
        } ?>">
            <i class="bx bx-wallet"></i>
            <span class="mx-2">Patient Stories</span>
        </a> -->
        <a href="#" class="nav-link <?php if ($page == 'logout') {
            echo 'active';
        } ?>">
            <i class="bx bxs-log-out"></i>
            <span class="mx-2">logout</span>
        </a>
    </ul>
</div>