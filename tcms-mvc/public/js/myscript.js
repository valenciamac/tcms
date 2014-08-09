function UsersController($scope, $http){

	$http.get('/accounts').success(function(users){

		$scope.users = users;

	});
}