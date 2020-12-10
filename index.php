<!DOCTYPE html>
<html lang="en">
<head>
	<title>Maps</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>

	<script type="text/javascript" src="app.js"></script>

</head>
<body ng-app="MapApp" >
	<div class="container bg-cream mt-4" id="main-container" ng-controller="AppCtrl" style="border-radius: 6px;">

		<h1 class="text-secondary p-4" style="font-weight: lighter;">maps</h1>

		<hr>
		<p class="text-muted p-2">
			These are a few custom maps made for Middlebury Interactive Languages. They were used in online French and Spanish high school courses. 
		</p>
		<hr>

		<div class="row" style="text-align: center;">
			<div class="col-lg-4 align-middle" data-ng-repeat="map in maps">
				<img class="map-thumbnail" ng-src="maps/{{map.image_base}}_500.jpg"  ng-attr-id="{{map.name}}-tb" ng-click="preview(map)">
				<div ng-if="map.alternates" class="d-flex justify-content-center">
					<span ng-repeat="alt in map.alternates"
					class="alternate-image-color " ng-class="
					{'original' : (alt == 'original'), 'rose' : (alt == 'rose'), 'orange' : (alt == 'orange'),}" 
					> </span>
				</div>
				<p class="align-middle">{{map.name | uppercase}}</p>
			</div>
		</div>

		<div class="modal fade" id="previewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content" id="previewModalContent" >
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 10px;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

	</div>

</body>
</html>
