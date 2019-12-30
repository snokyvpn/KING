jQuery(function ($) {

    // Dropdown menu
    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }
    });



    //toggle sidebar
    $("#toggle-sidebar").click(function () {
        $(".page-wrapper").toggleClass("toggled");
        document.getElementById("fundomenu").style.display = "block";
    });

    $("#fundomenu").click(function () {
        $(".page-wrapper").toggleClass("toggled");
        document.getElementById("fundomenu").style.display = "none";
    });


    //toggle sidebar overlay
    $("#overlay").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });

    //custom scroll bar is only used on desktop
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $(".sidebar-content").mCustomScrollbar({
            axis: "y",
            autoHideScrollbar: true,
            scrollInertia: 300
        });
        $(".sidebar-content").addClass("desktop");
    }
});
