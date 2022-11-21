var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var menu_icn = document.querySelector("#menu-icon");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
    menu_icn.classList.toggle("fa-rotate-180")
    sidebar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
});

$(window).on("load", function() {
    $("#preloader-active").delay(450).fadeOut("slow");
    $("body").delay(450).css({
        overflow: "visible",
    });
});