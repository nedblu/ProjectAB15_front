$(document).ready(function () {

$('.tooltip').tooltipster();

});


function collapseExpand(idName, icon){
	var element = document.getElementById(idName);
	var icon = document.getElementById(icon);

	if ($('#'+idName).hasClass('hidden')) {
		element.className = "content showing";
		icon.className = "fa fa-minus-square"
	}
	else {
		element.className = "content hidden";
		icon.className = "fa fa-plus-square";
	}
}