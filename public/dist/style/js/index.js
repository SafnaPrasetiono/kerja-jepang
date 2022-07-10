$(document).scroll(() => {
    var classed = $('.navbar');
    classed.toggleClass('shadow', $(this).scrollTop() > classed.height());
});