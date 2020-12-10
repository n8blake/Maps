console.log('hello from app.js');

var app = angular.module('MapApp', []);

app.controller('AppCtrl', ['$scope', function($scope) {

	console.log("hello from the controller");

	$scope.maps = MAPS;
	//$scope.selectedMap = $scope.maps[0];

	$scope.preview = function(map){
		
		//$scope.selectedMap = map;
		//console.log(imgID);
		//console.log($("imgID"));
		//console.log(img.height,           img.width);
		//console.log(img.naturalHeight,    img.naturalWidth);
		$("#previewModalContent").css("background-image", "url('" + $scope.getImageSrc(map) +"')");
		$("#previewModalContent").css("width", map.dimensions.width);
		$("#previewModalContent").css("height", map.dimensions.height);
		$('#previewModal').modal('show');
	};

	$scope.setAlt = function(map, alt){
		map.activeAlt = alt;
	};

	$scope.getImageSrc = function(map){
		if(map.alternates){
			var src = "maps/" + map.image_base;
			src += "-" + map.activeAlt + "_500.jpg";
			return src;
		} else {
			return "maps/" + map.image_base + "_500.jpg"
		}
		$scope.$apply();
	};

}]);

var MAPS = [
	{"name":"Australia",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Australia"},
	{"name":"Belgium",
	"dimensions":{"width":"500", "height":"417"},
	"alternates":["original", "orange", "rose"],
	"activeAlt":"original",
	"image_base":"Belgique"},
	{"name":"Colombia",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Colombia"},
	{"name":"Cuba",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Cuba"},
	{"name":"Dominican Republic",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Dominican_Republic"},
	{"name":"Earth",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Earth"},
	{"name":"Ecuador",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Ecuador"},
	{"name":"Senegal",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Senegal"},
	{"name":"Spain",
	"dimensions":{"width":"500", "height":"500"},
	"image_base":"Spain"},
];