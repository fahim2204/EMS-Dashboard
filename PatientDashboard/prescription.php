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
    <?php $page='prescription'; include 'sidebar.php'; ?>
    <!-- SIDE-NAV END -->

    <div class="my-container active-cont d-flex flex-column justify-content-start vh-100">
        <!-- Top Nav -->
        <?php include 'header.php';?>
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
                                    <p class="text-end">Date: 20.11.22</p>
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