$(document).ready(function () {

$('.tooltip').tooltipster();

});


function collapseExpand(idName){
	var element = document.getElementById(idName);

	if ($('#'+idName).hasClass('hidden')) {
		element.className = "showing";
		console.log("TapValue: %@", tap);
	}
	else {
		element.className = "hidden";
		console.log("TapValue: %@", tap);
	}
}