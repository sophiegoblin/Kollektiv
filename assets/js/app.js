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
            // TODO: FIX DIRECTION UP POSITION CALLING TOO LATE
        },
        offset : '40%'
    });


    // MANUAL SCROLL TO
    $('a').click( function(e) {
        $.scrollTo(
            $(this).attr("href"),
            {
                duration: 700,
                offset: { 'left':0, 'top':-80 }
            }
        );
        e.preventDefault();
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


    // VIDEO OVERLAY
    var toggleVideo = function(){
        $('.overlay-video, .video-container').toggleClass('show');
    };

    $('.video-placeholder').on('click', function(e) {
        toggleVideo();
        var youtubeIframe = '<iframe src="'+$(this).data('url')+'?autoplay=1" frameborder="0" allowfullscreen></iframe>';
        $('.flex-video').append(youtubeIframe);
    });

    $('.overlay-video').on('click', function(e) {
        toggleVideo();
        $('.flex-video').empty();
    });


    // PICTURE INTERVIEW SCROLL
    /*  run scroll to section only if body has class page-scroller */
    //var pageScroller = $( 'body' ).hasClass( 'page-scroller' );
    //if ( pageScroller ) {


    var $scrollSection = $('.slide');
    var $scrollTrigger = $('.trigger-scroll');

    $scrollSection.waypoint({
        handler: function(direction) {
            var $current = $(this);
            if (direction === "up"){
                $current = $current.prev();
            }
            $scrollSection.removeClass('selected');
            $($current).addClass('selected');
        },
        offset : '40%'
    });



    $scrollTrigger.on('click', function(e) {

        // only scroll down if next element is a scrollSection
        if ($('.selected').next().hasClass('slide')){
            $.scrollTo(
                $('.selected').next(),
                {
                    duration: 700
                }
            );
        } else {
            // last element so scroll to the first
            $.scrollTo(
                $scrollSection[0],
                {
                    duration: 700
                }
            );
        }
        e.preventDefault();
    });




    //
    //$scrollTrigger.on( 'click', function() {
    //    $(this).removeClass('go-to-top');
    //
    //    // If at last section, scroll back to top on next click:
    //    if (nextSection >= $scrollSection.length) {
    //        $('html, body').animate({ scrollTop: 0 }, 1000);
    //        nextSection = 0;
    //        return;
    //    }
    //
    //    // If already scrolled down
    //    // to find next section position so you don't go backwards:
    //    while ( $('body').scrollTop() > $($scrollSection[nextSection]).offset().top ) {
    //        nextSection++;
    //    }
    //
    //    // If next section is the last, add class to rotate arrow:
    //    if (nextSection === ($scrollSection.length - 1)) {
    //        $(this).addClass('go-to-top');
    //    }
    //
    //    // Move to next section and increment counter check:
    //    $( 'html, body' ).animate({ scrollTop: $($scrollSection[nextSection]).offset().top }, 1000);
    //    nextSection++;
    //});
    // end homepage scroll to section
    //}else{
    //    console.log('page-scroller class was not found in body tag');
    //}//end if else


});