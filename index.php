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

<!-- 		controller<br />Initializing the model using an Angular controller defined in an Angular module<br /><br />
		First name: <input placeholder="type something" type="text" ng-model="firstName" /><br />
		Last name: <input placeholder="type something" type="text" ng-model="lastName" /><br />
		Hello {{firstName}} {{lastName}} -->

<!-- 		controller<br />Changing scope values asynchronously - updates dont propagate without .apply()<br /><br />
		First name: <input placeholder="type something" type="text" ng-model="firstName" /><br />
		Last name: <input placeholder="type something" type="text" ng-model="lastName" /><br />
		Hello {{firstName}} {{lastName}} -->

		Controller Arrays<br />Looping over lists in templates using ng-repeat<br /><br />
		<ul>
			<li ng-repeat="name in names">{{name}}
			<!-- the a tag is within the nested scope thus 'name' is callable -->
			<a href="" ng-click="removeName(name)">remove</a></li>
		</ul>

		<form ng-submit="addName()">
			<input type="text" ng-model="enteredName" />
			<input type="submit" value="Add" />
		</form>
	</div>
	<script>
		// // controller
		// var nameApp = angular.module('nameApp', []);
		// nameApp.controller('NameCtrl', function ($scope) {
		// 	$scope.firstName = 'John';
		// 	$scope.lastName = 'Smith';
		// });

		// // changing scope values
		// var nameApp = angular.module('nameApp', []);
		// nameApp.controller('NameCtrl', function ($scope) {
		// 	$scope.firstName = 'John';
		// 	// $watch listens to changes of specific property in the model
		// 	$scope.$watch('lastName', function(newValue, oldValue) {
		// 		// immediately calls for value - currently undefined so how to tell Angular things changed?
		// 		console.log('new value is ' + newValue);
		// 		// $watch is kind of like getting outside of the Angular "world"
		// 		// ie run custom JS in response to model
		// 	});
		// 	setTimeout(function() {
		// 		$scope.lastName = 'Smith';
		// 		// $apply() tells Angular to apply changes
		// 		// we need to manually propagate changes because we are ouside the Angular "world"
		// 		// this is an asynchronous event
		// 		$scope.$apply();
		// 		// use Angular's own setTimeout feature to auto propagate changes
		// 	}, 1000);
		// });

		// // Controller Arrays
		// var nameApp = angular.module('nameApp', []);
		// nameApp.controller('NameCtrl', function ($scope) {
		// 	$scope.names = ['Larry', 'Curly', 'Moe'];
		// });

		// Controller Arrays
		var nameApp = angular.module('nameApp', []);
		nameApp.controller('NameCtrl', function ($scope) {
			$scope.names = ['Larry', 'Curly', 'Moe'];

			// declare addName() to $scope for <form> to give data to
			$scope.addName = function () {
				// enteredName is bind to the <input> text field
				$scope.names.push($scope.enteredName);
				
				// to clear input field after adding
				$scope.enteredName = "";
			};

			$scope.removeName = function (name) {
				var i = $scope.names.indexOf(name);
				// .splice ("what you want to find", 0=add/1=remove/2=remove and keep ongoing array)
				$scope.names.splice(i, 1);
			};
		});
	</script>
</body>
</html>
