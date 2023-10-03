$(document).ready(function(){

    $(window).scroll(function(){
        var scrollPos = $(this).scrollTop();
        if(scrollPos > 200){
            $('.nav').addClass('sticky');
        }else {
            $('.nav').removeClass('sticky')
        }
    })
})