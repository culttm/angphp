//Define an angular module for our app
var postApp = angular.module('postApp', []);
 
postApp.controller('postsController', function($scope, $http) {


	getPosts(); // Load all available tasks

	function getPosts(){
		$http.get("ajax/getPosts.php").success(function(data){

				$scope.posts = data;

/*			 if(data.length > 0){
			 	 $scope.posts = data;
			 }else{
			 	return;
			 }*/
	
 		});
	};	

	$scope.upVote = function(post){
		post.votes++;
		updateVote(post.id,post.votes);
	};	

	$scope.downVote = function(post){
		post.votes--;
		updateVote(post.id,post.votes);
	};

	function updateVote(id,votes){

		$http({
			url : "ajax/updateVote.php",
			method: "POST",
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			data: $.param({postId : id , votes : votes})
		}) 

 
	};


	$scope.deletePost = function (post) {

		$http({
			url : "ajax/deletePost.php",
			method: "POST",
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			data: $.param({postId : post.id})
		}).success(function(data){
			var index=$scope.posts.indexOf(post)
				$scope.posts.splice(index,1);
		});

	};


	$scope.addPost = function (post) {
 	
 			$http({
				url: "ajax/addPost.php",
					method: "POST",
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: $.param({postTitle : post.postTitle , postDescription : post.postDescription})
				}).success(function(data, status, headers, config) {
					$scope.data = data;
					getPosts();
				}).error(function(data, status, headers, config) {
					$scope.status = status;
			});
 
	};

 

});