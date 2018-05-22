var app = angular.module('yourTask', ['ngRoute']).config(function ($routeProvider, $locationProvider) {
	$locationProvider.hashPrefix('');
	$routeProvider.when('/', {
		templateUrl: 'index.html'
	}).when('newtask', {
		templateUrl: 'newtask.html'
	}).otherwise({
		redirectTo: '/'
	});	
});
app.controller("yourTaskController", function($scope, $http) {
	
	$http({
    method: 'get', 
    url: '../tasksDb.json'
	}).then(function (response) {
		$scope.tasks = response.data;
	},function (error){
		console.log(error, 'can not get data.');
	});
	
	$scope.insertNewTasks = function() {
		
	}
	
	$scope.completeTasks = function() {
		
	}
	
	$scope.eraseTasks = function() {
		
	}
});