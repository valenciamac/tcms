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
  $scope.payrol=[];
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
  $scope.total = function() {
        var total = 0;
        angular.forEach($scope.payroll, function(payroll) {
            total += payroll.income;
        })

        return total;
    }
  refreshSals();

  $interval(function() { 
    refreshSals();
  }, 30000);



}

function SahodController($scope, $http, $interval)
{
  function refreshSahod() 
  {
    $http({
      url: 'ratesave',
      method: "GET"

    }).success(function (rate) {
      $scope.rate = rate; 

    }).error(function (rate) {
      console.log('Error');
    });
  }
  refreshSahod();

  $interval(function() { 
    refreshSahod();
  }, 30000);



}
function PhilhealthController($scope, $http, $interval)
{
  function refreshPhilhealth() 
  {
    $http({
      url: 'ph',
      method: "GET"

    }).success(function (phcontr) {
      $scope.phcontr = phcontr; 

    }).error(function (phcontr) {
      console.log('Error');
    });
  }
  refreshPhilhealth();

  $interval(function() { 
    refreshPhilhealth();
  }, 30000);



}

function SssController($scope, $http, $interval)
{
  function refreshSss() 
  {
    $http({
      url: 'sss',
      method: "GET"

    }).success(function (ssscontr) {
      $scope.ssscontr = ssscontr; 

    }).error(function (ssscontr) {
      console.log('Error');
    });
  }
  refreshSss();

  $interval(function() { 
    refreshSss();
  }, 30000);



}

function PagibigController($scope, $http, $interval)
{
  function refreshPagibig() 
  {
    $http({
      url: 'pg',
      method: "GET"

    }).success(function (pagibig) {
      $scope.pagibig = pagibig; 

    }).error(function (pagibig) {
      console.log('Error');
    });
  }
  refreshPagibig();

  $interval(function() { 
    refreshPagibig();
  }, 30000);



}
function AstigController($scope, $http, $interval)
{
    var toUTCDate = function(date){
    var _utc = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(),  date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds());
    return _utc;
  };

  var millisToUTCDate = function(millis){
    return toUTCDate(new Date(millis));
  };

  
    $scope.toUTCDate = toUTCDate;
    $scope.millisToUTCDate = millisToUTCDate;
   

  function refreshAstig() 
  {
    $http({
      url: 'astig',
      method: "GET"

    }).success(function (activities) {
      $scope.activities = activities; 

    }).error(function (activities) {
      console.log('Error');
    });
  }
  refreshAstig();

  $interval(function() { 
    refreshAstig();
  }, 30000);



}


