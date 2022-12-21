<nav class="navbar top-navbar navbar-light sticky-top top-0 bg-ems-green px-5 d-flex">
    <div class="left">
        <a class="btn border-0" id="menu-btn"><i id="menu-icon" class="fas fa-arrow-left"></i></a>
        <a href="medical-history.php"><button type="submit" class="btn btn-success bg-ems-white text-ems-green fs-7">Are you in a Medication?</button></a>
        <a href="medicaldetails.php"><button type="submit" class="btn btn-success bg-ems-white text-ems-green fs-7">Medical Details</button></a>
    </div>
    <div class="d-flex align-items-center">
        <div class="d-flex me-2 text-light">
            <div class="dropdown">
                <div class="d-flex justify-content-between align-items-center cursor-pointer" id="dropdownnotif" data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="d-flex justify-content-between align-items-center dropdown-toggle cursor-pointer" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
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