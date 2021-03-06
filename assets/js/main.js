$(".button-collapse").sideNav();
$(window).load(function() {
  // When the page has loaded
  $(".loader").fadeIn(2000);
  $(".preloader-wrapper" ).removeClass( "active" )
});
$('.dropdown-button').dropdown({
	  inDuration: 300,
	  outDuration: 225,
	  constrain_width: false, // Does not change width of dropdown to that of the activator
	  hover: true, // Activate on hover
	  gutter: 0, // Spacing from edge
	  belowOrigin: false, // Displays dropdown below the button
	  alignment: 'right' // Displays dropdown with edge aligned to the left of button
	}
);
$(document).ready(function(){
		$('.modal-trigger').leanModal();
	});
$(document).ready(function() {
	$('select').material_select();
  });
$('.datepicker').pickadate({
	selectMonths: true, // Creates a dropdown to control month
	selectYears: 40 // Creates a dropdown of 15 years to control year
});