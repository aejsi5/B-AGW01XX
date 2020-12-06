"use strict";

jQuery(document).ready(function ($) {
    adapt_height();
    window.setInterval(function(){
        adapt_height();
    },1000);
    $('#link-h').click(function(){
        window.location ="home.html"
    });
    $('.not-collapse.link-zs').click(function () {
        window.location = "zuhause-gesucht.html"
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
    $('.not-collapse.link-zf').click(function () {
        window.location = "zuhause-gefunden.html"
    });
    $('.not-collapse.link-g').click(function () {
        window.location = "galerie.html"
    });
    $('.not-collapse.link-k').click(function () {
        window.location = "kontakt.html"
    });
    $('.link-demo').click(function(){
        window.location = "demo.html"
    });
    if ($(window).width() < 960) {
        $('.mnav-li').removeClass('not-collapse');
    } else {
        $('.mnav-li').addClass('not-collapse');
    };
    $(window).resize(function(){
        if ($(window).width() < 960) {
            $('.mnav-li').removeClass('not-collapse');
        }else{
            $('.mnav-li').addClass('not-collapse');
        };
    });
});

function adapt_height(){
    var nav_h = $('.navbar-wra').height();
    var html_h = $('html').height();
    var new_h = html_h - nav_h;
    $('main').height(new_h);
    };