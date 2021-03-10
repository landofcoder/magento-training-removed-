$(function () {
    $('.nd').slideUp();

    $('.motkhoi h3').click(function (event) {
    
        $(this).next().slideToggle();
    });
});