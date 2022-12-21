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
          <span class="mx-2">Home</span>
        </a>
        <a href="update-details.php" class="nav-link">
          <i class="bx bxs-edit-alt"></i>
          <span class="mx-2">Update Your Details</span>
        </a>
        <a href="search-doctor.php" class="nav-link">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Search Doctor</span>
        </a>
        <a href="search-diagnostic.php" class="nav-link">
          <i class="bx bxs-flask"></i>
          <span class="mx-2">Search Diagnostic</span>
        </a>
        <a href="search-hospital.php" class="nav-link">
          <i class="bx bxs-clinic"></i>
          <span class="mx-2">Search Hospital</span>
        </a>
        <a href="search-medicine.php" class="nav-link">
          <i class="bx bxs-capsule"></i>
          <span class="mx-2">Search Medicine</span>
        </a>
        <a href="prescription.php" class="nav-link active">
          <i class="bx bxs-capsule"></i>
          <span class="mx-2">Add Prescription</span>
        </a>
        <a href="reward-point.php" class="nav-link">
          <i class="bx bx-wallet"></i>
          <span class="mx-2">Reward Point</span>
        </a>
        <a href="" class="nav-link">
          <i class="bx bxs-log-out"></i>
          <span class="mx-2">logout</span>
        </a>
      </ul>
      <div class="left">
        <a class="btn border-0" id="menu-btn"><i id="menu-icon" class="fas fa-arrow-left"></i></a>
      </div>
    </div>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light sticky-top top-0 bg-ems-green px-5 d-flex">
            <div class="left">
                <a class="btn border-0" id="menu-btn"><i id="menu-icon" class="fas fa-arrow-left"></i></a>
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

        <div class="container mt-5 mb-5">
            <div class="text-center text-secondary h6 fw-normal fs-3 mb-3">Make a Prescription</div>
            <div class="row">
                <div class="col-md-10 offset-md-1 border p-4 shadow bg-white">
                    <form action="" class="form">
                        <div class="row g-3 mb-4 border-bottom">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="text-secondary">
                                    <p class="text-start">Dr.XYZ <span
                                            class="fs-7">MBBs,Ms(ortho)</span><br><span>xxxx...</span></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2"></div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="mb-3 text-secondary">
                                    <p class="text-end">Date:20.11.22</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mb-5">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="mb-3 text-secondary">
                                    <p class="">Patient Name: Aladin</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2 text-secondary">
                                <div class="mb-3 text-secondary">
                                    <p class="text-md-center">Age:25</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="mb-3 text-secondary">
                                    <p class="text-md-end">Gender:Male</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="mb-3 text-secondary">
                                    <p class="">Address: South Banasree</p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-md-4 mt-2">
                                <fieldset class="border p-4">
                                    <legend class="float-none w-auto p-2 ">Diagonstic</legend>
                                    <div class="mb-4">
                                        <div class="mb-0">
                                            <h5 class="fw-bold">C/C</h5>
                                        </div>
                                        <div class="mb-3 form-check-inline">
                                            <input type="text" class="form-control" id="text" value=""
                                                placeholder="E.g. Jhon Doe" />
                                        </div>
                                        <div class="mb-3 form-check-inline">
                                            <input type="text" class="form-control" id="text" value=""
                                                placeholder="E.g. Jhon Doe" />
                                        </div>
                                        <div class="mb-3 form-check-inline">
                                            <input type="text" class="form-control" id="text" value=""
                                                placeholder="E.g. Jhon Doe" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-0">
                                            <h5 class="fw-bold">O/C</h5>
                                        </div>
                                        <div class="mb-2">
                                            <p>1. BP: xx</p>
                                        </div>
                                        <div class="mb-2">
                                            <p>2. Pulse: xx</p>
                                        </div>
                                        <div class="mb-2">
                                            <p>3. Temp: xx</p>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-0">
                                            <h5 class="fw-bold">General Assesment:</h5>
                                        </div>
                                        <div class="mb-2">
                                            <p>1. Height: 172cm</p>
                                        </div>
                                        <div class="mb-2">
                                            <p>2.Weight: 77kg</p>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-0">
                                            <h5 class="fw-bold">Investication:</h5>
                                        </div>
                                        <div class="mb-2">
                                            <p>1. xyz</p>
                                        </div>
                                        <div class="mb-2">
                                            <p>2.xyz</p>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-0">
                                            <h5 class="fw-bold">Advices:</h5>
                                        </div>
                                        <div class="mb-2">
                                            <p>1. xyz</p>
                                        </div>
                                        <div class="mb-2">
                                            <p>2.xyz</p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-12 col-md-8 mt-2">
                                <fieldset class="border p-4">
                                    <legend class="float-none w-auto p-2 ">Pharmacy</legend>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="mb-0">
                                                <h5 class="fw-bold">R/X</h5>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <div class="mb-4 form-check-inline">
                                                <label class="form-label">Medicine types</label>
                                                <select id="medicineTypes" class="form-select"
                                                    aria-label="Medicine types">
                                                    <option value="" selected>Select Medicine</option>
                                                    <option value="1">SYP</option>
                                                    <option value="2">TAB</option>
                                                    <option value="3">ING</option>
                                                    <option value="4">DROP</option>
                                                    <option value="5">ING</option>
                                                    <option value="6">CAP</option>
                                                </select>
                                            </div>
                                            <div class="mb-4">

                                                <h5 class="text-center">Tab.</h5>
                                            </div>
                                            <div class="mb-4">

                                                <h5 class="text-center">Cap.</h5>
                                            </div>
                                            <div class="mb-4">

                                                <h5 class="text-center">Cap.</h5>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <div class="mb-3">
                                                <label class="form-label">Add Medicine</label>
                                                <div class=" d-flex justify-content-md-between">
                                                    <input type="text" class="form-control" id="inputtask" value=""
                                                        placeholder="E.g. Napa" />
                                                    <input id="addbutton" value="Add Task" type="submit" />
                                                </div>
                                                <ol class="todolist"></ol>

                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

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

    <!-- Initial js for add medicine -->
    <script>
        const medicineTypes = document.querySelector("#medicineTypes");
        const inputTask = document.querySelector("#inputtask");
        const form = document.querySelector(".form");
        const addButton = document.querySelector("#addbutton");
        const toDoList = document.querySelector(".todolist");

        form.addEventListener("submit", function (event) {
            event.preventDefault();
            if (inputTask.value == "") {
                alert("please add Some Text");
            } else {
                const newTask = createNewItem(inputTask.value);

                toDoList.appendChild(newTask);
                inputTask.value = "";
                inputTask.focus();
            }

            clear.addEventListener("click", function () {
                toDoList.innerHTML = "";
            });
        });

        function createNewItem(inputValue) {
            const task = document.createElement("li");
            const span = document.createElement("span");
            const delBtn = document.createElement("button");
            const editBtn = document.createElement("button");
            span.textContent = inputValue;
            delBtn.textContent = "Delete";
            editBtn.textContent = "Edit";
            task.appendChild(span);
            task.appendChild(delBtn);
            task.appendChild(editBtn);
            delBtn.addEventListener("click", function () {
                task.parentNode.removeChild(task);
            });
            editBtn.addEventListener("click", function () {
                span.contentEditable = true;
                span.focus();
            });

            return task;
        }

    </script>
</body>

</html>