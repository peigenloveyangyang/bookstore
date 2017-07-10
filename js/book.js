$('.header1 .nav1 li').click(function(){
    $('.header1 .nav1 li').each(function () {
        $(this).removeClass("actA");
    })
    $(this).addClass("actA");
})

