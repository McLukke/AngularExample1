<html ng-app="nameApp">
<?php //include('partials/head.html'); ?>
<head>
	<title>Angular Example 1</title>
	<link rel="shortcut icon" type="image/png" href="images/coding.jpg" />
	<link rel="icon" type="image/png" href="images/coding.jpg" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
</head>
<!-- ng-app is the angular directive -->
<body>
	<div class="test" ng-controller="NameCtrl">
<!-- 		data binding<br />Updating a template when input text changes using Angular<br /><br />
		Enter name: <input placeholder="type something" type="text" ng-model="name" /><br />
		Hello {{name}} -->

<!-- 		multiple data binding<br />Data binding with many text inputs<br /><br />
		Enter name: <input placeholder="type something" type="text" ng-model="name" /><br />
		Enter name: <input placeholder="type something" type="text" ng-model="name" /><br />
		Enter name: <input placeholder="type something" type="text" ng-model="name" /><br />
		Hello {{name}} -->

<!-- 		multi-property binding<br />first name and last name<br /><br />
		First name: <input placeholder="type something" type="text" ng-model="firstName" /><br />
		Last name: <input placeholder="type something" type="text" ng-model="lastName" /><br />
		Hello {{firstName}} {{lastName}} -->

		controller<br />Initializing the model using an Angular controller defined in an Angular module<br /><br />
		First name: <input placeholder="type something" type="text" ng-model="firstName" /><br />
		Last name: <input placeholder="type something" type="text" ng-model="lastName" /><br />
		Hello {{firstName}} {{lastName}}
	</div>
	<script>
		var nameApp = angular.module('nameApp', []);
		nameApp.controller('NameCtrl', function ($scope) {
			$scope.firstName = 'John';
			$scope.lastName = 'Smith';
		});
	</script>
</body>
</html>
