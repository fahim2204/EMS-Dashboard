<!-- SIDE-NAV START -->
<div class="side-navbar active-nav d-flex flex-column shadow-sm" id="sidebar">
    <div class="d-flex justify-content-center py-2">
        <a href="index.php"><img src="img/EMS-logo.svg" alt="LOGO" height="60" /></a>
    </div>
    <ul class="nav flex-column text-white w-100 cursor-pointer mt-2">
        <a href="index.php" class="nav-link <?php if($page=='home'){echo 'active';}?>">
            <i class="bx bxs-dashboard"></i>
            <span class="mx-2">Home</span>
        </a>
        <a href="update-details.php" class="nav-link <?php if($page=='details'){echo 'active';}?>">
            <i class="bx bxs-edit-alt"></i>
            <span class="mx-2">Update Your Details</span>
        </a>
        <a href="update-details.php" class="nav-link">
            <i class="bx bxs-edit-alt"></i>
            <span class="mx-2">Search Your Needs</span>
        </a>
        <a href="search-medicine.php" class="nav-link <?php if($page=='Smedicine'){echo 'active';}?>">
            <i class="bx bxs-capsule"></i>
            <span class="mx-2">Search Medicine</span>
        </a>
        <a href="add-medicine.php" class="nav-link <?php if($page=='addmedicine'){echo 'active';}?>">
            <i class="bx bxs-clinic"></i>
            <span class="mx-2">Add Medicine</span>
        </a>
        <a href="viewtable.php" class="nav-link <?php if($page=='stockdetails'){echo 'active';}?>">
            <i class="bx bxs-capsule"></i>
            <span class="mx-2">Stock Details</span>
        </a>
        <a href="orderdetails.php" class="nav-link <?php if($page=='orderdetails'){echo 'active';}?>">
            <i class="bx bx-wallet"></i>
            <span class="mx-2">Order Details</span>
        </a>
        <a href="reward-point.php" class="nav-link ">
            <i class="bx bx-wallet"></i>
            <span class="mx-2">Reward Point</span>
        </a>
        <a href="" class="nav-link <?php if($page=='logout'){echo 'active';}?>">
            <i class="bx bxs-log-out"></i>
            <span class="mx-2">logout</span>
        </a>
    </ul>
    <!-- <div class="left">
        <a class="btn border-0" id="menu-btn" onclick=><i id="menu-icon" class="fas fa-arrow-left"></i></a>
    </div> -->
</div>
