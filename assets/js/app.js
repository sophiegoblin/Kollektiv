/*! Kollektiv-Legacy 0.0.1 app.js 2015-02-02 5:20:25 PM */
jQuery(document).ready(function($) {
    $(".nav-toggle").click(function() {
        $(this).toggleClass("open");
        $("nav").fadeToggle(100);
        return false;
    });
    $(document).foundation();
});