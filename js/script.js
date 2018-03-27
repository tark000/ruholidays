$(function() {
 	$(".wpcf7-form").removeAttr("novalidate");
 
 	// $("#carouselExampleIndicators").swiperight(function() {
  //     $(this).carousel('prev');
  //   });
  //  $("#carouselExampleIndicators").swipeleft(function() {
  //     $(this).carousel('next');
  //  });

 //   $('#carouselExampleIndicators').hammer().on("swipeleft", function(event) {
 //      $(this).carousel('prev');
	// });

 //   $('#carouselExampleIndicators').hammer().on("swiperight", function(event) {
 //      $(this).carousel('next');
	// });


    var blue      = document.getElementById('carouselExampleIndicators');
	var hammer    = new Hammer.Manager(blue);
	var swipe     = new Hammer.Swipe();

	hammer.add(swipe);

	hammer.on('swipeleft', function(){
      $(blue).carousel('next');
	});

	hammer.on('swiperight', function(){
      $(blue).carousel('prev');
	});

});