function EmployeeController($scope, $http, $interval)
{	
	$scope.addemployee = function()
	{
		var employee = {
			fname: $scope.fname,
			lname: $scope.lname,
			mname: $scope.mname,
			department: $scope.department,
			position: $scope.position,
      address: $scope.address,
      basic: $scope.basic,
      days: $scope.days,
      rate: $scope.rate
		};

		$scope.employee.push(employee);

		$http.post('sals', employee);

      $scope.fname='';
      $scope.lname='';
      $scope.mname='';
      $scope.department='';
      $scope.position='';
      $scope.address='';
      $scope.basic='';
      $scope.days='';
      $scope.rate='';
    
	};

	function refresh() {
    $http({
      url: 'public/sals',
      method: "GET"

    }).success(function (employee) {
      $scope.employee = employee; 

    }).error(function (employee) {
      console.log('Error');
    });
  }

  refresh(); // We call the function on initialization to load the feed.

  // $interval runs the given function every X millisec (2nd arg)
  $interval(function() { 
    refresh();
  }, 30000); // the refresh interval must be in millisec

}
function SalsController($scope, $http, $interval)
{
  function refreshSals() 
  {
    $http({
      url: 'payrollsave',
      method: "GET"

    }).success(function (payroll) {
      $scope.payroll = payroll; 

    }).error(function (payroll) {
      console.log('Error');
    });
  }
  refreshSals();

  $interval(function() { 
    refreshSals();
  }, 30000);



}
