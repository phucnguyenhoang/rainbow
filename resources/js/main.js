$(function() {
    $('#btnToggleMenu').click(function() {
        $('#panMenuBg').removeClass('hide');
        $('#rightMenu').animate({
            right: '0px'
        }, 200);
    });

    $('#panMenuBg').click(function() {
        var bg = $(this);
        $('#rightMenu').animate({
            right: '-300px'
        }, 200, function() {
            bg.addClass('hide');
        });
    });

    $(window).resize(function() {
        if (!$('#btnToggleMenu').is(':visible')) {
            $('#rightMenu').animate({
                right: '-300px'
            }, 200, function() {
                $('#panMenuBg').addClass('hide');
            });
        }
    });
});