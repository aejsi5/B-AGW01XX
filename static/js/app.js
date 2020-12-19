"use strict";

jQuery(document).ready(function ($) {
    window.setInterval(function(){
        adapt_height();
    },1000);
    $('#link-h').click(function(){
        window.location ="home.php"
    });
    $('.link-zs').click(function () {
        window.location = "zuhause-gesucht.php"
    });
    $('.link-zs-h').click(function () {
        window.location = "zuhause-gesucht.php?type=dogs"
    });
    $('.link-zs-k').click(function () {
        window.location = "zuhause-gesucht.php?type=cats"
    });
    $('.link-zs-a').click(function () {
        window.location = "zuhause-gesucht.php?type=other"
    });
    $('.link-zs-w').click(function () {
        window.location = "zuhause-gesucht.php?type=white"
    });
    $('.link-zs-v').click(function () {
        window.location = "zuhause-gesucht.php?type=missed"
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
});

function adapt_height(){
    var nav_h = $('.navbar-wra').height();
    var html_h = $('html').height();
    var new_h = html_h - nav_h;
    $('main').height(new_h);
    };