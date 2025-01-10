$(window).scroll(function (){
    if($(window).scrollTop() > 300){
        if($(".goTop").hasClass("hide")){
            $(".goTop").toggleClass("hide");
        }
    }else{
        $(".goTop").addClass("hide");
    };
    if($(window).scrollTop() > 300) {
        if($(".fb").hasClass("hide")) {
            $(".fb").toggleClass("hide");
        }
    }else {
        $(".fb").addClass("hide");
    };
    if($(window).scrollTop() > 300) {
        if($(".ig").hasClass("hide")) {
            $(".ig").toggleClass("hide");
        }
    }else {
        $(".ig").addClass("hide");
    };
    if($(window).scrollTop() > 300) {
        if($(".line").hasClass("hide")) {
            $(".line").toggleClass("hide");
        }
    }else {
        $(".line").addClass("hide");
    }
});