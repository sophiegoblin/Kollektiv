jQuery(document).ready(function($) {

    // MAIN MENU
    var toggleMenu = function() {
        $("#main-menu-wrap").toggleClass('open');
        $('#main-menu-button').toggleClass('is-open');
        $('#main-menu-button').toggleClass('is-closed');
        $("#search-container").toggleClass('menu-slide-open');
        console.log('togglemenu');
    };

    $('#main-menu-button').click(function() {
       toggleMenu();
    });

    // ENTRIES MENU
    $('#entries-sidebar-button').click(function() {
        $("#entries-sidebar, #entries-sidebar-button").toggleClass('open');
    });


    // SEARCH FIELD
    $('#search-container').click(function(e){
        if ($(this).hasClass('open')){
            if(!$('#search-field').is(e.target)){
                $(this).toggleClass('open');
                toggleMenu();
            }
        } else {
            $(this).toggleClass('open');
        }
    });


    // MANUAL WAYPOINTS
    $('.manual-item').waypoint({
        handler: function(direction) {
            var $current = $(this);
            $('.manual-image').removeClass('selected');
            $('.nav-manual a').removeClass('selected');
            $('.'+$current.attr('id')).addClass('selected');
            //$('.manual-image-'+$current.attr('id')).addClass('selected');
            console.log('.manual-image-'+$current.attr('id'));
        },
        offset : '40%'
    });


    // MANUAL SCROLL TO
    $('a').click( function(event) {
        $.scrollTo(
            $(this).attr("href"),
            {
                duration: 700,
                offset: { 'left':0, 'top':-80 }
            }
        );
    });


    // MANUAL NAV SCROLL
    var scrolled = 0;
    $(".arrow-up").on("click", function() {
        scrolled = scrolled-300;
        $(".nav-manual ul").animate({"scrollTop": scrolled}, 300);
    });
    $(".arrow-down").on("click", function() {
        scrolled=scrolled+300;
        $(".nav-manual ul").animate({"scrollTop": scrolled}, 300);
    });



});
