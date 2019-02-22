var ww = document.body.clientWidth;

$(document).ready(function() {
    $(".nav li a").each(function() {
        if ($(this).next().length > 0) {
            $(this).addClass("parent");
        }
    });

    $(".toggleMenu").click(function(e) {
        e.preventDefault();
        $(this).toggleClass("active fa-times fa-list-ul toggleMenu__pressed");
        $(".nav").toggle();
        $(".header__logo__wrapper").toggleClass("header__logo__wrapper__with-menu")
    });
    adjustMenu();
});

$(window).bind('resize orientationchange', function() {
    ww = document.body.clientWidth;
    adjustMenu();
});

var adjustMenu = function() {
    if (ww < 768) {
        $(".toggleMenu").css("display", "flex");
        if (!$(".toggleMenu").hasClass("active")) {
            $(".nav").hide();
        } else {
            $(".nav").hide();//show
        }
        $(".nav li").unbind('mouseenter mouseleave');
        $(".nav li a.parent").unbind('click').bind('click', function(e) {
            // must be attached to anchor element to prevent bubbling
            e.preventDefault();
            $(this).parent("li").toggleClass("hover");
        });
    }
    else if (ww >= 768) {
        $(".toggleMenu").css("display", "flex");
        $(".nav").hide();//show
        $(".nav li").removeClass("hover");
        $(".nav li a").unbind('click');
        $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
            // must be attached to li so that mouseleave is not triggered when hover over submenu
            $(this).toggleClass('hover');
        });
    }
};
$(document).ready(function(){
    $('.main-page__image__wrapper').slick({
        adaptiveHeight : true,
        prevArrow : '.main-page__slider__prev-btn',
        nextArrow : '.main-page__slider__next-btn'
});
});
$(document).ready(function () {
   $('.big-image__slider__info__compress-btn').on('click', function () {
       $('.big-image__slider__info__wrapper').toggleClass("big-image__slider__info__wrapper__pressed");
       $('.big-image__slider__info__compress-btn').toggleClass("fa-compress fa-expand");
       $('.big-image__slider__info__content__wrapper').toggleClass("big-image__slider__info__content__wrapper__hidden");
       $('.big-image__slider__info__answer__wrapper').toggleClass("big-image__slider__info__answer__wrapper__hide");
   })
});