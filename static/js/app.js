"use strict";

jQuery(document).ready(function ($) {
    window.setInterval(function(){
        adapt_height();
    },1000);
    $('span[data-emergency="1"]').html('<i class="fas fa-exclamation-triangle" title="Notfall"></i>');

    $('#link-h').click(function(){
        window.location ="home.php"
    });
    $('.link-zs').click(function () {
        window.location = "zuhause-gesucht.php"
    });
    $('.link-zf').click(function () {
        window.location = "zuhause-gefunden.php"
    });
    $('.link-g').click(function () {
        window.location = "galerie.php"
    });
    $('.link-k').click(function () {
        window.location = "kontakt.php"
    });
    $('.link-demo').click(function(){
        window.location = "demo.php"
    });
    $('.mnav-li').hover(
        function(){
            $(this).addClass('mnav-li-hover');
            if (window.innerWidth < 960) {
                $(this).find('ul').removeClass('collapse');
            };
        },
        function(){
            $(this).removeClass('mnav-li-hover');
            if (window.innerWidth < 960) {
                $(this).find('ul').addClass('collapse');
            };
        }
    );
    $('.hover-space').hover(
        function () {
            if (window.innerWidth < 960) {
                $(this).find('ul').removeClass('collapse');
            };
        },
        function () {
            if (window.innerWidth < 960) {
                $(this).find('ul').addClass('collapse');
            };
        }
    );
    $('.video_link').click(function(){
        $(this).next('.video-overlay').removeClass('collapse');
    });
    $('.back_video').click(function(){
        $(this).parents('.video-overlay').addClass('collapse');
    });
    $('.btn-mobile-nav').click(function(){
        $(this).next().children('.navbar-wra').toggleClass('navbar-wra-mobile-hide');
    });
    $('body').scroll(function () {
        if ($('body').scrollTop() > 430 && window.innerWidth < 560 ) {
            $('.mobile-nav').removeClass('collapse');
        }else{
            $('.mobile-nav').addClass('collapse');
        }
    });
    $('.content').scroll(function (){
        $('.mobile-nav').addClass('collapse');
    });
});

function adapt_height(){
    var nav_h = $('.navbar-wra').height();
    var html_h = $('html').height();
    var new_h = html_h - nav_h;
    $('main').height(new_h);
    };