$(function() {
 	$(".wpcf7-form").removeAttr("novalidate");
 
 	$("#carouselExampleIndicators").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#carouselExampleIndicators").swipeleft(function() {
      $(this).carousel('next');
   });

});