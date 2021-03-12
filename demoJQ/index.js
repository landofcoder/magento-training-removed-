$(function () {
    $(".sub").slice(0, 5).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".sub:hidden").slice(0, 5).slideDown();
        if ($(".sub:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

$(function() {
    $('.nav').on('click',function(e) {
        e.preventDefault();
        $(".sub_menu").slideToggle();
    });
});


