/*!
* JS Scripts
*/

jQuery(function(){
	//Carousel
	jQuery('.carousel').carousel({interval: 3500});
	jQuery(".carousel-indicators li:first").addClass("active");
	jQuery(".carousel-inner .item:first").addClass("active");
});

jQuery(document).ready(function($) {

	// initialize Isotope after all images have loaded
var $container = $('#portfolio-items').imagesLoaded( function() {
  $container.isotope({
	  itemSelector: '.item',
	  layoutMode: 'fitRows'
  });
});

// filter items on button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
});   

});