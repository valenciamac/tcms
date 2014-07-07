function UsersController($scope, $http)
{	
	$http.get('public/accts').success(function(users)
	{
		$scope.users = users;
	});

	$scope.adduser = function()
	{
		var user = {
			fname: $scope.fname,
			lname: $scope.lname,
			username: $scope.username,
			password: $scope.password,
			role: $scope.role
		};

		$scope.users.push(user);

		$http.post('accts', user);
	};
}