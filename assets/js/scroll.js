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
            if (pos < winTop + 650 && !$(this).hasClass("count")) {
                $(this).removeClass("zero");
                $(this).innerHTML = $(this).attr("data-count");
                $(this).addClass("count");
                var counters = $(".count");
        var countersQuantity = counters.length;
        var counter = [];
        
        for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
        }
    
        var count = function(start, value, id) {
        var localStart = start;
        var original = value;
        if (value > 200000){
            localStart = value-100000;
        }
        setInterval(function() {
            if (localStart < value) {
                localStart= localStart+1521;
                if(localStart < value){
                    counters[id].innerHTML = localStart;
                }else
                {
                    var dif = localStart-value;
                    
                    if(dif == 0 || counters[id].innerHTML == original) {
                    }
                    else if (dif < 0){
                        if(localStart < original){
                            localStart++;
                            counters[id].innerHTML = localStart;
                        }
                    }
                    else{
                        counters[id].innerHTML = original;
                    }
                }
            }else{
            var dif = localStart-original;
            
            if(dif == 0){
                $(fun).finish();
                
            }
            else if (dif < 0){
                if(localStart < original){
                    localStart++;
                    counters[id].innerHTML = localStart;
                }
            }
            else{
                counters[id].innerHTML = original;
            }
            }
        }, 40);
        }
    
        for (j = 0; j < countersQuantity; j++) {
            count(0, counter[j], j);
        }       
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