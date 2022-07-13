
$(document).ready(function(){

    console.log('ready');

    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      // slidesOffsetAfter: 100,

      loop: true,
      keyboard: true,
      initialSlide: 0,
      slidesPerView: 'auto',
      loopedSlides: 6,



    // If we need pagination
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {

      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },


    });




  $( ".menu-button" ).click(function() {
        $( "html" ).toggleClass( "nav-closed" );
        $( "html" ).toggleClass( "nav-open" );
    });


    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".clear-header");

        if ($(window).scrollTop() >= 100) {
            header.removeClass('clear-header').addClass("filled-header");
        } else {
            header.removeClass("filled-header").addClass('clear-header');
        }

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                header.removeClass('clear-header').addClass("filled-header");
            } else {
                header.removeClass("filled-header").addClass('clear-header');
            }
        });
    });


    // $(window).scroll(function() {
    //    if ($(this).scrollTop() > 150){
    //       $('dark-header').removeClass('filled-header').addClass("clear-header");
    //    } else {
    //       $('dark-header').addClass('clear-header').removeClass("clear-header");
    //    }
    // });


});



