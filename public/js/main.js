


function UsersController($scope, $http, $interval)
{	
   $scope.roleOptions = [
    { name: 'System Administrator', value: 'sysAdmin' }, 
    { name: 'Accounting', value: 'accounting' }, 
    { name: 'Administrator', value: 'admin' },
    { name: 'Financing', value: 'financing' },
    { name: 'Purchasing', value: 'purchasing' }
    ];

    var toUTCDate = function(date){
    var _utc = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(),  date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds());
    return _utc;
  };

  var millisToUTCDate = function(millis){
    return toUTCDate(new Date(millis));
  };

  
    $scope.toUTCDate = toUTCDate;
    $scope.millisToUTCDate = millisToUTCDate;

   

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

    $scope.fname = '';
    $scope.lname = '';
    $scope.username = '';
    $scope.password = '';
    $scope.role = '';
    
	};

	function refresh() {
    $http({
      url: 'public/accts',
      method: "GET"

    }).success(function (users) {
      $scope.users = users; 

    }).error(function (users) {
      console.log('Error');
    });
  }

  refresh(); // We call the function on initialization to load the feed.

  // $interval runs the given function every X millisec (2nd arg)
  $interval(function() { 
    refresh();
  }, 30000); // the refresh interval must be in millisec

}
function ActsController($scope, $http, $interval)
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

  function refreshActs() 
  {
    $http({
      url: 'save',
      method: "GET"

    }).success(function (activities) {
      $scope.activities = activities; 

    }).error(function (activities) {
      console.log('Error');
    });
  }
  refreshActs();

  $interval(function() { 
    refreshActs();
  }, 30000);



}
function PosController($scope, $http, $interval)
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

  function refreshPO() 
  {
    $http({
      url: 'po',
      method: "GET"

    }).success(function (pos) {
      $scope.pos = pos; 

    }).error(function (pos) {
      console.log('Error');
    });
  }
  refreshPO();

  $interval(function() { 
    refreshPO();
  }, 30000);
}

function ItemsController($scope, $http)
{   var toUTCDate = function(date){
    var _utc = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(),  date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds());
    return _utc;
  };

  var millisToUTCDate = function(millis){
    return toUTCDate(new Date(millis));
  };

  
    $scope.toUTCDate = toUTCDate;
    $scope.millisToUTCDate = millisToUTCDate;

  $scope.additem = function()
  {
    var items = {
      iname: $scope.iname,
      desc: $scope.desc,
      qty: $scope.qty,
      price: $scope.price
    };

    $scope.item.push(items);

    $http.post('additem', items);

  };
  function refreshItems() {
    $http({
      url: 'additem',
      method: "GET"

    }).success(function (item) {
      $scope.item = item; 

    }).error(function (item) {
      console.log('Error');
    });
  }
  refreshItems();
}
function PurchasesController($scope, $http, $interval)
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

  function refreshPO() 
  {
    $http({
      url: 'pur',
      method: "GET"

    }).success(function (pos) {
      $scope.pos = pos; 

    }).error(function (pos) {
      console.log('Error');
    });
  }
  refreshPO();

  $interval(function() { 
    refreshPO();
  }, 30000);
}
function ProjectsController($scope, $http, $interval)
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
    
  function refreshProjects() 
  {
    $http({
      url: 'addproject',
      method: "GET"

    }).success(function (projects) {
      $scope.projects = projects; 

    }).error(function (projects) {
      console.log('Error');
    });
  }
  refreshProjects();

  $interval(function() { 
    refreshActs();
  }, 30000);



}
function MrsController($scope, $http, $interval)
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

  function refreshMrs() 
  {
    $http({
      url: 'getmrs',
      method: "GET"

    }).success(function (mrs) {
      $scope.mrs = mrs; 

    }).error(function (mrs) {
      console.log('Error');
    });
  }
  refreshMrs();

  $interval(function() { 
    refreshMrs();
  }, 30000);



}