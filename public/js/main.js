function MasonController($scope, $http, $interval)
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

   

  $scope.addmason = function()
  {
    
    
    var neg = {
      itemdesc: $scope.itemdesc,
      nopieces: $scope.nopieces,
      unitmeasure: $scope.unitmeasure,
      unitprice: $scope.unitprice
      
    };

    $scope.masonry.push(neg);

    $http.post('../mason', neg);

    $scope.itemdesc = '';
    $scope.nopieces = '';
    $scope.unitmeasure = '';
    $scope.unitprice = '';
   
    
  };

  function refreshMason() {
    $http({
      url: 'bahay/mason',
      method: "GET"

    }).success(function (masonry) {
      $scope.masonry = masonry; 

    }).error(function (masonry) {
      console.log('Error');
    });
  }

  refreshMason(); // We call the function on initialization to load the feed.

  // $interval runs the given function every X millisec (2nd arg)
  $interval(function() { 
    refreshMason();
  }, 30000); // the refresh interval must be in millisec

}
function FormController($scope, $http, $interval)
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

   

  $scope.addform = function()
  {
    
    
    var gon = {
      itemdesc: $scope.itemdesc,
      nopieces: $scope.nopieces,
      unitmeasure: $scope.unitmeasure,
      unitprice: $scope.unitprice
      
    };

    $scope.formworks.push(gon);

    $http.post('../form', gon);

    $scope.itemdesc = '';
    $scope.nopieces = '';
    $scope.unitmeasure = '';
    $scope.unitprice = '';
   
    
  };

  function refreshForm() {
    $http({
      url: '../public/form',
      method: "GET"

    }).success(function (formworks) {
      $scope.formworks = formworks; 

    }).error(function (formworks) {
      console.log('Error');
    });
  }

  refreshForm(); // We call the function on initialization to load the feed.

  // $interval runs the given function every X millisec (2nd arg)
  $interval(function() { 
    refreshForm();
  }, 30000); // the refresh interval must be in millisec

}

function BomController($scope, $http, $interval)
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

   

  $scope.addbom = function()
  {
    
    
    var bombom = {
      itemdesc: $scope.itemdesc,
      unitmeasure: $scope.unitmeasure,
      unitprice: $scope.unitprice
      
    };

    $scope.bomitem.push(bombom);

    $http.post('bom', bombom);

    $scope.itemdesc = '';
    $scope.unitmeasure = '';
    $scope.unitprice = '';
   
    
  };

  function refreshBom() {
    $http({
      url: 'public/bom',
      method: "GET"

    }).success(function (bomitem) {
      $scope.bomitem = bomitem; 

    }).error(function (bomitem) {
      console.log('Error');
    });
  }

  refreshBom(); // We call the function on initialization to load the feed.

  // $interval runs the given function every X millisec (2nd arg)
  $interval(function() { 
    refreshBom();
  }, 30000); // the refresh interval must be in millisec

}


function UsersController($scope, $http, $interval)
{	
   $scope.roleOptions = [
    { name: 'System Administrator', value: 'sysAdmin' }, 
    { name: 'Accounting', value: 'accounting' }, 
    { name: 'Administrator', value: 'admin' },
    { name: 'Financing', value: 'financing' },
    { name: 'Purchasing', value: 'purchasing' },
    { name: 'Engineer', value: 'engineer' }
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

function PrsController($scope, $http)
{   var toUTCDate = function(date){
    var _utc = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(),  date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds());
    return _utc;
  };

  var millisToUTCDate = function(millis){
    return toUTCDate(new Date(millis));
  };

  
    $scope.toUTCDate = toUTCDate;
    $scope.millisToUTCDate = millisToUTCDate;

  $scope.addprs = function()
  {
    var prsitems = {
      desc: $scope.desc,
      qty: $scope.qty,
      price: $scope.price
    };

    $scope.prsitem.push(prsitems);

    $http.post('addprs', prsitems);

  };
  function refreshPrs() {
    $http({
      url: 'addprs',
      method: "GET"

    }).success(function (prsitem) {
      $scope.prsitem = prsitem; 

    }).error(function (prsitem) {
      console.log('Error');
    });
  }
  refreshPrs();
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
     $scope.quantity = 5;
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
function CashVouchersController($scope, $http, $interval)
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

  function refreshCash() 
  {
    $http({
      url: 'cash',
      method: "GET"

    }).success(function (cashvouchers) {
      $scope.cashvouchers = cashvouchers; 

    }).error(function (cashvouchers) {
      console.log('Error');
    });
  }
  refreshCash();

  $interval(function() { 
    refreshCash();
  }, 30000);
}

function CheckVouchersController($scope, $http, $interval)
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

  function refreshCheck() 
  {
    $http({
      url: 'check',
      method: "GET"

    }).success(function (checkvouchers) {
      $scope.checkvouchers = checkvouchers; 

    }).error(function (checkvouchers) {
      console.log('Error');
    });
  }
  refreshCheck();

  $interval(function() { 
    refreshCheck();
  }, 30000);

}

function CashItemController($scope, $http)
{   var toUTCDate = function(date){
    var _utc = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(),  date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds());
    return _utc;
  };

  var millisToUTCDate = function(millis){
    return toUTCDate(new Date(millis));
  };

  
    $scope.toUTCDate = toUTCDate;
    $scope.millisToUTCDate = millisToUTCDate;

  $scope.addcashitems = function()
  {
    var cash = {
      descr: $scope.descr,
      amount: $scope.amount,
      acctitle: $scope.acctitle,
      debit: $scope.debit,
      credit: $scope.credit
    };

    $scope.cashitem.push(cash);

    $http.post('addcashitems', cash);

  };
  function refreshCashItem() {
    $http({
      url: 'addcashitems',
      method: "GET"

    }).success(function (cashitem) {
      $scope.cashitem = cash; 

    }).error(function (cashitem) {
      console.log('Error');
    });
  }
  refreshCashItem();
}