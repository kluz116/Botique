(function  () {

	var myapp = angular.module("myapp",["ionic","ui.router"]);

	myapp.controller('LikeCtrl',function  ($scope) {
		var hasLiked=false;
			$scope.likeClick=function() {
				if (!hasLiked) {
					hasLiked=true;
					$scope.liked='Unlike';
					$scope.likeCount+=1;

				} else{

					hasLiked=false;
					$scope.liked='Like';
					$scope.likeCount-=1;
				};
			};
	});


	myapp.controller('MyCtrl',function($scope){


			var hasLiked=false;
			$scope.likeClick=function() {
				if (!hasLiked) {
					hasLiked=true;
					$scope.liked='Unlike';
					$scope.likeCount+=1;

				} else{

					hasLiked=false;
					$scope.liked='Like';
					$scope.likeCount-=1;
				};
			};


	});

	myapp.config(function ($stateProvider,$urlRouterProvider) {

		$urlRouterProvider.otherwise("/dresses");

		$stateProvider
		.state('dresses',{
			url:"/dresses",
			templateUrl:"partials/dresses.html",
			controller:function  ($scope,$http) {
				$http.get('files/dresses.php').success(function (data) {
					$scope.dresses = data;
				}).error(function  (data) {
					// body...
				})
			}
		})
		
		.state('pants',{
			url:"/pants",
			templateUrl:"partials/pants.html",
			controller:function  ($scope,$http) {
				$http.get('files/pants.php').success(function (data) {
					$scope.pants = data;
				}).error(function  (data) {
					// body...
				})
			}
		})
		.state('tops',{
			url:"/tops",
			templateUrl:"partials/tops.html",
			controller:function  ($scope,$http) {
				$http.get('files/tops.php').success(function (data) {
					$scope.tops = data;
				}).error(function  (data) {
					// body...
				})
			}
		})
		.state('shoes',{
			url:"/shoes",
			templateUrl:"partials/shoes.html",
			controller:function  ($scope,$http) {
				$http.get('files/shoes.php').success(function (data) {
					$scope.shoes = data;
				}).error(function  (data) {
					// body...
				})
			}
		})
		// body...
	});
	
})();