/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(function () {

    $('.site-menu-toggle').on('click', function (e) {
       e.preventDefault();
       toggleNav();
    });

    $('.page-side-menu a[data-file="true"]').on('click', function (e) {
        e.preventDefault();

        var index = $(this).index();

        $('.page-side-menu a.active').removeClass('active');
        $(this).siblings('a').removeClass('active');

        $(this).addClass('active');

        $('#html-content').hide().siblings('#pdf-content').show();
        $('#pdf-content').html('<h3>' + $(this).text() + '</h3><iframe class="iframe" src="' + $(this).attr('href') + '"></iframe>');

    });

    $('li.dropdown').on('show.bs.dropdown', function () {
        $(this).siblings('li').find('.dropdown-menu.shown').removeClass('shown show').slideUp();
    });
});

/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/
function toggleNav() {
    var $siteWrapper = $('.site-wrapper');
    if ($siteWrapper.hasClass('show-nav')) {
        // Do things on Nav Close
        $siteWrapper.removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $siteWrapper.addClass('show-nav');
    }

    //$('#site-wrapper').toggleClass('show-nav');
}