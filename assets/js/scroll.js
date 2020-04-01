/*
Design by: Hype Technology Spain
Made by: Mathias Moser
Hype Technology Spain: http://hype.com.es
Copyright 2019 - 2020
All Rights Reserved
*/
//Responsable por añadir clases cuando realizamos scroll------------------------------------------------------------------------------

//---------------Slide In desde abajo----------------
$(document).ready(function() {
    $(window).scroll(function() {
        $(".slideanim").each(function() {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slidel");
            }
        });
    });
});

//----------------Slide In desde la izquierda----------------
$(document).ready(function() {
    $(window).scroll(function() {
        $(".FadeLeft").each(function() {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 650) {
                $(this).addClass("fadeInLeft");
                
            }
        });
    });
});

$(document).ready(function() {
    $(window).scroll(function() {
        $(".counter").each(function() {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 650) {
                $(this).removeClass(".zero");
                $(this).innerHTML = $(this).attr("data-count")
                $(this).addClass(".count");
            }
        });
    });
});
//----------------Slide In desde la izquierda----------------
$(document).ready(function() {
    $(window).scroll(function() {
        $(".PopIn").each(function() {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("popin");
            }
        });
    });
});

//-----------------Slide In desde la derecha----------------
$(document).ready(function() {
    $(window).scroll(function() {
        $(".FadeRight").each(function() {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 650) {
                $(this).addClass("fadeInRight");
            }
        });
    });
});