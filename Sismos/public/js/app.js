var App = angular.module('Sismos', ['ngAnimate']);

App.controller('RegisterController',function ($scope) {
	var coordinates;
	$scope.regex_number = /^[0-9]*(\.[0-9]+)?$/;

	$scope.initmaps = function(){
		var mapOptions = {
			center: new google.maps.LatLng(16.256874, -92.3009364),
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map"),mapOptions);

		var marker = new google.maps.Marker({
	        position: null,
	        animation: google.maps.Animation.DROP,
	        map: map
	    });

	    google.maps.event.addListener(map, 'click', function(event) {
	    	marker.position = event.latLng;
	    	coordinates = event.latLng.k + ', ' + event.latLng.B;
	    	marker.setMap(null);
	    	marker.setMap(map);
		});
	};

	$scope.setcoordinates = function(){
		$scope.coordinates = coordinates;
	};
});

App.controller('ConsultRegisterCtrl', function($scope){

});

//JavaScript
function confirmar(e,text){
    if( !confirm(text) )
        e.preventDefault();
}

// Contraseña segura (?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$
// (Entre 8 y 10 caracteres, por lo menos un digito y un alfanumérico, y no puede contener caracteres espaciales)