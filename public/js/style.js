jQuery(document).ready(function($) {
    // Header fixed on scroll
    $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('#header').addClass('header-scrolled');
    } else {
        $('#header').removeClass('header-scrolled');
    }
    });

    if ($(window).scrollTop() > 50) {
    $('#header').addClass('header-scrolled');
    }
})