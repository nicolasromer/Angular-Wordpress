angular.module('app', ['ngRoute'])
.config(function( $routeProvider, $locationProvider ) {

	$locationProvider.html5Mode(true);

	$routeProvider
	.when('/', {
		templateUrl: wangular_localized.partials + 'main.html',
		controller: 'Main'
	});
})
.controller('Main', function() {
	console.log('Main file loaded.');
});