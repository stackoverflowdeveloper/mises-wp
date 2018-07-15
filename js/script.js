$(document).ready(function() {
  $("#nav-icon").click(function() {
    $(this).toggleClass("open");
    $("#navigation").toggleClass("open");
  });
  $('.support__hero-scroll').click(function() {
    $("html, body").animate(
      {
        scrollTop: $('.support__form-anchor').offset().top
      },
      1000
    );
  });
});

$("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	}, 2000 );
});