
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




//
//
//
///*!
// * classie - class helper functions
// * from bonzo https://github.com/ded/bonzo
// *
// * classie.has( elem, 'my-class' ) -> true/false
// * classie.add( elem, 'my-new-class' )
// * classie.remove( elem, 'my-unwanted-class' )
// * classie.toggle( elem, 'my-class' )
// */
//
///*jshint browser: true, strict: true, undef: true */
///*global define: false */
//
//( function( window ) {
//
//    'use strict';
//
//// class helper functions from bonzo https://github.com/ded/bonzo
//
//    function classReg( className ) {
//        return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
//    }
//
//// classList support for class management
//// altho to be fair, the api sucks because it won't accept multiple classes at once
//    var hasClass, addClass, removeClass;
//
//    if ( 'classList' in document.documentElement ) {
//        hasClass = function( elem, c ) {
//            return elem.classList.contains( c );
//        };
//        addClass = function( elem, c ) {
//            elem.classList.add( c );
//        };
//        removeClass = function( elem, c ) {
//            elem.classList.remove( c );
//        };
//    }
//    else {
//        hasClass = function( elem, c ) {
//            return classReg( c ).test( elem.className );
//        };
//        addClass = function( elem, c ) {
//            if ( !hasClass( elem, c ) ) {
//                elem.className = elem.className + ' ' + c;
//            }
//        };
//        removeClass = function( elem, c ) {
//            elem.className = elem.className.replace( classReg( c ), ' ' );
//        };
//    }
//
//    function toggleClass( elem, c ) {
//        var fn = hasClass( elem, c ) ? removeClass : addClass;
//        fn( elem, c );
//    }
//
//    var classie = {
//        // full names
//        hasClass: hasClass,
//        addClass: addClass,
//        removeClass: removeClass,
//        toggleClass: toggleClass,
//        // short names
//        has: hasClass,
//        add: addClass,
//        remove: removeClass,
//        toggle: toggleClass
//    };
//
//// transport
//    if ( typeof define === 'function' && define.amd ) {
//        // AMD
//        define( classie );
//    } else {
//        // browser global
//        window.classie = classie;
//    }
//
//})( window );
//
//
//
//
//
//
///**
// * main.js
// * http://www.codrops.com
// *
// * Licensed under the MIT license.
// * http://www.opensource.org/licenses/mit-license.php
// *
// * Copyright 2014, Codrops
// * http://www.codrops.com
// */
//(function() {
//
//    var bodyEl = document.body,
//        content = document.querySelector( '.content-wrap' ),
//        openbtn = document.getElementById( 'open-button' ),
//        closebtn = document.getElementById( 'close-button' ),
//        isOpen = false;
//
//    function init() {
//        initEvents();
//    }
//
//    function initEvents() {
//        openbtn.addEventListener( 'click', toggleMenu );
//        if( closebtn ) {
//            closebtn.addEventListener( 'click', toggleMenu );
//        }
//
//        // close the menu element if the target it´s not the menu element or one of its descendants..
//        content.addEventListener( 'click', function(ev) {
//            var target = ev.target;
//            if( isOpen && target !== openbtn ) {
//                toggleMenu();
//            }
//        } );
//    }
//
//    function toggleMenu() {
//        if( isOpen ) {
//            document.body.classList.remove('show-menu');
//        }
//        else {
//            document.body.classList.add('show-menu');
//        }
//        isOpen = !isOpen;
//    }
//
//    init();
//
//})();