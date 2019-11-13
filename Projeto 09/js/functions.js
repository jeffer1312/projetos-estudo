$('nav a').hover(function() {
    $('nav li').removeClass('selected');
    $(this).parent().addClass('selected');

})
$('.menu-mobile > i').click(function() {
    $('.menu-mobile').find('ul').slideToggle();
})