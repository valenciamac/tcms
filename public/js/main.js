function UsersController($scope, $http)
{	
	$http.get('/accts').success(function(users)
	{
		$scope.users = users;
	});

	$scope.addUser = function()
	{
		var user = {
			body: $scope.newTask,
			body: $scope.newTask,
			body: $scope.newTask,
			body: $scope.newTask,
			body: $scope.newTask,
		};

		$scope.users.push(user);

		$http.post('accts', user);
	};
}