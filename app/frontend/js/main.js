"use strict";

$(document).ready(function () {

    var item = $('.product-item > a');
    var arrow = $('.chevron');
    var slides = $('.slide');

    function clearActive(arr) {
        for (var i = 0; i < arr.length; i++) {
            arr.eq(i).removeClass('active');
        }
    }

    $('.menu-btn').click(function () {
        $('.header nav').slideToggle();
    });
    
    $('.sidebar-btn').click(function () {
        $('.sidebar').slideToggle();
    });

    $(window).resize(function () {
        var w = $(window).width();
        if (w > 760) {
            $('.header nav').removeAttr('style');
            $('.sidebar').removeAttr('style');
        }
    });

    item.click(function () {
        clearActive(item);
        $(this).addClass('active');
        if ($(this).parent().is(':has(ul)')) {
            $(this).parent().children('ul').slideToggle();
        }
    });

    var index = 0;
    arrow.click(function () {
        var name = $(this).attr('class');
        if (name == 'chevron chevron-empty-left') {
            index = 0;
        }
        if (name == 'chevron chevron-left') {
            if (index != 0) {
                index--;
                slides.eq(0).animate({
                    'margin-left': -100 * index + '%'
                }, 500);
                $('.chevron-empty-right').css('z-index', '2');
                $('.chevron-right').css('z-index', '3');
            }
            if (index == 0) {
                $('.chevron-empty-left').css('z-index', '3');
                $('.chevron-left').css('z-index', '2');
            }
        }
        if (name == 'chevron chevron-empty-right') {
            index = slides.length - 1;
        }
        if (name == 'chevron chevron-right') {
            if (index < slides.length - 1) {
                index++;
                slides.eq(0).animate({
                    'margin-left': -100 * index + '%'
                }, 500);
                $('.chevron-empty-left').css('z-index', '2');
                $('.chevron-left').css('z-index', '3');
            }
            if (index == slides.length - 1) {
                $('.chevron-empty-right').css('z-index', '3');
                $('.chevron-right').css('z-index', '2');
            }
        }
    });
});
