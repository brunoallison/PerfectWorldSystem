$(window).load(function () {
    $('#wrapper a').click(function () {
        if ($(this).attr('class') != $('#wrapper').attr('class')) {
            $('#wrapper').attr('class', $(this).attr('class'));
        }
    });
});


$(document).ready(function () {
    $('#slider1').tinycarousel();
});


$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#top').fadeIn();
        } else {
            $('#top').fadeOut();
        }
    });
    $('#top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});