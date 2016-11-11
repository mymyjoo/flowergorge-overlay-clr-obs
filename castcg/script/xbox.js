$(function() {
    $('button').click(function() {
        console.log('swapout');

        var el = $('.achievement-banner'),
            newone = el.clone(true);

        el.before(newone);
        $('.achievement-banner:last').remove();
    });
});
