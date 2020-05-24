$('#sidebar a').click(function (e) {
    var goTo = $(this).attr('href'); // selects element that was clicked
    console.log(goTo);
    $("html,body").animate({ scrollTop: $(goTo).offset().top }, 1000);
    e.preventDefault();
});

$('a.nav-link').click(function (e) {
    $('.navbar-toggler').trigger('click');
    var goTo = $(this).attr('href'); // selects element that was clicked
    console.log(goTo);
    $("html,body").animate({ scrollTop: $(goTo).offset().top }, 1000);
    e.preventDefault();
});