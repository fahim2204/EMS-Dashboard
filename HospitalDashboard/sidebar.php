<div class="side-navbar active-nav d-flex flex-column shadow-sm" id="sidebar">
      <div class="d-flex justify-content-center py-2">
        <a href="index.php"><img src="img/EMS-logo.svg" alt="LOGO" height="60" /></a>
      </div>
      <ul class="nav flex-column text-white w-100 cursor-pointer mt-2">
         <a href="index.php" class="nav-link <?php if($page=='home'){echo 'active';}?>">
            <i class="bx bxs-dashboard"></i>
            <span class="mx-2">Home</span>
        </a>
        <a href="update-details.php" class="nav-link <?php if($page=='detail'){echo 'active';}?>">
          <i class="bx bxs-edit-alt"></i>
          <span class="mx-2">Update Your Details</span>
        </a>
        <a href="search-doctor.php" class="nav-link <?php if($page=='doctor'){echo 'active';}?>">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Search Doctor</span>
        </a>
        <a href="search-diagnostic.php" class="nav-link <?php if($page=='diagonstic'){echo 'active';}?>">
          <i class="bx bxs-flask"></i>
          <span class="mx-2">Search Diagnostic</span>
        </a>
        <a href="search-hospital.php" class="nav-link <?php if($page=='hospital'){echo 'active';}?>">
          <i class="bx bxs-clinic"></i>
          <span class="mx-2">Search Hospital</span>
        </a>
        <a href="search-medicine.php" class="nav-link <?php if($page=='medicine'){echo 'active';}?>">
          <i class="bx bxs-capsule"></i>
          <span class="mx-2">Search Medicine</span>
        </a>
        <a href="reward-point.php" class="nav-link <?php if($page=='reward'){echo 'active';}?>">
          <i class="bx bx-wallet"></i>
          <span class="mx-2">Reward Point</span>
        </a>
        <a href="#" class="nav-link <?php if($page=='logout'){echo 'active';}?>">
          <i class="bx bxs-log-out"></i>
          <span class="mx-2">logout</span>
        </a>
      </ul>
    </div>