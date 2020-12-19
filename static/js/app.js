"use strict";

jQuery(document).ready(function ($) {
    adapt_height();
    window.setInterval(function(){
        adapt_height();
    },1000);
    $('#link-h').click(function(){
        window.location ="home.html"
    });
    $('.link-zs').click(function () {
        if (window.innerWidth < 960) {
            $(this).find('ul').toggleClass('collapse');
        }else{
            window.location = "zuhause-gesucht.html"
        }
    });
    $('.link-zs-h').click(function () {
        window.location = "zuhause-gesucht.html?type=dogs"
    });
    $('.link-zs-k').click(function () {
        window.location = "zuhause-gesucht.html?type=cats"
    });
    $('.link-zs-a').click(function () {
        window.location = "zuhause-gesucht.html?type=other"
    });
    $('.link-zs-w').click(function () {
        window.location = "zuhause-gesucht.html?type=white"
    });
    $('.link-zs-v').click(function () {
        window.location = "zuhause-gesucht.html?type=missed"
    });
    $('.link-zf').click(function () {
        if (window.innerWidth < 960) {
            $(this).find('ul').toggleClass('collapse');
        } else {
            window.location = "zuhause-gefunden.html"
        }
    });
    $('.link-g').click(function () {
        if (window.innerWidth < 960) {
            $(this).find('ul').toggleClass('collapse');
        } else {
            window.location = "galerie.html"
        }
    });
    $('.link-k').click(function () {
        if (window.innerWidth < 960) {
            $(this).find('ul').toggleClass('collapse');
        } else {
            window.location = "kontakt.html"
        }
    });
    $('.link-demo').click(function(){
        window.location = "demo.html"
    });
});

function adapt_height(){
    var nav_h = $('.navbar-wra').height();
    var html_h = $('html').height();
    var new_h = html_h - nav_h;
    $('main').height(new_h);
    };