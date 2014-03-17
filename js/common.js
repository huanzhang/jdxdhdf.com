$(document).ready(function () {
    $(".subItems").hover(function () {
        $(this).parent(".navItem").children("a").addClass("selected");
    });
    $(".subItems").mouseleave(function () {
        $(this).parent(".navItem").children("a").removeClass("selected");
    });
});
