var map;
var markers = [];
var coordinates;

function initmaps(){
	var mapOptions = {
		center: new google.maps.LatLng(16.256874, -92.3009364),
		zoom: 8,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map"),mapOptions);
	marker = new google.maps.Marker({
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
function initmaps2(){
	var mapOptions = {
		center: new google.maps.LatLng(16.256874, -92.3009364),
		zoom: 8,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map"),mapOptions);
	marker = new google.maps.Marker({
        position: null,
        animation: google.maps.Animation.DROP,
        map: map
    });
    
};

function setMarker(data){
	data = data.split(',');
	marker.position = new google.maps.LatLng(data[0], data[1]);
	markers.push(markers);
};
function setMarkerAnalitycs(data){
	data_gps = data.datos_gps.split(',');
	switch(data.tipo){
		case 'A':
			var iconmarker = 'iconmaps/markeryellow.png';
		break;
		case 'B':
			var iconmarker = 'iconmaps/markerblue.png';
		break;
		case 'C':
			var iconmarker = 'iconmaps/markergreen.png';
		break;
		case 'D':
			var iconmarker = 'iconmaps/markergrey.png';
		break;
		case 'E':
			var iconmarker = 'iconmaps/markerorange.png';
		break;
		case 'F':
			var iconmarker = 'iconmaps/markerred.png';
		break;
	}
	marker = new google.maps.Marker({
        position: new google.maps.LatLng(data_gps[0], data_gps[1]),
        animation: google.maps.Animation.DROP,
        map: map,
        icon: iconmarker
    });
	// marker.position = ;
};

var App = angular.module('Sismos', ['ngAnimate']);

App.controller('RegisterController',function ($scope, $http) {
	var url = document.URL.split('/').pop();
	$scope.list_records = [];
	$scope.regex_number = /^[0-9]*(\.[0-9]+)?$/;

	$scope.initmaps = function(){
		initmaps();
	};

	$scope.setcoordinates = function(){
		$scope.datos_gps = coordinates;
		$scope.record.datos_gps = coordinates;
	};

	$scope.searchrecord = function(){
		$http.get('../searchregistro',{
		  params:{
		  	id: url,
		  }	
		}).success(function($data){
			$scope.record = $data;
			setMarker($scope.record.datos_gps);
		})
	};
	$scope.searchtechos = function(){
		$http.get('gettechos',{
		  params:{
		  	muro: $scope.material_muro,
		  }	
		}).success(function($data){
			$scope.techos = $data;
			console.log($data);
		})
	};	
	$scope.searchtechosupdate = function(){
		$http.get('../gettechos',{
		  params:{
		  	muro: $scope.record.material_muro,
		  }	
		}).success(function($data){
			$scope.techos = $data;
			console.log($data);
		})
	};	
	$scope.searchrecords = function(){
		$http.get('../searchregistros',{
		  params:{
		  	director: '',
		  	formato: ''
		  }	
		}).success(function($data){
			angular.forEach($data, function(value, key){
				$scope.list_records.push(value.id);
			});
			$scope.index = $scope.list_records.indexOf(parseInt(url));
		});
	};
});

App.controller('ManagerCtrl', function ($scope, $http) {
	$scope.search = function(){
		$http.get('searchusers',{
	      params:{
	        username: $scope.username,
	        type: $scope.type
	      }
	    }).success(function($data){
	      $scope.users = $data;
	    })
	};
	$scope.searchdirectores = function(){
		$http.get('searcdirectores',{
	      params:{
	        full_name: $scope.full_name
	      }
	    }).success(function($data){
	      $scope.directores = $data;
	    })
	};
	$scope.searchrecords = function(){
		$http.get('searchregistros',{
		  params:{
		  	director: $scope.director,
		  	formato: $scope.formato
		  }	
		}).success(function($data){
			$scope.registros = $data;			
		})
	};
});

App.controller('AnalitycsCtrl', function ($scope, $http) {
	$scope.initmaps = function(){
		initmaps2();
	};
	$scope.searchrecords = function(){
		$http.get('getAnalytics',{
		  params:{
		  	zona: $scope.zona
		  }	
		}).success(function($data){
			$scope.data = $data;
			console.log($scope.data);



			initmaps2();
			angular.forEach($data.table2, function(value, key){
				setMarkerAnalitycs(value);
			})
		})
	};
	$scope.getAnalyticsTable = function(){
		$http.get('getAnalyticsTable',{
		  params:{
		  	zona: $scope.zona,
		  	fuentes: $scope.fuente
		  }	
		}).success(function($data){
			$scope.data = $data;
			console.log($data);
		})
	};
});

App.controller('UpdateCtrl', function ($scope, $http) {
});

//JavaScript
function confirmar(e,text){
    if( !confirm(text) )
        e.preventDefault();
}

// Contraseña segura (?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$
// (Entre 8 y 10 caracteres, por lo menos un digito y un alfanumérico, y no puede contener caracteres espaciales)