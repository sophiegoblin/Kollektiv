
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


    //$.waypoints('refresh');


    // MANUAL WAYPOINTS
    $('.manual-item').waypoint(function() {
        console.log('Top of manual element hit top of viewport.');
    });

});
